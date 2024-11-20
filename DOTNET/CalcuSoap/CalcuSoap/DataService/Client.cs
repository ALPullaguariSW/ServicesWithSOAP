using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;

namespace CalcuSoap.DataService
{
    public class Client
    {
        public string sumar(string intA, string intB)
        {
            int numero1 = int.Parse(intA);
            int numero2 = int.Parse(intB);
            ServiceReference1.CalculatorSoapClient op = new ServiceReference1.CalculatorSoapClient("CalculatorSoap");
            int respuesta = op.Add(numero1, numero2);
            string respuestaR = respuesta.ToString();

            return respuestaR;

        }
        public string restar(string intA, string intB)
        {
            int numero1 = int.Parse(intA);
            int numero2 = int.Parse(intB);
            ServiceReference1.CalculatorSoapClient op = new ServiceReference1.CalculatorSoapClient("CalculatorSoap");
            int respuesta = op.Subtract(numero1, numero2);
            string respuestaR = respuesta.ToString();

            return respuestaR;

        }
        public string multiplicar(string intA, string intB)
        {
            int numero1 = int.Parse(intA);
            int numero2 = int.Parse(intB);
            ServiceReference1.CalculatorSoapClient op = new ServiceReference1.CalculatorSoapClient("CalculatorSoap");
            int respuesta = op.Multiply(numero1, numero2);
            string respuestaR = respuesta.ToString();

            return respuestaR;

        }
        public string dividir(string intA, string intB)
        {
            // Convertir los parámetros de entrada a enteros
            int numero1 = int.Parse(intA);
            int numero2 = int.Parse(intB);

            // Validar si el segundo número es cero para evitar división por cero
            if (numero2 == 0)
            {
                return "Error: División por cero no es posible.";
            }

            // Crear una instancia del cliente SOAP
            ServiceReference1.CalculatorSoapClient op = new ServiceReference1.CalculatorSoapClient("CalculatorSoap");

            // Obtener el resultado de la división como un entero (parte entera)
            int respuestaEntera = op.Divide(numero1, numero2);

            // Realizar la división en tu código para obtener un decimal
            double respuestaDecimal = (double)numero1 / numero2;

            // Convertir el resultado decimal a string con 2 decimales
            string respuestaR = respuestaDecimal.ToString("F2");

            return respuestaR;
        }

    }
}