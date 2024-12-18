<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Dropdown Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.menu-container {
    max-width: 1200px;
    margin: 20px auto;
    background-color: #ffffff;
    border-radius: 5px;
    border: 0.2px solid grey;
    box-shadow: 3px 3px 1px whitesmoke;
}

.menu-row {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.menu-col {
    flex: 1;
    min-width: 220px;
    margin: 10px;
    padding-left: 20px;
    border-right: 0.1px solid darkgrey;
}

.menu-col:last-child {
    border-right: none;
}

.menu-dropdown-header {
    font-size: 18px;
    margin: 15px 0;
    font-weight: 600;
}

.menu-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.menu-dropdown-item {
    display: block;
    color: #333;
    text-decoration: none;
    margin: 5px 0;
    padding: 5px 0;
    font-size: 15px;
}

.menu-dropdown-item:hover {
    color: #0056b3;
    text-decoration: underline;
}

</style>
<body>
    <!-- Header Section -->
    <header>
        <div class="menu-container">
            <div class="menu-row">
                <!-- Column 1 -->
                <div class="menu-col">
                    <h6 class="menu-dropdown-header">PRODUCT TYPE</h6>
                    <ul class="menu-list">
                        <li><a class="menu-dropdown-item" href="#">All Skincare</a></li>
                        <li><a class="menu-dropdown-item" href="#">Facial Cleansers</a></li>
                        <li><a class="menu-dropdown-item" href="#">Facial Serums</a></li>
                        <li><a class="menu-dropdown-item" href="#">Facial Moisturizers</a></li>
                        <li><a class="menu-dropdown-item" href="#">Body Cleansers</a></li>
                        <li><a class="menu-dropdown-item" href="#">Body Moisturizers</a></li>
                        <li><a class="menu-dropdown-item" href="#">Eye Creams</a></li>
                        <li><a class="menu-dropdown-item" href="#">Makeup Removers</a></li>
                        <li><a class="menu-dropdown-item" href="#">Sunscreens</a></li>
                        <li><a class="menu-dropdown-item" href="#">Moisturizers with SPF</a></li>
                        <li><a class="menu-dropdown-item" href="#">For Baby</a></li>
                        <li><a class="menu-dropdown-item" href="#">Ointment</a></li>
                    </ul>
                </div>
                <!-- Column 2 -->
                <div class="menu-col">
                    <h6 class="menu-dropdown-header">SKIN CONCERN</h6>
                    <ul class="menu-list">
                        <li><a class="menu-dropdown-item" href="#">Acne</a></li>
                        <li><a class="menu-dropdown-item" href="#">Anti-aging</a></li>
                        <li><a class="menu-dropdown-item" href="#">Cracked, Chafed Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Diabetic Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Eczema</a></li>
                        <li><a class="menu-dropdown-item" href="#">Itchy Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Psoriasis</a></li>
                        <li><a class="menu-dropdown-item" href="#">Rough and Bumpy</a></li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div class="menu-col">
                    <h6 class="menu-dropdown-header">SKIN TYPE</h6>
                    <ul class="menu-list">
                        <li><a class="menu-dropdown-item" href="#">Combination Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Dry Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Normal Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Oily Skin</a></li>
                        <li><a class="menu-dropdown-item" href="#">Sensitive Skin</a></li>
                    </ul>
                </div>
                <!-- Column 4 -->
                <div class="menu-col">
                    <h6 class="menu-dropdown-header">BRANDS</h6>
                    <ul class="menu-list">
                        <li><a class="menu-dropdown-item" href="#">Benzoyl Peroxide</a></li>
                        <li><a class="menu-dropdown-item" href="#">Dimethicone</a></li>
                        <li><a class="menu-dropdown-item" href="#">Hyaluronic Acid</a></li>
                        <li><a class="menu-dropdown-item" href="#">Lactic Acid</a></li>
                        <li><a class="menu-dropdown-item" href="#">Niacinamide</a></li>
                        <li><a class="menu-dropdown-item" href="#">Petrolatum</a></li>
                        <li><a class="menu-dropdown-item" href="#">Pramoxine Hydrochloride</a></li>
                        <li><a class="menu-dropdown-item" href="#">Retinol</a></li>
                        <li><a class="menu-dropdown-item" href="#">Salicylic Acid</a></li>
                        <li><a class="menu-dropdown-item" href="#">Titanium Dioxide</a></li>
                        <li><a class="menu-dropdown-item" href="#">Urea</a></li>
                        <li><a class="menu-dropdown-item" href="#">Vitamin C</a></li>
                        <li><a class="menu-dropdown-item" href="#">Zinc Oxide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
