def criaMatriz(numLinhas, numColunas, valor):
        matriz = []
        for i in range(numLinhas):
            linha = []
            for j in range(numColunas):
                linha.append(valor)
            matriz.append(linha)
        return matriz
    
def soma_matrizes(m1, m2):
        if len(m1) == len(m2) and len(m1[0]) == len(m2[0]):
            resultado = criaMatriz(len(m1), len(m1[0]), 0)
            for linhas in range(len(m1)):
                    for colunas in range(len(m1[0])):
                        resultado[linhas][colunas] = m1[linhas][colunas] + m2[linhas][colunas]
            return resultado
        else:
            #print("False")
            return False

m1 = [[1, 2, 3], [4, 5, 6]]
m2 = [[2, 3, 4], [5, 6, 7]]

print(soma_matrizes(m1, m2))
