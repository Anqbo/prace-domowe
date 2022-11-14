def silnia(liczba):
    for i in range(1,liczba):
        liczba = liczba*i
    print(liczba)

a = int(input("Podaj liczbę z której chcesz otrzymać silnie: "))
silnia(a)