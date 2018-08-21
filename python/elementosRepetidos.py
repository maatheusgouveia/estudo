def remove_repetidos(lista):
    listaSemRepeticao = []
    lista.sort()
    for item in lista:
        if item not in listaSemRepeticao:
            listaSemRepeticao.append(item)
    #print(listaSemRepeticao)
    return listaSemRepeticao

lista = ['l', 'f', 'a', 'i', 'b', 'k', 'b', 'f', 'c', 'k', 'c', 'd', 'e', 'f']
remove_repetidos(lista)

#print(lista)
