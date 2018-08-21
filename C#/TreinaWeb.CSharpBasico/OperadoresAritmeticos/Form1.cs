using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OperadoresAritmeticos
{
    public partial class frmCalculadora : Form
    {
        public frmCalculadora()
        {
            InitializeComponent();
        }

        private void btnMultiplicar_Click(object sender, EventArgs e)
        {
            int numero1 = Convert.ToInt32(txbNumero1.Text);
            int numero2 = Convert.ToInt32(txbNumero2.Text);
            //int resultado = numero1 * numero2;
            //numero1 *= numero2;
            //txbResultado.Text = numero1.ToString();

            txbResultado.Text = Multiplicar(numero1, numero2).ToString();
        }

        private void btnSomar_Click(object sender, EventArgs e)
        {
            int numero1 = Convert.ToInt32(txbNumero1.Text);
            int numero2 = Convert.ToInt32(txbNumero2.Text);
            //int resultado = numero1 + numero2;
            //numero1 += numero2;
            //txbResultado.Text = numero1.ToString();

            txbResultado.Text = Somar(numero1, numero2).ToString();
        }

        private void btnSubtrair_Click(object sender, EventArgs e)
        {
            int numero1 = Convert.ToInt32(txbNumero1.Text);
            int numero2 = Convert.ToInt32(txbNumero2.Text);
            //int resultado = numero1 - numero2;
            //numero1 -= numero2;
            //txbResultado.Text = numero1.ToString();

            txbResultado.Text = Subtrair(numero1, numero2).ToString();
        }

        private void btnDividir_Click(object sender, EventArgs e)
        {
            int numero1 = Convert.ToInt32(txbNumero1.Text);
            int numero2 = Convert.ToInt32(txbNumero2.Text);
            //int resultado = numero1 / numero2;
            //numero1 /= numero2;
            //txbResultado.Text = numero1.ToString();

            txbResultado.Text = Dividir(numero1, numero2).ToString();
        }

        int Somar(params int[] numeros)
        {
            int resultado = 0;
            foreach(int numero in numeros)
            {
                resultado += numero;
            }
            return resultado;
        }

        int Subtrair(params int[] numeros)
        {
            int resultado = 0;
            foreach (int numero in numeros)
            {
                resultado -= numero;
            }
            return resultado;
        }

        int Multiplicar(params int[] numeros)
        {
            int resultado = 1;
            foreach (int numero in numeros)
            {
                resultado *= numero;
            }
            return resultado;
        }

        int Dividir(params int[] numeros)
        {
            int resultado = 1;
            foreach (int numero in numeros)
            {
                resultado /= numero;
            }
            return resultado;
        }
    }
}
