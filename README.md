# Wordpress_Temautveckling
Inlämningsuppgift 1 - Temautveckling

## Instruktioner
Ni har fått en zip-fil med statiska HTML-filer för olika sidmallar.
* Alla mallar ska implementeras i temat
* Lämna php-kommentar med snabb  beskrivning vid varje WordPress-funktion ni använder.  
* HTML-strukturen i er färdiga WordPress installation skall vara närapå identisk den i HTML-filerna.  
* Det är fritt fram att bygga egna funktioner i functions.php.
* All css och js som ni behöver finns med i zip-filen, ni behöver alltså inte lägga till egen.  
* Den överliggande menyn ska gå att styra genom Utseende > Menyer i adminpanelen  
    - Kontrollera även att menyn fungerar på mindre skärmar.  
* Sidomenyn på undersidorna ska lista syskonsidor.

### För VG  
• Innehållet i sidfoten samt bloggens sidokolumn kunna redigeras ifrån admin-panelen.





## Kommentarer till uppgiften:

* Ändrade inlägg per sida till 2 för att paginationen skulle synas. I original är det 3st per sida. 
* För att endast kategori 1, kategori 2 och kategori 3 skulle synas under bilderna, så gjorde jag dessa till tags istället för kategorier. Endast för att det skulle bli så nära mockup som möjligt. Detta också för att dessa kategorier inte skulle dyka upp i sidebaren tillsammans med "Natur" och "Okategoriserade". Så om det inte vore för mockupen hade kategori 1. kategori 2 och kategori 3 blivit kategorier istället. 

* Det finns två alternativ gällande "Sidor" i sidebaren. 
    - Det som visas i resultatet är en widget tillhörande rubrik och alla sidor på hemsidan. Dvs ej enligt mockup då undersidor bl.a inte är med där. 
    - En alternativ kod finns längre ner dold där jag gjorde en mix av en widget och meny. Denna mix gjorde det möjligt att få exakt som mockup då det var                     specifikt utvalda sidor där. (Se sidebar.php) 
