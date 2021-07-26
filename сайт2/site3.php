
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
    <title>ООО"Билеты.рф</title>
		</head>

<body>
 <header>
 <div class = "theme">
 <img src="" alt="">
 </div>
    <nav class="main-menu">
	  <ul>
	    <li><a href="site3.html">Главная</a></li>
		<li><a href="">Товары</a>
		    <ul>
              <li><a href="#">Рок</a>
			      <ul>
                    <li><a href="#">Крепыш</a></li>
                    <li><a href="#">Бархотное</a></li>
                    <li><a href="#">Жигулёвское</a></li>
                  </ul>
			  </li>
              <li><a href="#">Джаз</a>
			      <ul>
                    <li><a href="#">С-Стефано сладкое</a></li>
                    <li><a href="#">С-Стефано полу-сладкое</a></li>
                    <li><a href="#">С-Стефано сухое</a></li>
                  </ul>			  
			  </li>
              <li><a href="#">Новинки</a>
			      <ul>
                    <li><a href="#">Ижмых сладкое</a></li>
                    <li><a href="#">Ижмых полу-сладкое</a></li>
                    <li><a href="#">Ижмых сухое</a></li>
                  </ul>
			  </li>
            </ul>
		</li>
		<li><a href="reg.php">Регистрация</a></li>
		<li><a href="pomoyka.html">Корзина</a></li>
	  </ul>
	</nav>
 </header>
 <div class = "main">
<div class="item">
<img src="nirvana.png">
<BR><a href="#">Nirvana</a>
<div class="control">
<Input type="submit" name="" value="Добавить в корзину">
<button type="button" onClick="plusClick()">+</button>
<p><a id="clicks">0</a></p>
<button type="button" onClick="minusClick()">-</button>
<button  onclick="alertCookieValue()">Добро пожаловать Login</button>
</div>
</div>
<div class="item">
<img src="beat.png">
<BR><a href="#">Beatles </a> 
<div class="control">
<Input type="submit" name="" value="Добавить в корзину">
<button type="button" onClick="plusClick()">+</button>
<p><a id="clicks">0</a></p>
<button type="button" onClick="minusClick()">-</button>
</div>
</div>
<div class="item">
<img src="acdc.jpg">
<BR><a href="#">ACDC</a>
<div class="control">
<Input type="submit" name="" value="Добавить в корзину">
<button type="button" onClick="plusClick()">+</button>
<p><a id="clicks">0</a></p>
<button type="button" onClick="minusClick()">-</button>
</div>
</div>

<div id="gray" onclick="hide()">
		<div id="window" onclick="preventDefault(event)">
		<img  class="close" src="img/close.png" alt="" onclick="hide()">
		<div class="form">
			<h2>Регистрация</h2>
		    <form action="index.html" name="f1">
		        <input type="text" id="login" placeholder="Логин" class="input">
		        <input type="password" id="pas" placeholder="Пароль" class="input">
		        <input type="submit" onclick="register()" value="Регистрация" name="sab" class="input">
		    </form>
		    <h2>Вход</h2>
		    <form action="index.html" name="f1">
		        <input type="text" id="login1" placeholder="Логин" class="input">
		        <input type="password" id="pas1" placeholder="Пароль" class="input">
		        <input type="submit" onclick="logining()" value="Войти" name="sab" class="input">
		</div>
    </div>
</div>
	
 </div>
 <script src="main.js"></script>
</body>
</html>
