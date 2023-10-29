<?php
header('Content-Type: text/html; charset=UTF-8');
require('fpdf/fpdf.php');

//Generar PDF
class PDF extends FPDF
    {
        function Header()
        {
            // Logo de la empresa
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'CODECRAFTERS', 0, 1, 'C');
            $this->Ln(30); 
        }
    
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    
            $this->SetLineWidth(0.5); 
            $this->SetDrawColor(0, 0, 0); 
            $this->Line(10, $this->GetY(), 200, $this->GetY()); 
        }
    }
    
    $pdf = new PDF();
    $pdf->SetMargins(20, 20, 20);
    $pdf->AddPage();
    
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoP'];
    $apellidoMaterno = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $diaNacimiento = $_POST['dia'];
    $mesNacimiento = $_POST['mes'];
    $aNacimiento = $_POST['año'];
    $lenguajes = $_POST['lenguajes']; // Un array con las opciones seleccionadas
    $disponibilidadViajar = $_POST['disponibilidad_viajar'];
    $disponibilidadResidencia = $_POST['disponibilidad_residencia'];
    $ingles = $_POST['ingles'];
    $puesto = $_POST['puesto'];
    $cod = '';
    
    $pdf->SetFont('Arial', '', 12); 
    $pdf->Cell(0, 10, "Solicitud de Puesto en Codecrafters", 0, 1, 'C');
    $pdf->Cell(0, 10, "Por medio del presente documento, solicito el puesto de:", 0, 1, 'C');
    $pdf->MultiCell(0, 10, $puesto, 0, 'C');
    $pdf->Ln(10);
    $pdf->Cell(0, 10, "Informacion Personal:", 0, 1, 'C');
    $pdf->Cell(0, 10, "Nombre: $nombre $apellidoPaterno $apellidoMaterno", 0, 1, 'L');
    $pdf->Cell(0, 10, "Telefono: $telefono", 0, 1, 'L');
    $pdf->Cell(0, 10, "Fecha de Nacimiento: $diaNacimiento/$mesNacimiento/$aNacimiento", 0, 1, 'L');
    $pdf->Cell(0, 10, "Lenguajes de Programacion que domina: " . implode(", ", $lenguajes), 0, 1, 'L');
    $pdf->Cell(0, 10, "Disponibilidad para viajar: $disponibilidadViajar", 0, 1, 'L');
    $pdf->Cell(0, 10, "Disponibilidad para cambio de residencia: $disponibilidadResidencia", 0, 1, 'L');
    $pdf->Cell(0, 10, "Nivel de Ingles: $ingles", 0, 1, 'L');
    $codigoAleatorio = generarCodigoAleatorio(10);

    $usuario = $_SESSION["usuario"];
    $email = $_SESSION["email"];
    $archivo = "archivo1.txt";

    if (!file_exists($archivo)) {
        touch($archivo);
    }

    $codigoAleatorio = generarCodigoAleatorio(10);
    $encontrado = false;

    $file = fopen($archivo, "a+");

    while (!feof($file)) {
        $linea = fgets($file);
        if ($linea != "") {
            $aux = preg_split("/[\s,]+/", $linea);
            $user = $aux[0];
            $codigo = $aux[1];

            if ($user === $usuario) {
                $encontrado = true;
                break;
            }

            if ($codigo === $codigoAleatorio) {
                // Si el código ya existe en el archivo, genera uno nuevo y reinicia el bucle
                $codigoAleatorio = generarCodigoAleatorio(10);
                fseek($file, 0); // Reinicia el bucle para volver a verificar
            }
        }
    }

    if (!$encontrado) {
        fwrite($file, $usuario . " " . $codigoAleatorio . " " . $email . " false\r\n");
        $pdf->Cell(0, 10, "Codigo: $codigoAleatorio");
    }else{
        $pdf->Cell(0, 10, "Este usuario ya tiene un codigo asignado, por favor revisa tu primer documento");
    }
    
    fclose($file);
    function generarCodigoAleatorio($longitud) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-';
        $codigo = '';
        
        for ($i = 0; $i < $longitud; $i++) {
            $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        
        return $codigo;
    }
    
    $pdf->Output();
?>
