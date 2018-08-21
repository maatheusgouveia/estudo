# n1 = int(input('Digite um valor: '))
# n2 = int(input('Digite outro: '))
# resultado = n1 + n2
# print ('a soma de {0} e {1} é {2} '.format(n1, n2, resultado))

#tipo de entrada

print('Identificando tipo da entrada:')

x = input('Digite algo: ')

# if x.isalpha():
#     print('x é alfanumérico!')

if x.isnumeric():
    print('A entrada é um número!')

if x.isupper():
    print('A entrada é maiúscula!')

if x.islower():
    print('A entrada é minúscula!')

if x.isspace():
    print('A entrada é um espaço!')

if x.isalnum():
    print('A entrada é alfanumérica!')
