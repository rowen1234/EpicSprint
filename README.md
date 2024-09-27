# EpicSprint

**EpicSprint** is een Laravel-gebaseerde taakplanner die het Kanban-principe volgt. Deze tool stelt gebruikers in staat om taken te beheren, organiseren en visualiseren in verschillende projectfasen. Of het nu gaat om persoonlijke taken of samenwerking in een team, EpicSprint helpt je om overzicht te houden en efficiënt te werken.

## Functionaliteiten

- **Takenbeheer**: Voeg, bewerk en verwijder taken op een gebruiksvriendelijke manier.
- **Kanban-bord**: Visualiseer taken in verschillende fasen zoals 'Te doen', 'In uitvoering', en 'Voltooid'.
- **Prioritering**: Wijs prioriteiten toe aan taken om de belangrijkste taken eerst af te handelen.
- **Notificaties**: Stel notificaties in voor belangrijke deadlines of updates.
- **Aanpasbaar**: Pas de kolommen en workflow van het Kanban-bord aan naar de behoeften van je project.

## Installatie

Volg de onderstaande stappen om EpicSprint lokaal op te zetten:

1. **Repository klonen**:
    ```bash
    git clone https://github.com/rowen1234/EpicSprint.git
    ```

2. **Navigeer naar de projectmap**:
    ```bash
    cd EpicSprint
    ```

3. **Installeer afhankelijkheden**:
    Zorg ervoor dat je Composer en NPM hebt geïnstalleerd.
    ```bash
    composer install
    npm install
    ```

4. **Omgevingsvariabelen instellen**:
    Maak een `.env` bestand en configureer de databaseverbinding en andere instellingen:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Database migreren**:
    Zet de database op met de volgende commando's:
    ```bash
    php artisan migrate
    ```

6. **Applicatie starten**:
    Start de ontwikkelserver:
    ```bash
    php artisan serve
    ```

7. **Toegang krijgen**:
    Bezoek `http://localhost:8000` in je browser om de applicatie te bekijken.

## Gebruik

- **Taken toevoegen**: Gebruik het formulier om nieuwe taken toe te voegen.
- **Drag-and-drop functionaliteit**: Versleep taken tussen kolommen om de status te veranderen.
- **Taakdetails**: Klik op een taak om gedetailleerde informatie te bekijken en aan te passen.

## Bijdragen

Wil je bijdragen aan EpicSprint? Volg deze stappen:

1. Fork de repository op GitHub.
2. Maak een nieuwe branch:
    ```bash
    git checkout -b feature-naam
    ```
3. Maak je wijzigingen en commit ze:
    ```bash
    git commit -m "Beschrijving van de wijziging"
    ```
4. Push naar je eigen repository:
    ```bash
    git push origin feature-naam
    ```
5. Open een pull request op de hoofdrepository.

## Ondersteuning

Voor vragen, problemen of feedback, kun je een issue aanmaken op de [GitHub-repository](https://github.com/rowen1234/EpicSprint).

---

Bedankt voor het gebruik van **EpicSprint** en veel succes met het beheren van je taken!
