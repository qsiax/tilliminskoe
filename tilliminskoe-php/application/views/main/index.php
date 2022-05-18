<header class="header-index" id="header">
		<div class="header-index__container _container">
			<div class="header-index__body">
				<div class="header-index__block">
					<div class="header-index__logo"></div>
					<div class="header-index__heading">Муниципальное Казенное Учреждение Культуры
						Тыллыминского 2-го наслега</div>
						<div class="header-index__btn">
							<i class="icon-menu-burger"></i>
							<i class="icon-close"></i>
						</div>
					<div class="header-index__info-wrapper">
						<div class="header-index__info">
							<div class="header-index__info-icon icon-email"></div>
							<div class="header-index__info-text">Почта <br> popov_kim@mail.ru</div>
						</div>
						<div class="header-index__info">
							<div class="header-index__info-icon icon-phone"></div>
							<div class="header-index__info-text">Номер <br> +7 (41142) 2-64-47</div>
						</div>
					</div>
				</div>
				<div class="header-index__block">
					<ul class="header-index__navigation">
						<li><a href="/">Главная</a></li>
						<li><a href="/news">Новости</a></li>
						<li><a href="/documents">Документы</a></li>
						<li><a href="/team">Коллектив</a></li>
						<li><a href="/about">О нас</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="image"></div>
	
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
							<div class="home__block-text">Наш дружный коллектив</div>
							<a class="home__btn btn" href="/team">Перейти</a>
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
				<?php if (empty($list)): ?>
					<br>
					<br>
                	<h1>Список постов пуст</h1>
					<br>
					<br>
					<?php else: ?>
						<div class="news__block-slider swiper">
					<div class="news__slider-wrapper swiper-wrapper">
					<?php foreach ($list as $val): ?>
						<div class="news__slide swiper-slide">
							<a href="/post/<?php echo $val['id']; ?>">
							<div class="news__slide-image" style="background: url('/public/materials/<?php echo $val['id']; ?>.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;"></div>
							<div class="news__slide-heading"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
							</a>
							<div class="news__slide-text"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></div>
							<div class="news__slide-date">Пост: <?php echo $val['id']; ?></div>
						</div>
						<?php endforeach; ?>
						</div>
				</div>
            <?php endif; ?>
				<div class="news__block-btn">
					<div class="news__arrows">
						<div class="news__arrow-prev"></div>
						<div class="news__arrow-next"></div>
					</div>
					<a class="news__btn btn" href="/news">Все новости</a>
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

	<script>
		const menuBtn = document.querySelector('.header__btn'),
			 menuindexBtn = document.querySelector('.header-index__btn'),
			 menuIndex = document.querySelector('.header-index__navigation');

		menuindexBtn.addEventListener('click', () => {
			menuIndex.classList.toggle('active');
			menuindexBtn.classList.toggle('active');
		});

		window.addEventListener('scroll', () => {
			menuindexBtn.classList.toggle('black', window.pageYOffset > 0);
		})
	</script>