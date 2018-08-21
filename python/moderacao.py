print('{:=^150}'.format('Comentários sem alterações'))

comentario = """Teste de moderação de comentários em python
vou inserir palavras inadequadas para fins de testes
viado, bicha, comunista \n """

comentario2 = """Teste de moderação comunista de comentários em python
vou inserir palavras inadequadas para fins de testes\n"""


comentario3 = """Teste viado de moderação de comentários em python
vou inserir palavras inadequadas para fins de testes\n"""

comentario4 = """Um comentário sem nenhuma palavra ofensiva apenas para
testes do programa de moderação"""

print(comentario)

print(comentario2)

print(comentario3)

print(comentario4)

print('{:=^150}'.format('Comentários pós alterações automáticas'))

# palavra1 = comentario.find('viado')
# print(palavra1)

if comentario.find('viado') == '-1' and comentario.find('bicha') == '-1' and comentario.find('comunista') == '-1' :
    print(comentario)
else:
    print("""\nComentário ocultado pela moderação, seja educado
e evite o uso de palavras que possam ser ofensivas \n""")

    # comentario 1

if comentario2.find('viado') == '-1' and comentario2.find('bicha') == '-1' and comentario2.find('comunista') == '-1' :
    print(comentario2)
else:
    print("""Comentário ocultado pela moderação, seja educado
e evite o uso de palavras que possam ser ofensivas \n""")

    # comentario 2

if comentario3.find('viado') == '-1' and comentario3.find('bicha') == '-1' and comentario3.find('comunista') == '-1' :
    print(comentario3)
else:
    print("""Comentário ocultado pela moderação, seja educado
e evite o uso de palavras que possam ser ofensivas \n""")

    # comentario 3

if comentario4.find('viado') == -1 and comentario4.find('bicha') == -1 and comentario4.find('comunista') == -1 :
    print(comentario4)
else:
    print("""Comentário ocultado pela moderação, seja educado
e evite o uso de palavras que possam ser ofensivas \n""")



    # comentario 4
