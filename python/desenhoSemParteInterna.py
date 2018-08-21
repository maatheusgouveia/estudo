largura = int(input("Digite a largura do retângulo: "))
altura = int(input("Digite a altura do retângulo: "))
c = 0
r = 0
while c < altura:
    if r == largura:
        print()
    r = 0
    while r < largura:
        if r == 0 or r == largura-1 or c == 0 or c == altura-1:
            print(end="#")
        else:
            print(end=" ")
        r += 1
    c += 1
