from random import randint


def sumaLosowychLiczb():
    suma=0
    for i in range(1,11):
        liczba = randint(50,100)
        print(liczba)
        suma = suma+liczba
    srednia = suma/10
    print("Suma to: ",suma)
    print("Średnia to: ",srednia)

sumaLosowychLiczb()
