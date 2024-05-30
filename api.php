<?php
    require_once "conexion.php";
    require_once "Dato.php";
    $objetoDato = new Dato($conn);
    $metodo = $_SERVER["REQUEST_METHOD"];
    $endpoint = $_SERVER["PATH_INFO"];
    header("Content-Type: application/json");
    switch ($metodo) {
        case 'GET':
            if ($endpoint === '/dato') {                
                $datos = $objetoDato->getAllDatos();
                echo json_encode($datos);
            }
            break;
        case 'POST':
            if ($endpoint === '/dato') {  
                $data = json_decode(file_get_contents('php://input'), true);
                $result = $objetoDato->addDato($data);
                echo json_encode(["finalizado"=>$result]);
            }
            break;
        default:
            # code...
            break;
    }
?>