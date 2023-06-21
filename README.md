Ter info: een Laravel app die je van Github haalt werkt niet gelijk. Je moet eerst een aantal dingen doen:

1. Clone de app vanaf Github (_Open with Github Desktop_)

2. Open de app in je IDE

3. Open een Terminal

4. Run het commando: **composer install**

5. Maak een copy van **.env.example** en verander de naam in **.env**

6. Run het commando: **php artisan key:generate**
   Hiermee krijgt de sleutel in je .env een correcte waarde.

7. Open het .env bestand
   Check of de database gegevens kloppen, en pas aan indien nodig.

8. Run het commando: **php artisan migrate**

9. Run het commando: **npm install**

10. Run het commando: **npm run dev**

11. Run het commando: **npm run build**

12. Run het commando: **php artisan migrate**

13. Run het commando: **php artisan serve**


# Opdracht
Je gaat aantonen dat je Laravel eigen hebt gemaakt hebt door het realiseren van een Review-app voor boeken. De app bevat reviews en users. Inclusief een inlogsysteem. Hieronder staan de eisen:

Eisen:

- Clone de app van github: [https://classroom.github.com/a/52DFPvwd](https://classroom.github.com/a/52DFPvwd)
- Maak een inlogsysteem
- Maak gebruik van CRUD, voor Review
- Het formulier, voor een review, bevat een: title, text, rating
- De rating is een getal tussen 1 en 10
- Maak gebruik van Controller(s), Model(s), View(s), Migration(s)
- Maak gebruik van Tailwind, met een eigen opmaak (kijk naar voorbeelden op internet)
- Maak gebruik Github en maak meerdere commits
