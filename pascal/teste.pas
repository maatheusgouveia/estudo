program name;
 uses
   crt; { biblioteca do Pascal }
 var
   n1,n2,q1,q2:string; { vari�veis criadas pelo usu�rio do tipo string }
 begin
   { Limpa a tela }
   clrscr;
   writeln('Digite o primeiro nome:');
   readln(n1);
   writeln('Digite o segundo nome:');
   readln(n2);
   writeln('Digite uma qualidade para o primeiro nome:');
   readln(q1);
   writeln('Digite uma qualidade para o segundo nome:');
   readln(q2);
   writeln('O 1� nome e a 1� qualidade s�o: ',n1,' ',q1);
   writeln('O 2� nome e a 2� qualidade s�o: ',n2,' ',q2);
   { Aguarda at� uma tecla ser pressionada }
   readkey;
 end.