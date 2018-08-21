import webbrowser
import time

print("O programa está ativo")
print("iniciado em "+time.ctime())
totalPausas = 2
contaPausas = 0

while(contaPausas < totalPausas):
    time.sleep(10) #2*60*60
    webbrowser.open("https://www.youtube.com/watch?v=AR3UxOdd2Us")
    contaPausas = contaPausas + 1
