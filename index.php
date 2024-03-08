<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Get your new car !</title>
    <script src="script.js"></script>
</head>
<body>
    <?php include_once "header.php"; ?>
    <div class="header">
        <div class="header-title">Get your new car !</div>
    </div>
    <form>
        <div class="searchbar">
            <div class="searchbar-int">
                <div class="searching">
                    <span class="material-symbols-outlined">search</span>
                    <input class="inp-search" type="text" id="searchInput" placeholder="search">
                </div>
                <div class="dropdown">
                    <select id="carPrice" class="carType">
                        <option value="all" class="allcars">Price</option>
                        <option value="0-3000" class="0-3000">0-3000</option>
                        <option value="3000-10.000" class="3000-10.000">3000-10.000</option>
                        <option value="+ 10.000" class="+ 10.000"> + 10.000</option>
                    </select>
                </div>
                <div class="dropdown">
                    <select id="carModel" class="carType">
                        <option value="all" class="allcars">Model</option>
                        <option value="Subaru" class="Subaru">Subaru</option>
                        <option value="Gtrr" class="Gtrr">Gtrr</option>
                        <option value="Mitsubishi" class="Mitsubishi">Mitsubishi</option>
                        <option value="Dirt Car" class="Dirt Car">Dirt Car</option>
                    </select>
                </div>
                <div class="dropdown">
                    <select id="carColor" class="carType">
                        <option value="all" class="allcars">Color</option>
                        <option value="blue" class="blue">Blue</option>
                        <option value="white" class="white">White</option>
                        <option value="grey" class="grey">Grey</option>
                        <option value="yellow" class="yellow">Yellow</option>
                    </select>
                </div>
                <button type='submit' class="search-submit">Rechercher</button>
            </div>
        </div>
    </form>
    <div class="cars" id="cars">
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const carPriceSelect = document.getElementById('carPrice');
    const carModelSelect = document.getElementById('carModel');
    const carColorSelect = document.getElementById('carColor');
    const searchInput = document.getElementById('searchInput');

    const applyFilters = () => {
        const selectedPrice = carPriceSelect.value;
        const selectedModel = carModelSelect.value;
        const selectedColor = carColorSelect.value;
        const searchString = searchInput.value.toLowerCase();

        const filteredCars = car.filter(car => {
            const passesPriceFilter = selectedPrice === 'all' || (
                selectedPrice === '0-3000' && car.price <= 3000 ||
                selectedPrice === '3000-10.000' && car.price > 3000 && car.price <= 10000 ||
                selectedPrice === '+ 10.000' && car.price > 10000
            );

            const passesModelFilter = selectedModel === 'all' || car.name === selectedModel;
            const passesColorFilter = selectedColor === 'all' || car.color === selectedColor;
            const passesSearchFilter = car.name.toLowerCase().includes(searchString);

            return passesPriceFilter && passesModelFilter && passesColorFilter && passesSearchFilter;
        });

        displayFilteredCars(filteredCars);
    };

    const displayFilteredCars = (filteredCars) => {
        const html = filteredCars.map((car, index) => `
            <div class="car-card">
                <img src="${car.img}" class="car-img">
                <div class="car-details">
                    <div class="car-title">${car.name}</div>
                    <div class="car-info">
                        <div class="car-info-item">Color: ${car.color}</div>
                        <div class="car-info-item">Price: $${car.price}</div>
                    </div>
                    <div class="car-location">Location: Orléans</div>
                    <div class="offer-button">
                        <form action="priceoffer.php">
                            <button type="submit" class="offer-submit">View Offer</button>
                        </form>
                    </div>
                </div>
            </div>
        `).join('');

        document.getElementById('cars').innerHTML = html;
    };

    carPriceSelect.addEventListener('change', applyFilters);
    carModelSelect.addEventListener('change', applyFilters);
    carColorSelect.addEventListener('change', applyFilters);
    searchInput.addEventListener('input', applyFilters);

    applyFilters(); 
});
includeHTML();

</script>
</body>
</html>
