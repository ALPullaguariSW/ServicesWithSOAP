<?php
// Inicializar el cliente SOAP
$client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");

// Verificar si la solicitud entrante es SOAP
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($GLOBALS['HTTP_RAW_POST_DATA'])) {
    // Obtener la solicitud SOAP
    $rawRequest = $GLOBALS['HTTP_RAW_POST_DATA'];

    // Cargar la solicitud SOAP
    $soapRequest = simplexml_load_string($rawRequest);
    
    // Verificar si el método de la solicitud es 'Add', 'Subtract', 'Multiply' o 'Divide'
    if (isset($soapRequest->Body->Add)) {
        $intA = (int) $soapRequest->Body->Add->intA;
        $intB = (int) $soapRequest->Body->Add->intB;
        
        try {
            // Realizar la operación de suma
            $result = $client->Add(['intA' => $intA, 'intB' => $intB]);
            echo "Resultado de la suma: " . $result->AddResult;
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->faultcode . ", " . $fault->faultstring;
        }
    } elseif (isset($soapRequest->Body->Subtract)) {
        $intA = (int) $soapRequest->Body->Subtract->intA;
        $intB = (int) $soapRequest->Body->Subtract->intB;

        try {
            // Realizar la operación de resta
            $result = $client->Subtract(['intA' => $intA, 'intB' => $intB]);
            echo "Resultado de la resta: " . $result->SubtractResult;
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->faultcode . ", " . $fault->faultstring;
        }
    } elseif (isset($soapRequest->Body->Multiply)) {
        $intA = (int) $soapRequest->Body->Multiply->intA;
        $intB = (int) $soapRequest->Body->Multiply->intB;

        try {
            // Realizar la operación de multiplicación
            $result = $client->Multiply(['intA' => $intA, 'intB' => $intB]);
            echo "Resultado de la multiplicación: " . $result->MultiplyResult;
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->faultcode . ", " . $fault->faultstring;
        }
    } elseif (isset($soapRequest->Body->Divide)) {
        $intA = (int) $soapRequest->Body->Divide->intA;
        $intB = (int) $soapRequest->Body->Divide->intB;

        try {
            // Realizar la operación de división
            $result = $client->Divide(['intA' => $intA, 'intB' => $intB]);
            echo "Resultado de la división: " . $result->DivideResult;
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->faultcode . ", " . $fault->faultstring;
        }
    } else {
        echo "Método no soportado";
    }
} else {
    echo "Esperando solicitud SOAP...";
}
?>
