import random
angka_rahasia = random.randint(1, 100)
print("=== GAME TEBAK ANGKA (1 - 100)===")

nama = input("Masukkan nama Anda: ")
print(f"Selamat datang, {nama}! silahkan tebak angka anatara 1-100.\n")


while True:
    tebakan = int(input("Tebak angkanya:"))

    if tebakan < angka_rahasia:
        print("ANGKA TERLALU KECIL! COBA LAGI.\n")
    elif tebakan > angka_rahasia:
        print("ANGKA TERLALU BESAR! COBA LAGI.\n")
    else: 
        print("SELAMAT! TEBAKAN ANDA BENAR! ANGKA RAHASIA ADALAH", angka_rahasia)
        break