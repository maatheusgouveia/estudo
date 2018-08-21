nome = input('Qual é o seu nome?')

idade = input('Quantos anos você tem?')

peso = input('Quanto você pesa?')

print(nome, idade, peso)

if int(peso) >= 85:
    x = 1
    while x<10:
        print ("Hello, Gordo!")
        x = x+1

else:
    x = 1
    while x<10:
        print ("Hello, Frango!")
        x = x+1
