<!DOCTYPE html>
<?php 
	require 'include/functions.php';
	require 'include/db.php';
?>
<html lang="ru">
<head>
	<title>Калькулятор процентов онлайн</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;600;800&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header_top">
		<div class="container">
			<a href="/">RU.Percent-calculator.org</a>
		</div>
	</div>
	<div class="container mb50">
		<header><h1>Посчитать процент от числа онлайн через калькулятор процентов</h1></header>
		<article>Наш бесплатный онлайн-инструмент, под названием калькулятор процентов, позволит вам с легкостью посчитать процент от заданного числа а также произвести некоторые другие операции: посчитать, на сколько процентов увеличилось число, добавить процент к числу или вычесть процент из числа.</article>
	</div>
	<section class="container dark_block">
		<h3>Рассчитать процент от числа</h3>
			<form class="dark_form" method="post" id="form1" name="only_percent">
				<div>
					<input class="myinput" size="17" type="text" name="percent" autocomplete="off" placeholder="сюда %">
					<input class="myinput" size="17" type="text" name="number" autocomplete="off" placeholder="сюда число">
				</div>
				<div>
					<input class="myinput_sub" type="submit" value="Рассчитать">
					<input readonly class="myinput color_green" size="17" type="text" name="result" autocomplete="off" placeholder="результат" 
					<?php if(!empty($_POST['number']) && !empty($_POST['percent'])): ?>
					value="<?=get_percent_from_number($_POST['percent'], $_POST['number']) ;?>"
					<?php endif; ?>
					>
				</div>
			</form>
	</section>
	<section class="container dark_block">
		<h3>Посчитать на сколько процентов увеличилось или уменьшилось число</h3>
			<form class="dark_form" method="post" id="form2" name="only_diff">
				<div>
					<input class="myinput" size="17" type="text" name="number1" autocomplete="off" placeholder="исходное число">
					<input class="myinput" size="17" type="text" name="number2" autocomplete="off" placeholder="конечное число">
				</div>
				<div>
					<input class="myinput_sub" type="submit" value="Рассчитать">
					<input readonly class="myinput color_green" size="17" type="text" name="result" autocomplete="off" placeholder="результат" 
					<?php if(!empty($_POST['number1']) && !empty($_POST['number2'])): ?>
					value="<?=get_diff_numbers($_POST['number1'], $_POST['number2']) ;?>"
					<?php endif; ?>
					>
				</div>
			</form>
	</section>
	<section class="container dark_block">
		<h3>Добавить процент к числу</h3>
			<form class="dark_form" method="post" id="form2" name="only_plus">
				<div>
					<input class="myinput" size="17" type="text" name="number_plus" autocomplete="off" placeholder="исходное число">
					<input class="myinput" size="17" type="text" name="percent_plus" autocomplete="off" placeholder="добавляемый %">
				</div>
				<div>
					<input class="myinput_sub" type="submit" value="Рассчитать">
					<input readonly class="myinput color_green" size="17" type="text" name="result" autocomplete="off" placeholder="результат" 
					<?php if(!empty($_POST['number_plus']) && !empty($_POST['percent_plus'])): ?>
					value="<?=get_plus_percent($_POST['number_plus'], $_POST['percent_plus']) ;?>"
					<?php endif; ?>
					>
				</div>
			</form>
	</section>
	<section class="container dark_block">
		<h3>Отнять процент от числа</h3>
			<form class="dark_form" method="post" id="form2" name="only_minus">
				<div>
					<input class="myinput" size="17" type="text" name="number_minus" autocomplete="off" placeholder="исходное число">
					<input class="myinput" size="17" type="text" name="percent_minus" autocomplete="off" placeholder="отнимаемый %">
				</div>
				<div>
					<input class="myinput_sub" type="submit" value="Рассчитать">
					<input readonly class="myinput color_green" size="17" type="text" name="result" autocomplete="off" placeholder="результат" 
					<?php if(!empty($_POST['number_minus']) && !empty($_POST['percent_minus'])): ?>
					value="<?=get_minus_percent($_POST['number_minus'], $_POST['percent_minus']) ;?>"
					<?php endif; ?>
					>
				</div>
			</form>
	</section>
</body>
</html>