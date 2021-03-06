<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="" type="image/png">
	<title>МКУК «МФКК» МО «ТЫЛЛЫМИНСКИЙ 2-Й НАСЛЕГ»</title>
<script defer src="bandle.js"></script><link href="styles.css" rel="stylesheet"></head>

<body>

	<div class="overlay third"></div>
	<div class="overlay second"></div>
	<div class="overlay firts"></div>
	<div class="overlay four"></div>
	<div class="overlay five"></div>
	<div class="overlay six"></div>

	<header class="header" id="header">
		<div class="header__container _container">
			<div class="header__body">
				<div class="header__block">
					<div class="header__logo"></div>
					<div class="header__heading">Муниципальное Казенное Учреждение Культуры
						Тыллыминского 2-го наслега</div>
					<div class="header__info-wrapper">
						<div class="header__info">
							<div class="header__info-icon icon-email"></div>
							<div class="header__info-text">Почта <br> popov_kim@mail.ru</div>
						</div>
						<div class="header__info">
							<div class="header__info-icon icon-phone"></div>
							<div class="header__info-text">Номер <br> +7 (41142) 2-64-47</div>
						</div>
					</div>
				</div>
				<div class="header__block">
					<ul class="header__navigation">
						<li><a class="active">Главная</a></li>
						<li><a href="#news">Новости</a></li>
						<li><a href="#">Для посетителей</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Коллектив</a></li>
						<li><a href="#">Документы</a></li>
						<li><a href="#">НОКУ</a></li>
						<li><a href="#">Интернет-приемная</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<section class="home" id="home">
		<div class="home__container _container">
			<div class="home__body">

				<div class="home__block">
					<div class="home__heading">Добро пожаловать!</div>
				</div>

				<div class="home__block-slider swiper">
					<div class="home__slider-wrapper swiper-wrapper">
						<div class="home__slide swiper-slide">
							<div class="home__image"></div>
						</div>
						<div class="home__slide swiper-slide">
							<div class="home__image"></div>
						</div>
						<div class="home__slide swiper-slide">
							<div class="home__image"></div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

				<div class="home__block">
					<div class="home__content">
						<div class="home__content-text">Дорогие друзья! Мы рады приветствовать Вас на официальном сайте!
							<br><br>
							Уверены, что Найдете максимум полезной информации, узнаете больше о нас. нашей деятельности, и, в дальнейшем станете нашими постоянными посетителями.
							<br><br>
							В настоящее время важно, чтобы информация о клубе открыта и доступна, творческая деятельность заметна узкому кругу лиц, широкой общественности. На данном сайте Узнаете последние новости о жизни клуба. О новых открытиях и достижениях. О прошлом, настоящем и будущем.</div>
						<div class="home__content-block">
							<div class="home__block-text">Ссылка на важную часть,
								которая хотелось бы показать</div>
							<div class="home__btn">Перейти</div>
						</div>
					</div>
					<div class="home__content">
						<div class="home__avatar"></div>
						<div class="home__name">Спиридонова Фаина Петровна</div>
						<div class="home__role">Директор</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="news" id="news">
		<div class="news__container _container">
			<div class="news__body">
				<div class="news__block">
					<div class="news__heading">Новости</div>
				</div>
				<div class="news__block-slider swiper">
					<div class="news__slider-wrapper swiper-wrapper">
						<div class="news__slide swiper-slide">
							<div class="news__slide-image"></div>
							<div class="news__slide-heading"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
							<div class="news__slide-text"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></div>
							<div class="news__slide-date">Идентфикатор этого поста <?php echo $val['id']; ?></div>
						</div>
						<!-- <div class="news__slide swiper-slide">
							<div class="news__slide-image"></div>
							<div class="news__slide-heading">Акция "Георгиевская ленточка"</div>
							<div class="news__slide-text">22 апреля в Афанасьевском поселении присоединились к Всероссийской акции «Сад памяти». На территории детской площадки, которая расположена напротив обелиска павшим в годы ВОВ 1941-1945г.</div>
							<div class="news__slide-date">Блог -- 25/03/2022</div>
						</div>
						<div class="news__slide swiper-slide">
							<div class="news__slide-image"></div>
							<div class="news__slide-heading">Акция "Георгиевская ленточка"</div>
							<div class="news__slide-text">22 апреля в Афанасьевском поселении присоединились к Всероссийской акции «Сад памяти». На территории детской площадки, которая расположена напротив обелиска павшим в годы ВОВ 1941-1945г.</div>
							<div class="news__slide-date">Блог -- 25/03/2022</div>
						</div>
						<div class="news__slide swiper-slide">
							<div class="news__slide-image"></div>
							<div class="news__slide-heading">Акция "Георгиевская ленточка"</div>
							<div class="news__slide-text">22 апреля в Афанасьевском поселении присоединились к Всероссийской акции «Сад памяти». На территории детской площадки, которая расположена напротив обелиска павшим в годы ВОВ 1941-1945г.</div>
							<div class="news__slide-date">Блог -- 25/03/2022</div>
						</div>
						<div class="news__slide swiper-slide">
							<div class="news__slide-image"></div>
							<div class="news__slide-heading">Акция "Георгиевская ленточка"</div>
							<div class="news__slide-text">22 апреля в Афанасьевском поселении присоединились к Всероссийской акции «Сад памяти». На территории детской площадки, которая расположена напротив обелиска павшим в годы ВОВ 1941-1945г.</div>
							<div class="news__slide-date">Блог -- 25/03/2022</div>
						</div>
						<div class="news__slide swiper-slide">
							<div class="news__slide-image"></div>
							<div class="news__slide-heading">Акция "Георгиевская ленточка"</div>
							<div class="news__slide-text">22 апреля в Афанасьевском поселении присоединились к Всероссийской акции «Сад памяти». На территории детской площадки, которая расположена напротив обелиска павшим в годы ВОВ 1941-1945г.</div>
							<div class="news__slide-date">Блог -- 25/03/2022</div>
						</div> -->
					</div>
				</div>
				<div class="news__block-btn">
					<div class="news__arrows">
						<div class="news__arrow-prev"></div>
						<div class="news__arrow-next"></div>
					</div>
					<a class="news__btn">Все новости</a>
				</div>
			</div>
		</div>
	</section>

	<section class="about" id="about">
		<div class="about__container _container">
			<div class="about__body">
				<div class="about__block">
					<div class="about__block-head">МКУК «МФКК» МО «ТЫЛЛЫМИНСКИЙ 2-Й НАСЛЕГ»</div>

					<div class="about__block-heading">Время работы</div>
					<div class="about__block-text">Рабочее время: с 8:30 до 17:30 Перерыв на обед: с 13:00 до 14:00 Выходные дни: суббота ,воскресенье</div>

					<div class="about__block-heading">Номер</div>
					<div class="about__block-text">+7 (41142) 2-64-47</div>

					<div class="about__block-heading">Почта</div>
					<div class="about__block-text">popov_kim@mail.ru</div>

					<div class="about__block-heading">Почтовый адрес</div>
					<div class="about__block-text">678084, республика Саха (Якутия) , у. Мегино-Кангаласский, с. Хатылыма, ул. Лукина, д. 3</div>
				</div>
				<div class="about__block">
					<div class="about__heading">как нас найти</div>
					<div class="about__map">
						<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af8736ac636b1ae31cb13b3757f4f9ef62304e3c0a8bf5125d66ed56d2a41bf6f&amp;source=constructor" width="894" height="532" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

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
						<li><a href="#header">Главная</a></li>
						<li><a href="#news">Новости</a></li>
						<li><a href="#">НОКУ</a></li>
						<li><a href="#">О нас</a></li>
					</ul>
					<ul class="footer__navigator">
						<li><a href="#">Коллектив</a></li>
						<li><a href="#">Документы</a></li>
						<li><a href="#">Для посетителей</a></li>
						<li><a href="#">Интернет-приемная</a></li>
					</ul>
					<div class="footer__copyright">Тыллыминский 2 наслег — © 2022</div>
				</div>
				<div class="footer__block">
					<form action="libs/telegram.php" class="footer__form" method="POST">
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