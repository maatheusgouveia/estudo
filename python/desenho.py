largura = int(input("Digite a largura do retângulo: "))
altura = int(input("Digite a altura do retângulo: "))
c = 0
r = 0
while c < altura:
    if r == largura:
        print()
    r = 0
    while r < largura:
        print("#", end="")
        r += 1
    c += 1
