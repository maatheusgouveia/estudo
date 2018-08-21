using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula14_TerceiroExercicio
{
    class Program
    {
        static void Main(string[] args)
        {
            //vetor
            int[] vetor;
            int n;

            try
            {
                //informando o usuário o valor que será obtido
                Console.WriteLine("Informe a quantidade de elementos que serão informados:");
                //obtendo o número de elementos
                n = ObterValor();

                //informando o tamanho do vetor de acordo com a quantidade de elementos que o usuário informou
                vetor = new int[n];

                //laço para iterar o vetor
                for (int i = 0; i < n; i++)
                {
                    //informando o usuário o valor que será obtido
                    Console.WriteLine("Informe o elemento {0} do vetor:", i+1);
                    //obtendo o valor
                    var valor = ObterValor();

                    //atribuindo o valor obtido ao elemento do vetor
                    vetor[i] = valor;
                }
                    
                //ordenando o vetor
                Ordenar(vetor);


                //Exibindo o vetor ordenado
                Console.WriteLine("Vetor ordenado:");
                for (int i = 0; i < n; i++)
                {
                    //Exibindo o valor do elemento
                    Console.WriteLine(vetor[i]);
                }
            }
            catch (Exception ex)
            {
                //Se ocorrer um erro, o usuário é informado.
                Console.WriteLine("\nOcorreu o erro: {0}", ex.Message);
            }

            Console.WriteLine("\nPressione qualquer tecla para finalizar a aplicação...");
            Console.ReadKey();
        }

        static int ObterValor()
        {
            try
            {
                //um valor é obtido no console
                var valor = Console.ReadLine();

                //o valor obtido é convertido para double antes de retorná-lo
                return Convert.ToInt32(valor);
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

        static void Ordenar(int[] vetor)
        {
            //variável auxiliar para ajudar na ordenação
            int aux;

            //iterando todo o vetor
            for (int i = 0; i < vetor.Length; i++)
            {
                //para cada elemento é iterado os elementos subsequentes para verificar se existe um menor que ele
                for (int j = i + 1; j < vetor.Length; j++)
                {
                    //se o elemento da iteração atual (o elemento i) for maior que um subsequente (o elemento j)
                    if (vetor[i] > vetor[j])
                    {
                        //o elemento de menor valor é obtido
                        aux = vetor[j];

                        //o elemento de maior valor é atribuido na posição no de menor valor
                        vetor[j] = vetor[i];

                        //e o menor valor é atribuido na posição de maior valor
                        vetor[i] = aux;
                    }
                }
            }
        }
    }
}
