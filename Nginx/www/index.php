<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div class="header">

    <div class="name-1">Название</div>

    <div class="button_menu">
        <button onclick="myFunction()" class="dropbtn">Направления</button>
        <div id="myButton" class="dropdown-content">
            <a href="#">Автоуслуги</a>
            <a href="#">Деловые услуги</a>
            <a href="#">Животные</a>
            <a href="#">Компьютерные услуги</a>
            <a href="#">Красота</a>
            <a href="#">Медицина</a>
            <a href="#">Образование</a>
            <a href="#">Перевозки</a>
            <a href="#">Строительные работы</a>
            <a href="#">Фото-видеосъемка</a>
        </div>
    </div>

    <div>
        <form class="example">
            <label>
                <input type="text" placeholder="Поиск услуг" name="search">
            </label>
            <button type="submit" class="fa fa-search">Найти</button>
        </form>
    </div>

    <div class="button_announcement">
        <button onclick="myFunction()" class="announcement">Разместить объявление</button>
    </div>

    <div class="button_profile">
        <button onclick="myFunction()" class="profile">Профиль</button>
    </div>
</div>

<div class="container">
    <h2 class="sub-title">Выберите направление</h2>

    <div class="categories">
        <div class="category">
            <div class="cat-1">
                <img src="picture/carservice.png" width="200" height="200">
            </div>
            <div class="car-title">Автоуслуги</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/business.png" width="200" height="200">
            </div>
            <div class="car-title">Деловые услуги</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/animal.png" width="200" height="200">
            </div>
            <div class="car-title">Животные</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/it.png" width="200" height="200">
            </div>
            <div class="car-title">Компьютерные услуги</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/krasota.png" width="200" height="200">
            </div>
            <div class="car-title">Красота</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/medicine.png" width="200" height="200">
            </div>
            <div class="car-title">Медицина</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/Education.png" width="200" height="200">
            </div>
            <div class="car-title">Образование</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/transportation.png" width="200" height="200">
            </div>
            <div class="car-title">Перевозки</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/house.png" width="200" height="200">
            </div>
            <div class="car-title">Строительные работы</div>
        </div>

        <div class="category">
            <div class="cat-1">
                <img src="picture/photo.png" width="200" height="200">
            </div>
            <div class="car-title">Фото-видеосъемка</div>
        </div>

    </div>

</div>


</body>
</html>