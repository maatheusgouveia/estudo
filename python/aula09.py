frase = 'vai curintia!!'
print(frase)
print(frase[0::2])
print(frase[0:])
print(frase[:14:2])
print(frase[0:14:2])
print(len(frase))
print(frase.count('i'))
print(frase.count('i',0,6))
print(frase.find('curintia'))
print(frase.replace('vai','Go'))
print(frase.upper())
print(frase.capitalize())
print(frase.title())
frase = '     vai curintia!!    '
print(frase.strip())
print(frase.lstrip())
print(frase.rstrip())
frase = 'vai curintia!!'
print(frase.split())
dividido = frase.split()
print(dividido[1][3])
print('-'.join(frase))
print("""O que é Lorem Ipsum?
Lorem Ipsum é simplesmente uma simulação de texto da indústria
tipográfica e de impressos, e vem sendo utilizado desde o século XVI,
quando um impressor desconhecido pegou uma bandeja de tipos e os
embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum
sobreviveu não só a cinco séculos, como também ao salto para a editoração
eletrônica, permanecendo essencialmente inalterado. Se popularizou na
década de 60, quando a Letraset lançou decalques contendo passagens de
Lorem Ipsum, e mais recentemente quando passou a ser integrado a
softwares de editoração eletrônica como Aldus PageMaker.""")
