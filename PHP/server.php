<?php
// Clase con la lógica del servidor SOAP
class CalculatorService {

    // Método para la suma
    public function Add($params) {
        return $params['intA'] + $params['intB'];
    }

    // Método para la resta
    public function Subtract($params) {
        return $params['intA'] - $params['intB'];
    }

    // Método para la multiplicación
    public function Multiply($params) {
        return $params['intA'] * $params['intB'];
    }

    // Método para la división
    public function Divide($params) {
        if ($params['intB'] == 0) {
            throw new SoapFault("Server", "No se puede dividir por cero.");
        }
        return $params['intA'] / $params['intB'];
    }
}

// Configuración de las opciones del servidor SOAP
$options = [
    'uri' => "http://localhost/server_php" // Cambiar la URL base si usas otro servidor
];

// Crear una instancia del servidor SOAP
$server = new SoapServer(null, $options);

// Configurar la clase que implementa los métodos del servicio
$server->setClass('CalculatorService');

// Procesar las solicitudes
$server->handle();
?>
