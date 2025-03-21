<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane do wysyłki</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('olxtlo.png'); /* Ścieżka do pliku z obrazkiem tła */
            background-size: cover;          /* Dopasowanie tła do rozmiarów okna przeglądarki */
            background-position: center;    /* Wyśrodkowanie tła */
            background-repeat: no-repeat;   /* Zapobieganie powtarzaniu tła */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between; /* Rozkłada elementy na boki */
            align-items: center; /* Wyrównanie logo i linków w jednej linii */
            padding: 10px 20px; /* Większe odstępy od krawędzi */
            background-color: rgba(0, 47, 52, 0.8); /* Przezroczysty pasek nawigacyjny */
            width: 100%;
            box-sizing: border-box;
            position: relative; /* Umożliwia poprawne ustawienie logo w lewym górnym rogu */
        }

        .header a {
            color: #FFFFFF;
            font-size: 16px;
            font-weight: 600;
            margin-left: 20px;
            text-decoration: none;
        }

        .header a:hover {
            color: #7F9799;
        }

        .header img {
            height: 30px; /* Wysokość logo */
            margin-right: 20px; /* Odstęp między logo a linkami */
            cursor: pointer; /* Wskazanie, że logo jest klikalne */
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            color: gray;
            margin: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            color: #002F34;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            color: gray;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-grid > div {
            display: flex;
            flex-direction: column;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .cancel-button, .continue-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .cancel-button {
            background-color: transparent;
            color: #002F34;
            font-weight: bold;
        }

        .cancel-button:hover {
            text-decoration: underline;
        }

        .continue-button {
            background-color: #002F34;
            color: white;
        }

        .continue-button:hover {
            background-color: #005f60;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="https://www.olx.pl">
            <img src="logo-olx.png" alt="Logo OLX"> <!-- Dodanie logo OLX jako link -->
        </a>
        <div class="header-links">
            <a href="https://www.olx.pl">Wiadomości</a>
            <a href="https://www.olx.pl">Twoje konto</a>
            <a href="https://www.olx.pl">Dodaj ogłoszenie</a>
        </div>
    </div>
    <div class="content">
        <h1>Uzupełnij swoje dane, oraz adres na który ma być wysłany przedmiot</h1>
        <form id="shippingForm" action="platnosc.php" method="post">
            <div class="form-grid">
                <div>
                    <label for="firstName">Imię*</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div>
                    <label for="lastName">Nazwisko*</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div>
                    <label for="company">Firma (opcjonalnie)</label>
                    <input type="text" id="company" name="company">
                </div>
                <div>
                    <label for="street">Ulica*</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <div>
                    <label for="houseNumber">Numer domu*</label>
                    <input type="text" id="houseNumber" name="houseNumber" required>
                </div>
                <div>
                    <label for="apartmentNumber">Numer mieszkania (opcjonalnie)</label>
                    <input type="text" id="apartmentNumber" name="apartmentNumber">
                </div>
                <div>
                    <label for="postalCode">Kod pocztowy (XX-XXX)*</label>
                    <input type="text" id="postalCode" name="postalCode" pattern="[0-9]{2}-[0-9]{3}" title="Wprowadź kod pocztowy w formacie XX-XXX" required>
                </div>
                <div>
                    <label for="city">Miejscowość*</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div>
                    <label for="email">E-mail*</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="phone">Telefon*</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" title="Wprowadź 9 cyfr numeru telefonu" required>
                </div>
            </div>
            <div class="buttons">
                <button type="button" class="cancel-button" onclick="window.location.href='https://www.olx.pl';">Anuluj</button>
                <button type="submit" class="continue-button">Dalej</button>
            </div>
        </form>
    </div>
</body>
</html>