def soma_elementos(lista):
    soma = 0
    for item in lista:
        soma += item
    #print(soma)
    return soma

lista = [123, 223, 4, 3, 1, 0, 666, 2]
soma_elementos(lista)
