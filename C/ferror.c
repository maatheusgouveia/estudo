//#include <stdio.h>
//int main()
//{
//    FILE *pf;
//    char string[50];
//    pf = fopen("Arquivo.txt","w");
//
//    do
//    {
//        printf("\nDigite uma mensagem.");
//        gets(string);
//        fputs(string, pf);
//        putc('\n', pf);
//
//
//        if(ferror(pf))
//        {
//            perror("Erro ao gravar o arquivo");
//            fclose(pf);
//                    }
//    } while (strlen(string) > 1);
//
//    fclose(pf);
//}
