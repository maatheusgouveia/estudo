using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace estudoSwitch
{
    public partial class frmSwitch : Form
    {
        public frmSwitch()
        {
            InitializeComponent();
        }

        private void btnVerificarNumero_Click(object sender, EventArgs e)
        {
            int numeroDigitado = Convert.ToInt32(txbNumero.Text);

            switch (numeroDigitado)
            {
                case 0:
                case 1:
                case 2:
                case 3:
                    MessageBox.Show("Número baixo");
                    break;
                case 4:
                case 5:
                case 6:
                    MessageBox.Show("Número médio");
                    break;
                default:
                    MessageBox.Show("Número alto");
                    break;
            }
                
        }
    }
}
