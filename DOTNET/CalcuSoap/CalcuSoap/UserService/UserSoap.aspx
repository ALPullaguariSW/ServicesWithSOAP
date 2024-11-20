<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="UserSoap.aspx.cs" Inherits="CalcuSoap.UserService.UserSoap" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 50px 0; /* Ajuste de padding vertical */
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
    
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            width: 600px; 
            height: auto; 
        }

        .row {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            width: 100%; /* Ajuste para ocupar todo el ancho del contenedor */
        }

        .label {
            margin-right: 10px;
            font-weight: bold;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .textbox {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 150px; /* Ancho fijo para los cuadros de texto */
        }
    </style>
</head>
<body>
    <form id="form1" runat="server" class="container">
        <h1>Calculadora</h1>

        <div class="row">
            <asp:Label ID="Label1" runat="server" CssClass="label" Text="Número 1:"></asp:Label>
            <asp:TextBox ID="txtNumero1" runat="server" CssClass="textbox"></asp:TextBox>
        </div>

        <div class="row">
            <asp:Label ID="Label2" runat="server" CssClass="label" Text="Número 2:"></asp:Label>
            <asp:TextBox ID="txtNumero2" runat="server" CssClass="textbox"></asp:TextBox>
        </div>

        <div class="row">
            <asp:Button ID="btnSumar" runat="server" CssClass="button" OnClick="Button1_Click" Text="Sumar" />
            <asp:Button ID="btnRestar" runat="server" CssClass="button" OnClick="Button2_Click" Text="Restar" />
            <asp:Button ID="btnMultiplicar" runat="server" CssClass="button" OnClick="Button3_Click" Text="Multiplicar" />
            <asp:Button ID="btnDividir" runat="server" CssClass="button" OnClick="Button4_Click" Text="Dividir" />
        </div>

        <div class="row">
            <asp:Label ID="LabelResultado" runat="server" CssClass="label" Text="Resultado:"></asp:Label>
            <asp:TextBox ID="txtResultado" runat="server" CssClass="textbox"></asp:TextBox>
        </div>
    </form>
</body>
</html>
