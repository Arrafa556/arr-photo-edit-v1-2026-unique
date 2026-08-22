import pygame 


pygame.init()
print("pygame initialized successfully version:", pygame.version.ver) 

print("pygame initialized successfully version:", pygame.version.ver) 


import pygame
import sys

pygame.init()

# Ukuran layar
lebar, tinggi = 500, 600
layar = pygame.display.set_mode((lebar, tinggi))
pygame.display.set_caption("Animasi Sederhana")

# Posisi awal kotak
x, y = 50, 50
kecepatan_x, kecepatan_y = 3, 3
ukuran_kotak = 50

clock = pygame.time.Clock()

while True:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()

    # Update posisi
    x += kecepatan_x
    y += kecepatan_y

    # Pantul di dinding
    if x <= 0 or x + ukuran_kotak >= lebar:
        kecepatan_x *= -1
    if y <= 0 or y + ukuran_kotak >= tinggi:
        kecepatan_y *= -1

    # Gambar ulang layar
    layar.fill((30, 30, 30))
    pygame.draw.rect(layar, (0, 200, 255), (x, y, ukuran_kotak, ukuran_kotak))
    pygame.display.flip()

    clock.tick(60)  # 60 FPS