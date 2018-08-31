import os
def renomearArquivos():
    listaArquivos = os.listdir(r"/home/matheusgouveia/estudo/python/prank")
    #print(listaArquivos)
    nomePasta = os.getcwd()
    print("A pasta atual é "+nomePasta)
    os.chdir(r"/home/matheusgouveia/estudo/python/prank")

    for file_name in listaArquivos:
        substituir = str.maketrans(dict.fromkeys('0123456789'))
#        print("Nome antigo - "+file_name)
        print("Renomeado - "+file_name, file_name.translate(substituir))
        os.rename(file_name, file_name.translate(substituir))
    os.chdir(nomePasta)

renomearArquivos()
