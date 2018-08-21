def maior_elemento(lista):
    maior = 0
    for item in lista:
        if item > maior:
            maior = item
    print(maior)
    return maior

lista = [1, 11, 2, 4, 2, 0, 3, 5, 8, 10, 7, 6, 2]
maior_elemento(lista)
