using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EstudoClasses
{
    public class Carro :  Veiculo
    {
        //public static double PotenciaMinima = 1.0;
        private string marca;
        public int NumeroPortas { get; set; }
        private List<string> antigosDonos;

        public void AdicionarAntigoDono(string nome)
        {
            antigosDonos.Add(nome);
        }

        public List<string> GetAntigosDonos()
        {
            return antigosDonos;
        }

        public string Ligar()
        {
            return "O carro agora está ligado";
        }

        //public static int GetSoma(int a, int b)
        //{
        //return a + b;
        //}

        public Carro()
        {
            this.antigosDonos = new List<string>();
            this.NumeroPortas = 4;
        }

        public Carro(string nomeCarro)
        {
            this.Nome = nomeCarro;
        }

        public Carro(string nomeMarca, int numeroPortas)
        {
            this.Marca = nomeMarca;
            this.NumeroPortas = numeroPortas;
        }

        public Carro(int numeroPortas)
        {
            this.NumeroPortas = numeroPortas;
        }

        public Carro(string marca, string nome, int quantidadePortas = 4)
        {
            this.Marca = marca;
            this.Nome = nome;
            this.NumeroPortas = quantidadePortas;
        }
    }
}
