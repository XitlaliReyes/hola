<?php
    $ori=$_FILES['file']['name'];
    $directorio_imagen = "perfiles/"; 
    $nombre_original = $ori;
    $nuevo_nombre = "perfil.jpg"; 
    rename($directorio_imagen . $nombre_original, $directorio_imagen . $nuevo_nombre);
    $oppa=$directorio_imagen.$nuevo_nombre;
header('Content-Type: text/html; charset=UTF-8');
require('fpdf/fpdf.php');
//Generar PDF
class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'CODECRAFTERS', 0, 1, 'C');
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

    $pdf->Image('../../img/LogoTemp2.png', 95, 3, 20, 20, 'PNG');     
    $pdf->Image('../../img/Firma.png', 75, 220, 50, 50, 'PNG');     
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

    $pdf->Image("$oppa", 90, 50, 25, 30, 'JPG');
    $pdf->Line(70, 250, 140, 250);
    $pdf->SetFont('Arial', '', 12); 
    $pdf->Cell(0, 10, "Solicitud de Puesto en Codecrafters", 0, 1, 'C');
    date_default_timezone_set('America/Mexico_City'); // Configura la zona horaria
    $archivo_actual = __FILE__; // Obtiene el nombre del archivo actual
    $ultimaActualizacion = date('d/m/Y H:i:s', filemtime($archivo_actual));
    $pdf->Cell(0, 10, "Imagen del aspirante", 0, 1, 'C');
    $pdf->Ln(35);
    $pdf->Cell(0, 5,"El dia de ".date('d/m/Y'),0,1,'C');
    $pdf->SetFont('Arial', 'B', 12); 
    $pdf->Cell(0, 10, "Informacion del Aspirante:", 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12); 
    $pdf->MultiCell(0, 7, "El aspirante,  $nombre $apellidoPaterno $apellidoMaterno, por medio del presente documento, solicita el puesto de: '$puesto' para  tener la posibilidad de contribuir a la mision de Codecrafters y formar parte de un equipo con dedicacion. 
Con el telefono: $telefono
Posicion deseada: $puesto 
Fecha de nacimiento: $diaNacimiento/$mesNacimiento/$aNacimiento
$nombre $apellidoPaterno $apellidoMaterno es un profesional con experiencia en los lenguajes de programacion como: ", 0, 'J', 0);
    $pdf->Cell(0, 7, "" . implode(", ", $lenguajes), 0, 1, 'L');
    $pdf->SetFont('Arial', 'B', 12); 
    $pdf->Cell(0, 7, "Informacion adicional del aspirante", 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12); 
    $pdf->Cell(0, 7, "Disponibilidad para viajar: $disponibilidadViajar", 0, 1, 'L');
    $pdf->Cell(0, 7, "Disponibilidad para cambio de residencia: $disponibilidadResidencia", 0, 1, 'L');
    $pdf->Cell(0, 7, "Ingles: $ingles", 0, 1, 'L');
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
        $pdf->Cell(0, 10, "El codigo para realizar el examen es: $codigoAleatorio", 0, 1, 'L'); 
    }else{
        $pdf->Cell(0, 10, "Tu codigo ya ha sido asignado, por favor revisa el primer documento generado", 0, 1, 'L');
    }
    $pdf->Ln(55);
    $pdf->Cell(0, 10, "Firma", 0, 1, 'C');    
    $pdf->Cell(0,5,'Christopher Martinez Gonzalez',0,1,'C'); 
    $pdf->Cell(0,5,'DIRECTOR',0,1,'C');
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
