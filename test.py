import pygame 
pygame.init()

screen = pygame.display.set_mode((500, 400))

potato_img = pygame.image.load("Potato.jpg.jpg").convert()
potato_img = pygame.transform.scale(potato_img, (50, 50)) #resize the image to 50x50 pixels
potato_img.set_colorkey((200, 100, 100))  # Assuming white is the transparent color


# Gambar Kedua
gambar2 = pygame.image.load("Burung.jpg").convert()
gambar2 = pygame.transform.scale(gambar2, (50, 50)) #resize the image to 50x50 pixels


# gambar Rumput
rumput_img = pygame.image.load("rumput.jpeg").convert()
rumput_img = pygame.transform.scale(rumput_img, (500, 150)) #resize the image to 500x150 pixels
rumput_img.set_colorkey((225, 255, 255)) # Assuming white is the transparent color


running =  True
x = 0  # Posisi Gambar 1 
x2 = 500  # Posisi Gambar 2 
clock = pygame.time.Clock()
delta_time = 0.1
timer = 0
dot_count = 0
font = pygame.font.Font(None, 36)  # Create a font object

jarak = 60 # atur jarak antar gambar 


while running:
    screen.fill((135, 206, 235)) # Latar Belakang Biru langit


    pygame.draw.circle(screen, (255, 223, 0), (430, 45), 40)  # Draw a yellow circle for the sun at position (430, 20) radius 40

    screen.blit(rumput_img, (0, 250)) # gambar Rumput di bawah))
    screen.blit(potato_img, (x, 30)) # gambar Pertama
    screen.blit(gambar2, (x2, 30 + jarak)) # gambar Kedua , nempel di sebelah kanan gambar 
    


    timer += clock.get_time()
    if timer > 400: # ganti Tiap 400ms 
        dot_count = (dot_count + 1) % 4 
        timer = 0


    teks = "loading" + "." * dot_count
    render = font.render(teks, True, (255, 255, 255)) #white color
    screen.blit(render, (10, 10))  # Draw the text at position (10, 10)

   
    x += 300  * delta_time  # Move the potato to the right
    x2 -= 300 * delta_time  # Move the second image to the left
    pygame.display.flip()
    delta_time = clock.tick(30) / 1000.0  # Get the time passed since the last frame
   



    if x > 500: 
        x = -150  # Ulangi gambar Dan Muncul Kembali di Layar awal screen 
       
    if x2 < -150:
        x2 = 500  # Ulangi gambar Dan Muncul Kembali di Layar awal screen


   
    clock.tick(30)  # limit the frame FPS


    for event in pygame.event.get():
        if event.type == pygame.QUIT:
          running = False
    
    


pygame.quit()

