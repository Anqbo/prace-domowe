def sciana(podstawaMuru,wysokoscMuru,ileKrutszy,wagaCegly):
    rzad = podstawaMuru
    ileCegiel=0;
    for i in range(1,wysokoscMuru):
        rzad = podstawaMuru;
        ileCegiel = ileCegiel+rzad;
        podstawaMuru=podstawaMuru-ileKrutszy
        print(rzad)
    calaSciana=ileCegiel+podstawaMuru
    print("Potrzebatyle cegieł: ",calaSciana)
    waga = calaSciana*wagaCegly
    print("Waga cegieł to: ",waga)
    

a = int(input("Podaj liczbę ile ma podstawa muru: "));
b = int(input("Podaj wysyoksc muru w cegłach: "));
c = int(input("Podaj o ile ma się zminuiejszać danyc rząd: "));
k = int(input("Podaj wagę cegły: "))
sciana(a,b,c,k)