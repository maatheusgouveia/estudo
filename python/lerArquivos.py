#arquivo = open('numeros.txt' , 'r')
#for linha in arquivo.readlines():
    #print(linha) #print(linha.rstrip()) para não pular linhas
#arquivo.close()

with open('numeros.txt') as f:
    print(f.read())

#da segunda forma ele lê automaticamente e fecha o arquivo ao sair do with
