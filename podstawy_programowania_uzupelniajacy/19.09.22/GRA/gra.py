wyborPostaci=int(input("Witaj, wybierz postać: Pies Puszek (wybierz 1) lub Lis Kajetan (wybierz 2) : "))
if (wyborPostaci== 1):
    sciezka = "miasto"
    wyborPostaci="Pies Puszek"
elif(wyborPostaci == 2):
    sciezka = "las"
    wyborPostaci="Lis Kajetan"
else:
    print("Wybierz jeszcze raz, nie ma takiej postaci, zrestartuj gre")
print("Wybrana przez ciebie postać to:",wyborPostaci,"będzie on musiał przejść przez",sciezka,"aby dotrzeć do wioski, jeżeli chce wejść do środka musi posiadać 100 punktów")

worek = []

if (wyborPostaci == "Lis Kajetan"):
    print("Idąc przez las napotkałeś rozwidlenie dróg, możesz skręcić w prawo lub lewo")
    skret = int(input("Wybierz 1 dla skrętu w lewo lub 2 dla skrętu w prawo: "))
    if(skret == 1):
        worek.append(20)
        print("Skręciłeś w lewo i znalazłeś krzak z jagodami zyskujesz 20 punktów")
        print("Twoja obecna ilość punktów: ",worek)
    elif(skret == 2):
        print("Skręciłeś w prawo, nic tu nie ma, idziesz dalej")
    else:
        print("Podałeś złą liczbę, nie ma takiej ścieżki")
    rzeka = int(input("Idąc dalej natrafiłeś na rzekę, możesz przez nią przepłynąć (wybierz 1) lub poszukać mostu (wybierz 2): "))
    if (rzeka==1):
        worek.append(-10)
        print("O nie! pare rzeczy wyleciało z twojego worka podczas próby przepłunięcia rzeki => tracisz 10 punktów")
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif(rzeka==2):
        worek.append(30)
        print("Przeszedłeś bezpiecznie przez most, za rozsądny wybór dostajesz 30 punktów :D")
        print("Twoja obecna ilość punktów: ",sum(worek))
    else:
        print("Podałeś złą liczbę, nie ma takiej ścieżki")
    pomoc = int(input("Po drodze spotykasz Wiewórkę Jamalke, potrzebuje ona twojej pomocy :( , wybierz 1 aby jej pomóc, lub wybierz 2 i pójdź dalej "))
    if (pomoc == 1):
        worek.append(50)
        print("Za twoją wielkoduszność dostajesz od Wiewiórki Jamalki aż 50 punktów!")
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif (pomoc == 2):
        worek.append(-25)
        print("No wiesz co, lepiej zacznij pomagać potrzebującym, bo za swój wyczyn tracisz 25 punktów >:| ")
        print("Twoja obecna ilość punktów: ",sum(worek))
    plot = int(input("To już ostatnia prosta, został ci do pokonania tylko płot, pytanie czy pójdziesz na skróty (wybierz 1), czy obejdziesz płot na około (wybierz 2)?: "))
    if (plot==1):
        worek.append(-10)
        print("Gdzie pędzisz towarzysz? Spójrz! Rozdarłeś worek, tracisz 10 punktów xD")
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif (plot==2):
        worek.append(20)
        flet = int(input("Obchodząc płot do okoła, natrafiłeś na magiczny flet, możesz na nim zagrać i zoabczyć co się stanie (wybierz 1) lub zostawić i pójść bezpośrednio do bramy (wybierz 2)"))
        if (flet == 1):
            worek.clear
            print("O niee! To był przeklęty flet, zabrał ci wszytkie punkty :O :(")
        elif (flet == 2):
            print("Idziesz dalej zostawiając flet. Kto wie co on skrywał...")
        else:
            print("Nie możesz tak zrobić")
    print("Dotarłeś do bram wioski! Gratulacje, sprawdźmy ile punktów jest w twoim worku i zobaczmy czy mozesz wejść do środka wioski :D")
    if (sum(worek)>=100):
        print("Twoja ilość punktów: ",sum(worek),", zapraszamy do środka <3")
    elif(sum(worek)<100):
        print("Ajajajaj, no niestety, nie masz wystarczającej ilości puktów aby wejść :(, zawsze możesz spróbować jeszcze raz, lub wybrać inną postać")







