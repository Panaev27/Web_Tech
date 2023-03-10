<?
require_once('php/connect.php');
$id = $_GET['id'];
$content = mysqli_query($connect, "SELECT * FROM `recipe` WHERE `id_recipe` = '$id'");
$content = mysqli_fetch_assoc($content);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Булочная</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header class="header">
		<div class="content">
			<div class="logo__place">
				<a href="index.html">
					<img src="https://ваш-хлеб.рф/wp-content/uploads/2018/12/cropped-Logo.png" alt="logo">
				</a>
			</div>

			<div class="title">Булочная</div>
		</div>
	</header>

	<main class="main">
		<div class="content">
			<div class="recipe__learnMore__items">
				<div class="recipe__learnMore__img" style="background: url('<?= $content['img_recipe'] ?>') no-repeat;background-size: cover;background-position: 50% 50%;">
				</div>

				<div class="recipe__learnMore__name">
					<?= $content['name_recipe'] ?>
				</div>

				<div class="recipe__learnMore__title">
					Состав:
				</div>

				<div class="recipe__learnMore__text">
					<?= $content['text_recipe'] ?>
				</div>

				<div class="recipe__price bolder">
					<?= $content['recipe_price'] ?>
				</div>
			</div>

			<div class="learnMore__form">
				<div class="learnMore__form__title">
					Комментарий
				</div>
				<form name="learnMore__send__comment" class="learnMore__send__comment">
					<input type="text" name="id" hidden="" value="<?= $id ?>" />

					<input id="name" type="text" name="name" placeholder="Имя пользователя (свыше 6 знаков)">

					<input id="email" type="email" name="email" placeholder="Email (свыше 6 знаков)">

					<textarea id="text" placeholder="Введите комментарий."></textarea>

					<input type="submit" name="submit" id="btn__submit">
				</form>
			</div>

			<div class="comments__title">
			</div>

			<div id="learnMore__place__for__comments">
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script src="js/comments.js"></script>
</body>

</html>