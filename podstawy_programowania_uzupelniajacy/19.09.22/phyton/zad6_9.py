def sumaDoZera(pierwszaLiczba, drugaLiczba):
    suma = pierwszaLiczba+drugaLiczba
    while(suma!=0):
        kolejneLiczby = int(input("Podaj następne liczby: "))
        suma = suma+kolejneLiczby
    print(suma)

a=int(input("Podaj pierwszą liczbę: "))
b=int(input("Podaj drugą liczbę: "))
sumaDoZera(a,b)