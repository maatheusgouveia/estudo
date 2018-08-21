print('{:=^150}'.format('Comentários sem alterações'))

comentario = input('Faça seu comentário: ')

print(comentario)


print('{:=^150}'.format('Comentários após alterações automáticas'))

# palavra1 = comentario.find('viado')
# print(palavra1)

if comentario.find('viado') == -1 and comentario.find('bicha') == -1 and comentario.find('comunista') == -1 :
    print(comentario)
else:
    print("""\nComentário ocultado pela moderação, seja educado
e evite o uso de palavras que possam ser ofensivas \n""")

    # comentario 1
