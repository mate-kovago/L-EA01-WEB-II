# L-EA01-WEB-II
WEB-PROGRAMOZÁS II – Előadás Beadandó feladat - Laravel

A feladathoz segítséget a feladat végénél talál!

Alakítsanak ki két-fős csoportokat és a feladatot közösen, projektmunkában oldják meg. A dokumentációban majd írják le, hogy a két főből ki melyik feladatrészt csinálta meg. 
Kötelező csoportban dolgozni! (A Teams csoportban is írhatnak üzenetet egymásnak, hogy társat keresnek a feladathoz) Ha valaki nem talál társat így sem, akkor írjon a tanárnak üzenetet.
Ha a csoportban páratlan számú hallgató készít beadandót, akkor a tanár egy főnek engedélyezi, hogy egyedül csinálja a feladatot. Ebben az esetben, ha meg akarja kapni a GitHub-os projektmunka feladatra is a pontot, akkor hozzon létre két GitHub fiókot és azokon valósítsa meg megoldást.
A csoportmunka célja: a cégeknél is csoportban dolgoznak egy nagyobb feladaton, ezt gyakorolják itt is.

A https://drive.google.com/drive/folders/12lDIxariOadDkGPaEssksPnL63lzYCbg?usp=sharing
mappában találnak adatbázis forrásokat, amik közül kell egyet a csoportnak választani és felhasználni a feladatában. 

A feladatban egy szerver oldali web-alkalmazást kell készíteni Laravel keretrendszerrel.

Az elkészítendő weboldalának témáját a választott adatbázishoz igazítsa. Forrásokat (képek, szövegek, …) gyűjtsön az Internetről.

Ha valamelyik Kötelező feladatot nem készíti el, akkor a megoldás 0 pontot ér.

Összesen 25 pont 

1.	Munkájához a következő feladat megoldását használja fel és azt fejlessze tovább (Kötelező!): 
a Web-programozas-2-Előadás.pdf fájlból: AUTENTIKÁCIÓ fejezet megoldása
(A megoldás-fájlokat megtalálja a Megoldasok.zip fájlban.)	
2.	Keressen és alkalmazzon egy ingyenes reszponzív témát az oldalaihoz. 			(2 p)
A dokumentációban írja le, hogy melyik témát választotta. 
Ötleteket a dokumentum végén talál. 
Használja a Dynamic layout design elveit az oldalaihoz
Minden oldal aljára írja be a készítők nevét és Neptun kódját.
3.	Autentikáció (Kötelező elem!)								(2 p)
Regisztráció, Bejelentkezés, Kijelentkezés: 
legalább „látogató”, „regisztrált látogató” és „admin” szerepkör el van különítve.
Regisztrált látogató: az Üzenetek menünél van szerepe
Admin: a CRUD menünél van szerepe

A nem-bejelentkezett felhasználó a következő menüpontokat látja: 
Főoldal, Adatbázis, Kapcsolat, Diagram, Bejelentkezés, Regisztráció

