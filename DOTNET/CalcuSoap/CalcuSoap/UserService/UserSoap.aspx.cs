using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using CalcuSoap.DataService;

namespace CalcuSoap.UserService
{
    public partial class UserSoap : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            Client client = new Client();
            txtResultado.Text = client.sumar(txtNumero1.Text, txtNumero2.Text);
        }

        protected void Button2_Click(object sender, EventArgs e)
        {
            Client client = new Client();
            txtResultado.Text = client.restar(txtNumero1.Text, txtNumero2.Text);
        }

        protected void Button3_Click(object sender, EventArgs e)
        {
            Client client = new Client();
            txtResultado.Text = client.multiplicar(txtNumero1.Text, txtNumero2.Text);
        }

        protected void Button4_Click(object sender, EventArgs e)
        {
           Client client = new Client();
            txtResultado.Text = client.dividir(txtNumero1.Text, txtNumero2.Text);

        }

    }
}