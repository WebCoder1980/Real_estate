<!doctype html>
<html>
<head>
    <?php ini_set('display_errors', 1); ?>
    <?php chdir($_SERVER['DOCUMENT_ROOT']); chdir('..'); include (getcwd() . '/main.php');?>
    <script language='javascript' type='text/javascript' src='<?php autov("/scripts/jquery.min.js"); ?>'></script>
    <script language='javascript' type='text/javascript' src='<?php autov("/scripts/main.js"); ?>'></script>
    <link href="<?php autov("/scripts/jQueryFormStyler/jquery.formstyler.css"); ?>" rel="stylesheet">
    <link href="<?php autov("/scripts/jQueryFormStyler/jquery.formstyler.theme.css"); ?>" rel="stylesheet">
    <script src="<?php autov("/scripts/jQueryFormStyler/jquery.formstyler.min.js"); ?>"></script>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='<?php autov("/styles/main.css"); ?>'>
    <title>Qhouse - Недвижимость в Москве | Купить, продать, снять, сдать.</title>
</head>
<body>
    <div id="menubar">
        <img src="<?php autov('/images/logo.png'); ?>">
        <div id="sitename">Qhouse</div>
        <a class="town"><img src="<?php autov('/images/cursor.png'); ?>">г. Москва</a>
        <a class="item">Наши приимущества</a>
        <a class="item">Контакты</a>
    </div>
    <div id="options">
        <div class="blackout">
            <h1>Недвижимость в <a class="townselect">Москве:</a></h1>
            <div class="select">
                <div class="switch">
                    <div class="radiobutton" style="background-color: #F27130">Купить</div>
                    <div class="radiobutton">Снять</div>
                    <div class="radiobutton">Продать</div>
                    <div class="radiobutton">Сдать в аренду</div>
                </div>
                <div class="settings">
				<div class="item2">Тип недвижимости:
						<select>
							<option>Квартира</option><option>Дом/Каттедж</option><option>Дача</option><option>Участок</option><option>Гараж</option><option></option>
						</select>
					</div>
                    <div class="name">Площадь:</div>
                    <div class="range">     
                        <div class="item">от:</div><div class="item"><input type="text" class="number"></div><div class="item">М<sup>2</sup></div>
                        <div class="item">до:</div><div class="item"><input type="text" class="number"></div><div class="item">М<sup>2</sup></div>
                    </div>
                    <div class="name">Цена:</div>
                    <div class="range">     
                        <div class="item">от:</div><div class="item"><input type="text" class="number"></div><div class="item">М<sup>2</sup></div>
                        <div class="item">до:</div><div class="item"><input type="text" class="number"></div><div class="item">М<sup>2</sup></div>
                    </div>
                    <div class="item2">Район: 
						<select>
							<option>Метрогородок</option><option>Зябликово</option><option>Новокосино</option><option>Ломоносовский</option>
						</select>
					</div>
					<div id="rooms">
						Кол-во комнат:
						<label><input type="checkbox" name="rooms">Студия</label><label><input type="checkbox" name="rooms">1</label><label><input type="checkbox" name="rooms">2</label><label><input type="checkbox" name="rooms">3</label><label><input type="checkbox" name="rooms">4</label><label><input type="checkbox" name="rooms">5+</label><label><input type="checkbox" name="rooms" disabled checked>Любое</label>
					</div>
					<div style="display: flex; justify-content: flex-end; margin-top: 8px;"><input type="button" value="Искать!" style="width: 40%; background-color: #F27130; padding: 5px; "></div>
                </div>
            </div>
        </div>
    </div>	
</body>
</html>