if (wyborPostaci == "Pies Puszek"):
    print("Idąc przez miasto napotkałeś na skrzyżowanie, możesz skręcić w prawo lub lewo")
    skret = int(input("Wybierz 1 dla skrętu w lewo lub 2 dla skrętu w prawo: "))
    if(skret == 1):
        worek.append(-10)
        print("Skręciłeś w lewo i spotykasz bezdomnego który zabiera ci 10 punktów")
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif(skret == 2):
        worek.append(15)
        print("Skręciłeś w prawo i znalazłeś na drodze 15 punktów")
        print("Twoja obecna ilość punktów: ",sum(worek))
    else:
        print("Podałeś złą liczbę, nie ma takiej ścieżki")
    bus = int(input("Trafiasz na przystanek autobusowy, wybierz 1 aby pojechać autobusem lub wybierz 2 aby iśc pieszo: "))
    if (bus==1):
        worek.append(-5)
        print("Bilety autobusowe nie są darmowe ;), tracisz 5 punktów")
        print("Twoja obecna ilość punktów: ",sum(worek))
        print("A kto to jedzie z tobą w busiku? To twój przyjaciel Kot Ignacy, słyszy on o twojej podróży do wioski i postatawia dać ci 30 punktów")
        worek.append(30)
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif(bus==2):
        worek.append(25)
        print("Idąc pieszo natraiłeś na piekarnie, zyskujesz 25 punktów na dobrą drogę :)")
        print("Twoja obecna ilość punktów: ",sum(worek))
    else:
        print("Podałeś złą liczbę, nie ma takiej ścieżki")
    tunel = int(input("Doszedłeś do ruchliwej ulicy, możesz poczekać na mniejszy ruch i szybk przebiec (wybierz 1) lub poszukać tunelu do zwierząt (wybierz 2): "))
    if (tunel == 1):
        worek.append(-50)
        print("No wiesz co? Jak możesz postępować tak nierozsądnie!!! Prawie cie coś potrąciło, na szczęscie kierowca się zatrzymał, ale zajscie widział policjant. Musisz zapłacić mandat w wysokości 50 punktów... Za głupotę się płaci :|")
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif (tunel == 2):
        worek.append(50)
        print("Bezpieczeństwo przede wszystkim! Za ostrożność zyskujesz aż 50 punktów, pamiętaj aby nigdy nie przechodzić przez ruchliwą ulicę bez specjalnego przejścia")
        print("Twoja obecna ilość punktów: ",sum(worek))
    uczciwosc = int(input("Widzisz jak osobie idącej przed tobą wypadły kluczyki, możesz je zwrócić (wybierz 1) lub zatrzymać (wybierz 2): "))
    if (uczciwosc==1):
        worek.append(30)
        print("Bardzo uczciwie z twojej strony, takie zachowanie nie może obyć się bez nagrody, otrzymujesz 35 punktów")
        print("Twoja obecna ilość punktów: ",sum(worek))
    elif (uczciwosc==2):
        worek.append(-30)
        print("Nieładnie, rzeczy powinno się oddawać >:|, tracisz 30 punktów")
        skarb = int(input("Hmm... a co to? przechodząc obok parku zauważyłeś skrytkę w drzewie, chwila? Czy nie paduje do niej przypadkiem zabrany przez ciebie wcześniej kluczyk? Sprawdź czy pasuje (wybierz 1), nawróć się i oddaj kluczyk (wybierz 2)"))
        if (skarb == 1):
            worek.append(10)
            print("Skrytka otworzyła się! Ajj, za dużo w niej nie ma :/, ale zawsze to 10 punktów do przodu XD, ale czy  było warto?...")
        elif (skarb == 2):
            worek.append(50)
            print("Nie da się skusić, oddałeś kluczyk właścicielowi, a ten a podziencę daje ci 50 punktów. Widzisz? Uczciwość popłaca <3")
        else:
            print("Nie możesz tak zrobić")
    print("Dotarłeś do bram wioski! Gratulacje, sprawdźmy ile punktów jest w twoim worku i zobaczmy czy mozesz wejść do środka wioski :D")
    if (sum(worek)>=100):
        print("Twoja ilość punktów: ",sum(worek),", zapraszamy do środka <3")
    elif(sum(worek)<100):
        print("Ajajajaj, no niestety, nie masz wystarczającej ilości puktów aby wejść :(, zawsze możesz spróbować jeszcze raz, lub wybrać inną postać")
