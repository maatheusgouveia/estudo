def maior_primo(n):

    primos = []
    for i in range(n+1):
        c = 0
        for j in range(n+1):
            if i%(j+1) == 0: 
                c += 1
        if c == 2:
            primos.append(i)

    return(max(primos))
print(maior_primo(7))
