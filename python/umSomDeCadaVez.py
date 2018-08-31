import pygame.mixer
sounds = pygame.mixer
sounds.init()


def espera_tocar(canal):
    
    while canal.get_busy:
        pass


s = sounds.Sound("sons/daQueEuTeDouOutra.mp3")
espera_tocar(s.play())
s2 = sounds.Sound("sons/masOQueEIsso.mp3")
espera_tocar(s2.play())
