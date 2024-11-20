from zeep import Client

def main():
    # URL del WSDL
    wsdl_url = "http://www.dneonline.com/calculator.asmx?WSDL"

    # Crear cliente SOAP
    client = Client(wsdl=wsdl_url)

    # Llamar al método Add
    result_add = client.service.Add(15, 10)
    print(f"Resultado de la suma: {result_add}")

    # Llamar al método Subtract
    result_subtract = client.service.Subtract(20, 5)
    print(f"Resultado de la resta: {result_subtract}")

    # Llamar al método Multiply
    result_multiply = client.service.Multiply(6, 7)
    print(f"Resultado de la multiplicación: {result_multiply}")

    # Llamar al método Divide
    result_divide = client.service.Divide(50, 5)
    print(f"Resultado de la división: {result_divide}")

if __name__ == "__main__":
    main()
