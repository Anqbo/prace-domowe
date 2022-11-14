def ciagLiczb(iloscElementowCiagu, pierwszaLiczbaCiagu):
    liczba = pierwszaLiczbaCiagu
    for i in range(pierwszaLiczbaCiagu, iloscElementowCiagu+pierwszaLiczbaCiagu):
        print(liczba)
        liczba = liczba*liczba
a = int(input("Podaj ilość elementów w ciągu: "))
b = int(input("Podaj liczbę początkowa ciągu: "))     
ciagLiczb(a,b)