import math

def delta(a, b, c):
        return b**2 - 4 * a * c

def main():
        a = float(input("Digite o valor de a: "))
        b = float(input("Digite o valor de b: "))
        c = float(input("Digite o valor de c: "))
        imprimeRaizes(a, b, c)

def imprimeRaizes(a, b, c):
        d = delta(a, b, c)
        if d == 0:
                x1 = (-b + math.sqrt(d)) /(2 * a)
                print("A raiz única de Delta é: ", x1)
        else:
                if delta < 0:
                            print("Esta equação não possui raízes reais")
                else:
                            x1 = (-b + math.sqrt(d)) /(2 * a)
                            x2 = (-b - math.sqrt(d)) /(2 * a)
                            print("x1 = ", x1)
                            print("x2 = ", x2)

main()
                    
    
