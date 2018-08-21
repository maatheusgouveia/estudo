using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EstudoClasses
{
    class Program
    {
        static void Main(string[] args)
        {
            Carro carro = new Carro();
            carro.Marca = "Fiat";
            //carro.AntigosDonos = new List<string>();
            //carro.AntigosDonos.Add("Clebinho");
            Console.WriteLine("A marca do  carro é {0}", carro.Marca);
            //foreach(string dono in carro.AntigosDonos)
            //{
            //  Console.WriteLine("Um dos antigos donos é {0}", dono);
            //}
            carro.AdicionarAntigoDono("João");
            carro.AdicionarAntigoDono("Maria");
            foreach(string dono in carro.GetAntigosDonos())
            {
              Console.WriteLine("Um dos antigos donos é {0}", dono);
            }
            Console.WriteLine("{0}", carro.Ligar());

            //Console.WriteLine(Carro.GetSoma(2, 3));
            Console.WriteLine("Este carro tem {0} portas", carro.NumeroPortas);

            Carro carro2 = new Carro("Astra");
            Console.WriteLine("Este outro carro se chama {0}", carro2.Nome);

            Carro carro3 = new Carro("Ford", 2);
            Console.WriteLine("Este outro carro é da marca {0} e tem {1} portas", carro3.Marca, carro3.NumeroPortas);

            Carro carro4 = new Carro(2);
            Console.WriteLine("Este outro carro tem {0} portas", carro4.NumeroPortas);

            Carro carro5 = new Carro(nome: "Ka", marca: "Ford");
            Console.WriteLine("Este outro carro é um {0} {1} e tem {2} portas", carro5.Marca, carro5.Nome, carro5.NumeroPortas);

            Carro carro6 = new Carro
            {
                Nome = "Astra",
                Marca = "GM",
                NumeroPortas = 4,
                Potencia = 1.4
            };
            Console.WriteLine("Este outro carro é um {0} {1} possui {2} portas e tem potência de {3}", carro6.Marca, carro6.Nome, carro6.NumeroPortas, carro6.Potencia);

            Moto moto1 = new Moto();

            Console.ReadKey();
        }
    }
}
