n = int(input("Digite um número da lista: "))
lista = []
while n != 0:
    lista.append(n)
    n = int(input("Digite um número da lista: "))

lista.reverse()    
for item in lista:
    print(item)


