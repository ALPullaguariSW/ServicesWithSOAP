from tkinter import Tk, Label, Entry, Button, StringVar, ttk
from zeep import Client

# Función para conectarse al servicio SOAP
def calculate():
    try:
        # Obtener los valores de los campos
        num1 = int(entry_num1.get())
        num2 = int(entry_num2.get())
        operation = operation_var.get()

        # Crear cliente SOAP
        wsdl_url = "http://www.dneonline.com/calculator.asmx?WSDL"
        client = Client(wsdl=wsdl_url)

        # Llamar al método correspondiente
        if operation == "Add":
            result = client.service.Add(num1, num2)
        elif operation == "Subtract":
            result = client.service.Subtract(num1, num2)
        elif operation == "Multiply":
            result = client.service.Multiply(num1, num2)
        elif operation == "Divide":
            result = client.service.Divide(num1, num2)
        else:
            result = "Operación no válida"

        # Mostrar el resultado
        result_var.set(f"Resultado: {result}")
    except Exception as e:
        result_var.set(f"Error: {e}")

# Crear ventana principal
root = Tk()
root.title("Calculadora SOAP")
root.geometry("300x300")

# Etiquetas y campos de entrada
Label(root, text="Número 1:").pack(pady=5)
entry_num1 = Entry(root)
entry_num1.pack(pady=5)

Label(root, text="Número 2:").pack(pady=5)
entry_num2 = Entry(root)
entry_num2.pack(pady=5)

Label(root, text="Operación:").pack(pady=5)
operation_var = StringVar(value="Add")
operation_menu = ttk.Combobox(root, textvariable=operation_var)
operation_menu['values'] = ["Add", "Subtract", "Multiply", "Divide"]
operation_menu.pack(pady=5)

# Botón para calcular
Button(root, text="Calcular", command=calculate).pack(pady=10)

# Mostrar resultado
result_var = StringVar()
Label(root, textvariable=result_var).pack(pady=20)

# Ejecutar la aplicación
root.mainloop()
