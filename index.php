<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="style/jquery-ui.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="wrap">
<div class=header>
	<div class=logo>
		<img src="logo.jpg">
	</div>
	<div class=contact-head>
		895055055055<br>
		9500505050505
	</div>
</div>
<div class=menu>
	<a href="">Кредитные карты </a> 
	<a href="">Вклады</a>
	<a href="">Дебетовые карты</a>
	<a href="">Страхование</a>
	<a href="">Друзья</a>
	<a href="">Интернет-банк</a>
</div>

<div class=content>
	<h2>Калькулятор</h2>
	<form action="calc.php" class="login" method="post">
		<p>
		<label  for=datep> Дата оформления вклада </label>
		<input type=text id=datep><br>
		</p>
		<p>
		<label for=summa> Сумма вклада</label>
		<input type="text" id="summa" value="10 000" oninput="CheckRange()"><input type="range" id="range1" min="1000" max="3000000" step="1000" oninput="CheckRange()">
		</p>

		<p>
			<label for="srok">Срок вклада</label>
			<select  name=srok id="srok">
				<option value=one>1 год</option>
				<option value=two>2 года</option>
			</select>
		</p>
		<p>
			<label for="vklad">Пополняемый вклад</label>
			<input type="radio" name="vklad" id=vklad value="no" checked="">Нет
			<input type="radio" name="vklad" id="vklad" value="yes">Да
		</p>
		<p>
			<label for="summap">Сумма пополенения вклада</label>
			<input type="text" name="summap" id="summap" value=10000 oninput="CheckRange2()"><input type="range" id="range2" min="1000" max="3000000" step="1000" oninput="CheckRange2()">
		</p>
		<p>
		<input type="submit" name="" value="Рассчитать"> 
		</p>
	</form>


<footer>
		<a href="">Кредитные карты </a> 
	<a href="">Вклады</a>
	<a href="">Дебетовые карты</a>
	<a href="">Страхование</a>
	<a href="">Друзья</a>
	<a href="">Интернет-банк</a>
</footer>
</div>
<script type="text/javascript">
	$(function() {
	
    $('#datep').datepicker();
			
});
</script>
<script>
window.CheckRange = function() {
  var rng = document.getElementById('range1');
  var myRangeInput = document.getElementById('summa');

  myRangeInput.value = rng.value;
}

let myRangeInput = document.getElementById('summa');

myRangeInput.oninput = function(e) {
	 var rng = document.getElementById('range1');
	 rng.value = this.value;
}

$("#summa").on("keydown keyup input change focus", function() {
  if (this.value.match(/[^0-9]/g)) {
   this.value = this.value.replace(/[^0-9]/g, '');
}});
  
$("#summap").on("keydown keyup input change focus", function() {
  if (this.value.match(/[^0-9]/g)) {
   this.value = this.value.replace(/[^0-9]/g, '');
}});
</script>
<script type="text/javascript">
	window.CheckRange2 = function() {
  var rng2 = document.getElementById('range2');
  var myRangeInput2 = document.getElementById('summap');

  myRangeInput2.value = rng2.value;
}

let myRangeInput2 = document.getElementById('summap');

myRangeInput2.oninput = function(e) {
	 var rng2 = document.getElementById('range2');
	 rng2.value = this.value;
}
</script>
</body>
</html>