# Reflektion – Moment 1: Webbserver och PHP

## 1. Varför är det viktigt att server-tiden stämmer?

Om servern har fel tid kan det bli problem med inloggning, cookies och sessions. Till exempel kan man loggas ut för tidigt eller för sent. Det blir också svårt att se vad som hänt i loggar eller om flera system ska samarbeta. Rätt tid gör att allt fungerar bättre och säkrare.

---

## 2. Vilken metod (GET eller POST) ska användas för att ändra data, och varför?

Man ska använda **POST** när man skickar data som ska ändra något, som att spara i en databas. Det är för att POST inte visar datan i adressfältet och är säkrare. GET används bara för att hämta information.

---

## 3. Varför används sessioner istället för cookies för att räkna besök?

Sessioner sparas på servern, så användaren kan inte ändra det själv. Det gör det säkrare. Cookies sparas i webbläsaren och kan ändras. Med sessioner vet servern exakt hur många gånger en användare har besökt sidan.

---

## 4. Vad är skillnaden mellan statisk och dynamisk webbplats?

En **statisk sida** visar alltid samma innehåll. Den är snabb och enkel, men man måste ändra filerna för hand. Exempel: en personlig portfolio.

En **dynamisk sida** skapar innehåll beroende på användaren. Man kan logga in, söka produkter, visa olika sidor automatiskt. Exempel: en webbshop.

En bra lösning kan vara att blanda båda: statiska sidor för t.ex. information, dynamiska sidor för användare och formulär.