4.	Főoldal menü: Az első oldalon mutassa be az alkalmazást egy látványos weboldalon	(1 p)	
5.	Adatbázis menü: a választott adatbázisból jelenít meg adatokat				(3 p)
Ehhez 3 tábla adatait használja fel az adatbázisból.
Használjon ORM-et (Object-Relational Mapping) az adatbázis műveletekhez
Használjon Migrációt és Seeding-et az adatbázishoz.
6.	Kapcsolat menü: legyen egy kapcsolat űrlap, amelynek segítségével üzenetet 		(2 p)
lehet küldeni az oldal tulajdonosa számára. 
Használjon szerver oldali validációt az űrlaphoz.
Az elküldött Űrlap adatokat mentse le az adatbázisba is. 
7.	Üzenetek menü: Tegye lehetővé megtekinteni táblázatban az előző pontban		(2 p)
elküldött üzeneteket az adatbázisból fordított időrend szerint (a legfrissebb 
legyen elől). Írja minden üzenethez a küldés idejét.
Ezt a menüt csak bejelentkezett felhasználó láthatja.
8.	Diagram menu										(3 p)
Készítsen egy oldalt diagrammal az adatbázis adatai alapján
Használja a https://www.chartjs.org/ alkalmazást a diagramhoz.    
9.	CRUD menü: Az oldalon valósítson meg egy CRUD (Create, Read, Update, Delete) 	(3 p)
alkalmazást a választott adatbázis egyik táblájához. Ezt a menüt csak Admin láthatja.
Mintát a dokumentum végén talál.
10.	Alkalmazását töltse fel és valósítsa meg Internetes tárhelyen.				(2 p)
(Kötelező elem! A működés ez alapján lesz javítva)	
Bármelyik tárhelyszolgáltatót használhatja.
11.	Használják a GitHub (github.com) verziókövető rendszert. 				(2 p)
(Kötelező elem! A forrás ez alapján lesz javítva) 
Ne csak a kész alkalmazást töltsék fel egy lépésben, hanem a részállapotokat is még 
legalább 5 lépésben személyenként.
Tegye nyilvánossá a GitHub fiókot, különben nem lehet értékelni a kódot.
A GIT-en saját nevet válasszanak, ami alapján be lehet azonosítani, hogy ki mit töltött fel.
12.	A GitHub-on a projektmunka módszert alkalmazzák: látszódjék, 			(3 p)
hogy a csoport tagjai melyik részt készítették el.
13.	Készítsen egy legalább 10 oldalas dokumentációt képernyőképekkel (Kötelező elem!), 	
amiben bemutatja alkalmazását és leírja, hogy az előző pontok feladatait hogyan valósította meg. Fontos, hogy ez utóbbit leírja a dokumentációban, mert a feladat ez alapján lesz javítva. A dokumentációban adja meg a weboldal és a GitHub URL címét is és a belépési adatokat az FTP-hez és az adatbázishoz és az admin felhasználó belépési adatait.	
Fájlnév formátum: Név-NeptunKód.pdf	pl. KovacsFerenc-ABC123.pdf	

Be kell adni a Teams-en keresztül a dokumentációt. Csak a dokumentációt kell beadni, egyéb fájlokat nem! Akik közösen csinálják, mindenki adja be a dokumentációt.

Segítség az egyes részekhez

Feladatrész	Fejezet a gyakorlati PDF fájlban
ingyenes reszponzív téma	Keresőbe: 
free responsive HTML CSS themes 
free responsive HTML5 CSS3 templates

Néhány ilyen oldal:
https://html5up.net/
https://themewagon.com/theme-tag/html5-css3/
https://cssauthor.com/free-responsive-html5-css3-website-templates/
https://webwave.me/free-website-templates
https://themefisher.com/best-free-html5-templates 

Autentikáció	Autentikáció fejezetben ki van dolgozva
CRUD menü	CRUD alkalmazás fejezet 
Megvalósítás Internet-szolgáltatónál	Tarhely-hasznalat-Nethely-2025-03.docx
Laravel projekt megvalósítása Internet-szolgáltatónál fejezet
Github használat	GitHub-használat-grafikus módszerrel.docx
GitHub-használat-parancssoros módszerrel.docx

Minta a CRUD alkalmazáshoz:
 

Kiegészítő feladatok 

A következő feladatokkal plusz pontokat lehet szerezni a 25 pont felett.

Teszt menü 		+5 pont
Készítsen egy alkalmazást űrlappal, aminek nehézsége hasonló, mint a Program Tesztelés fejezetben bemutatott 4 műveletes kalkulátor alkalmazás. 
Készítsen az alkalmazáshoz Unit és Feature teszteket. A tesztek mennyisége legyen hasonló, mit a Program Tesztelés fejezetben bemutatott feladatnál.
A dokumentációba tegyen képernyőképeket a teszt futtatásáról.

React menü		+5 pont
Válasszon a következő oldalról egy adatbázist:
https://drive.google.com/drive/folders/12lDIxariOadDkGPaEssksPnL63lzYCbg?usp=sharing
A választott adatbázis egyik táblájához készítsen egy CRUD alkalmazást, aminél a kliens oldalon React-ot használ Axios-al. (React-ot a Web-1 tantárgy előadásán tanultak)
A React-nál a Build-eléses módszert használja, ne a Babel/standalone módszert.


 					





