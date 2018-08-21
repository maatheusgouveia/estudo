program triangulos;
uses crt;
var
	x,y,z:integer;
begin
	clrscr;
	writeln('Verificar triângulos');
	writeln('digite os três lados do triângulo');
	readln(x,y,z);
	if(x > 0) and (y > 0) and (z > 0)
		then begin 
		if(x > y+z) or (y > z+x) or (z > x+y)
			then begin
			writeln('não é um triângulo');
		end
		else begin 
				if(x = y) and (x <> z) or (x = z) and (x <> y) or (x = y) and (x <> z)
					then begin
					writeln('Isosceles');
				end
				else if(x = y) and (x = z)
					then begin
					writeln('Equilatero');
				end
				else begin
					writeln('Escaleno');
				end;
		end;
	end
	else begin
		writeln('Não é um triângulo, nenhum dos lados pode ser 0');
	end;
	repeat until keypressed;
end.
