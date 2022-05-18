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

<section class="post">
        <div class="post__container _container">
            <div class="post__body">
                <div class="post__block">
                    <div class="post__heading"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></div>
                    <div class="post__descriptions"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></div>
                    <div class="post__content">
                        <div class="post__text"><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></div>
                        <div class="post__image" style="background-image: url('/public/materials/<?php echo $data['id']; ?>.jpg'); background-size: cover; background-repeat: no-repeat;"></div>
                    </div>
                </div>
                <div class="post__block">
                    <div class="post__news-heading">Последние новости</div>
                    <div class="post__item-wrapper">
					<?php if (empty($list)): ?>
                	<p>Список постов пуст</p>
					<?php else: ?>
                        <?php foreach ($list as $val): ?>
                        <div class="post__item"><a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a></div>
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