<header class="header" id="header">
		<div class="header__container _container">
			<div class="header__body">
				<div class="header__block">
					<div class="header__logo"></div>
					<div class="header__heading">Муниципальное Казенное Учреждение Культуры
						Тыллыминского 2-го наслега</div>
						<div class="header__btn">
							<i class="icon-menu-burger"></i>
							<i class="icon-close"></i>
						</div>
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

<section class="about" id="about">
		<div class="about__container _container">
			<div class="about__body mt100px">
				<div class="about__block">
					<div class="about__block-head">МКУК «МФКК» МО «ТЫЛЛЫМИНСКИЙ 2-Й НАСЛЕГ»</div>

					<div class="about__block-heading">Время работы</div>
					<div class="about__block-text fz14px mb35px">Рабочее время: с 10:00 до 18:00 Перерыв на обед: с 13:00 до 14:00 Выходные дни: суббота , воскресенье</div>

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

    <section class="contact">
        <div class="contact__container _container">
            <div class="contact__body">
                <div class="contact__block">
                    <div class="contact__heading">обратная связь</div>
                    <div class="contact__text">Вы можете написать нам по любому интересующему вас вопросу: от обучения до сотрудничества.</div>
                </div>
                <div class="contact__content">
                    <div class="contact__image"></div>
                    <form class="contact__form" action="/libs/telegram-application.php" method="POST">
                        <div class="contact__form-wrapper">
                            <input type="text" name="name" placeholder="Имя">
                            <input type="num" name="phone" placeholder="Номер">
                        </div>
                        <input type="email" name="email" placeholder="Почта">
                        <textarea name="message" placeholder="Сообщение"></textarea>
						<div class="contact__form-conf">Нажимая на кнопку, я соглашаюсь на обработку персональных данных и с правилами пользования Платформой</div>
                        <button type="submit" class="btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<script>
		const menuBtn = document.querySelector('.header__btn'),
			 menu = document.querySelector('.header__navigation');

		menuBtn.addEventListener('click', () => {
			menu.classList.toggle('active');
			menuBtn.classList.toggle('active');
		});

		window.addEventListener('scroll', () => {
			menuBtn.classList.toggle('black', window.pageYOffset > 0);
		})
	</script>