import pygame 
import math
pygame.init()

screen = pygame.display.set_mode((500, 400))
pygame.display.set_caption("Loading screen")

burung = pygame.image.load("Burung3nd.jpg").convert()
burung = pygame.transform.scale(burung, (50, 50))
burung.set_colorkey((200, 100, 100))

gambar2 = pygame.image.load("Manukbng.jpg").convert()
gambar2 = pygame.transform.scale(gambar2, (50, 50))

rumput_img = pygame.image.load("rumput 2nd.jpg").convert()
rumput_img = pygame.transform.scale(rumput_img, (500, 150))
rumput_img.set_colorkey((225, 255, 255))

running = True
x = 0
x2 = 500
clock = pygame.time.Clock()
delta_time = 0.1
timer = 0
dot_count = 0
font = pygame.font.Font(None, 22)
jarak = 60
waktu_berjalan = 0

while running:
    screen.fill((135, 206, 235))

    pusat_x, pusat_y = 430, 45
    jari_dalam = 42
    jari_luar = 60
    for sudut in range(0, 360, 30):
        rad = math.radians(sudut)
        x1 = pusat_x + jari_dalam * math.cos(rad)
        y1 = pusat_y + jari_dalam * math.sin(rad)
        x2_sinar = pusat_x + jari_luar * math.cos(rad)
        y2_sinar = pusat_y + jari_luar * math.sin(rad)
        pygame.draw.line(screen, (255, 223, 0), (x1, y1), (x2_sinar, y2_sinar), 3)

    pygame.draw.circle(screen, (255, 223, 0), (pusat_x, pusat_y), 40)

    screen.blit(rumput_img, (0, 250))
    screen.blit(burung, (x, 30))
    screen.blit(gambar2, (x2, 30 + jarak))

    timer += clock.get_time()
    if timer > 400:
        dot_count = (dot_count + 1) % 4
        timer = 0

    teks = "loading Screen" + "." * dot_count
    render = font.render(teks, True, (255, 255, 255))
    screen.blit(render, (10, 10))

    x += 300 * delta_time
    x2 -= 300 * delta_time

    if x > 500:
        x = -150
    if x2 < -150:
        x2 = 500

    pygame.display.flip()
    delta_time = clock.tick(30) / 1000.0

    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

pygame.quit()
