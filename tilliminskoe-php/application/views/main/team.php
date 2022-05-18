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

    <section class="team">
        <div class="team__container _container">
            <div class="team__body">
                <div class="team__block">
                    <div class="team__heading">наш коллектив</div>
                </div>
                <div class="team__content">
        
                    <div class="team__item-wrapper">
                        <div class="team__item">
                            <div class="team__item-image"></div>
                            <div class="team__item-block">
                                <div class="team__item-name">Спиридонова Фаина Петровна</div>
                                <div class="team__item-role">Директор</div>
                            </div>
                        </div>
                        <div class="team__item">
                            <div class="team__item-image"></div>
                            <div class="team__item-block">
                                <div class="team__item-name">Спиридонова Фаина Петровна</div>
                                <div class="team__item-role">Директор</div>
                            </div>
                        </div>
                        <div class="team__item">
                            <div class="team__item-image"></div>
                            <div class="team__item-block">
                                <div class="team__item-name">Спиридонова Фаина Петровна</div>
                                <div class="team__item-role">Директор</div>
                            </div>
                        </div>
                    </div>

                    <div class="team__item-wrapper">
                        <div class="team__item">
                            <div class="team__item-image"></div>
                            <div class="team__item-block">
                                <div class="team__item-name">Спиридонова Фаина Петровна</div>
                                <div class="team__item-role">Директор</div>
                            </div>
                        </div>
                        <div class="team__item">
                            <div class="team__item-image"></div>
                            <div class="team__item-block">
                                <div class="team__item-name">Спиридонова Фаина Петровна</div>
                                <div class="team__item-role">Директор</div>
                            </div>
                        </div>
                        <div class="team__item">
                            <div class="team__item-image"></div>
                            <div class="team__item-block">
                                <div class="team__item-name">Спиридонова Фаина Петровна</div>
                                <div class="team__item-role">Директор</div>
                            </div>
                        </div>
                    </div>

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