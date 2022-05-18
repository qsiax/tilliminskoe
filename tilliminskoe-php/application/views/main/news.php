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

<section class="news-block">
        <div class="news-block__container _container">
            <div class="news-block__body">
                <div class="news-block__block">
                    <div class="news-block__item-wrapper">
                    <?php if (empty($list)): ?>
                	<p>Список постов пуст</p>
					<?php else: ?>
                        <?php foreach ($list as $val): ?>
                        <div class="news-block__item">
							<a href="/post/<?php echo $val['id']; ?>">
								<div class="news-block__item-image" style="background: url('/public/materials/<?php echo $val['id']; ?>.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;"></div>
								<div class="news-block__item-heading"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
							</a>
                            <div class="news-block__item-descriptions"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></div>
                            <div class="news-block__item-text"><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></div>
							<div class="news-block__item-date">Пост: <?php echo $val['id']; ?></div>
                            <a class="news-block__item-btn btn" href="/post/<?php echo $val['id']; ?>">Перейти</a>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
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