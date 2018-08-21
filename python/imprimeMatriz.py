def imprime_matriz(matriz):
    linhas = 0
    while linhas < len(matriz):
        colunas = 0
        while colunas < len(matriz[0]):
            print("{}".format(matriz[linhas][colunas]), end="")
            if colunas == len(matriz[0])-1:
                print()
            else:
                print(end=" ")
            colunas += 1
        linhas += 1

matriz = [[1,2,3],
          [4,5,6],
          [7,8,9]]

imprime_matriz(matriz)
