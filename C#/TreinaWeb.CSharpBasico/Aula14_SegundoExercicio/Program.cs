using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula14_SegundoExercicio
{
    class Program
    {
        static void Main(string[] args)
        {
            //variáveis que irão armazenar o comprimento e a largura
            double comprimento, largura, area, perimetro;

            try
            {
                //informando o usuário o valor que será obtido
                Console.WriteLine("Informe o comprimento do retângulo:");
                //obtendo o comprimento
                comprimento = ObterValor();

                //informando o usuário o valor que será obtido
                Console.WriteLine("Informe a largura do retângulo:");
                //obtendo a largura
                largura = ObterValor();

                //calculando a área
                area = largura * comprimento;

                //calculando o perímetro
                perimetro = (2 * comprimento) + (2 * largura);

                //informando o usuário resultado
                Console.WriteLine("\nA área do retângulo é {0}", area);
                Console.WriteLine("O prerímetro do retângulo é {0}", perimetro);
            }
            catch (Exception ex)
            {
                //Se ocorrer um erro, o usuário é informado.
                Console.WriteLine("\nOcorreu o erro: {0}", ex.Message);
            }

            Console.WriteLine("\nPressione qualquer tecla para finalizar a aplicação...");
            Console.ReadKey();
        }

        static double ObterValor()
        {
            try
            {
                //um valor é obtido no console
                var valor = Console.ReadLine();

                //o valor obtido é convertido para double antes de retorná-lo
                return Convert.ToDouble(valor);
            }
            catch (FormatException)
            {
                //caso ocorra um erro durante a conversão
                Console.WriteLine("\nValor informado erroneamente, o informe novamente:");//o \n pula uma linha

                //O valor é obtido novamente
                return ObterValor();
            }
            catch (Exception ex)
            {
                //caso ocorre outro tipo de erro
                // ele é retornado para o método chamador
                throw ex;
            }
        }
    }
}
