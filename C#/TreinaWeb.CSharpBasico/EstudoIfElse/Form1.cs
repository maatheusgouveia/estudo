﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace EstudoIfElse
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnVerificarIdade_Click(object sender, EventArgs e)
        {
            int idade = Convert.ToInt32(txbIdade.Text);
            if(idade >= 18)
            {
                MessageBox.Show("Você é maior de idade");
            }
            else
            {
                MessageBox.Show("Você é menor de idade");
            }
        }

    }
}
