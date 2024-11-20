package client;

import soapclient.Calculator;
import soapclient.CalculatorSoap;

public class CalculatorClient {
    public static void main(String[] args) {
        // Crear una instancia del servicio
        Calculator service = new Calculator();
        CalculatorSoap port = service.getCalculatorSoap();

        // Invocar operaciones del servicio
        int a = 10;
        int b = 5;

        System.out.println("Operaciones con SOAP Calculator:");
        System.out.println("Suma (" + a + " + " + b + "): " + port.add(a, b));
        System.out.println("Resta (" + a + " - " + b + "): " + port.subtract(a, b));
        System.out.println("Multiplicación (" + a + " * " + b + "): " + port.multiply(a, b));
        System.out.println("División (" + a + " / " + b + "): " + port.divide(a, b));
    }
}
