<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/assets/images/logo-icon.png" type="image/png">
	<title><?php echo $title; ?></title>
<script defer src="/bandle.js"></script><link href="/styles.css" rel="stylesheet"></head>

<body>

	<div class="overlay third"></div>
	<div class="overlay second"></div>
	<div class="overlay firts"></div>
	<div class="overlay four"></div>
	<div class="overlay five"></div>
	<div class="overlay six"></div>

        <?php echo $content; ?>
		<footer class="footer">
		<div class="footer__container _container">
			<div class="footer__body">
				<div class="footer__block">
					<div class="footer__content">
						<div class="footer__heading">Муниципальное Казенное Учреждение Культуры
							Тыллыминского 2-го наслега</div>
					</div>
					<div class="footer__content">
						<a class="footer__logo" href="/"></a>
						<div class="footer__info-wrapper">
							<div class="footer__info">
								<div class="footer__info-icon icon-email"></div>
								<div class="footer__info-text">Почта <br> popov_kim@mail.ru</div>
							</div>
							<div class="footer__info">
								<div class="footer__info-icon icon-phone"></div>
								<div class="footer__info-text">Номер <br> +7 (41142) 2-64-47</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__block">
					<ul class="footer__navigator">
						<li><a href="/">Главная</a></li>
						<li><a href="/news">Новости</a></li>
						<li><a href="/documents">Документы</a></li>
						<li><a href="/team">Коллектив</a></li>
						<li><a href="/about">О нас</a></li>
					</ul>
					<div class="footer__copyright">Тыллыминский 2 наслег — © 2022</div>
				</div>
				<div class="footer__block">
					<form action="/libs/telegram-feedback.php" class="footer__form" method="POST">
						<input type="text" name="name" placeholder="Имя">
						<textarea name="message" placeholder="Сообщение"></textarea>
						<button type="submit">Оставить отзыв</button>
					</form>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>