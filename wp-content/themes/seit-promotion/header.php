<!DOCTYPE html>
<html lang="uk">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo('name'); echo " - "; bloginfo( 'description' ); ?></title>
		<link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon-32x32.jpg" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet" />

		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.css"
			integrity="sha512-Y0MM+V6ymRKN2zStTqzQ227DWhhp4Mzdo6gnlRnuaNCbc+YN/ZH0sBCLTM4M0oSy9c9VKiCvd4Jk44aCLrNS5Q=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link href="https://cdn.jsdelivr.net/npm/swiper@10.0.4/swiper-bundle.min.css" rel="stylesheet" />
		<?php
			wp_head();
		?>
	</head>
	<body>
		<div class="wrapper">
			<header class="header">
				<div class="container">
					<nav class="main-nav">
						<a href="<?php echo get_home_url(); ?>" class="logo main-nav__logo">
							<img src="<?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                            echo $custom_logo__url[0] ?>" alt="логотип" />
						</a>
						<ul class="site-nav menu main-nav__menu list">
							<li class="menu__item item">
								<a href="" class="menu__link menu__link--ad link">
									Зовнішня реклама
									<svg class="icon chevron"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#chevronDown"></use></svg>
								</a>
								<ul class="main-nav__submenu list">
									<li class="sub-menu__item item">
										<a href="./ligthboxes.html" class="menu__link link sub-menu__link">Лайтбокси</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Дахові конструкції</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Об’ємні літери</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Банерні конструкції</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Вхідні групи</a>
									</li>
								</ul>
							</li>
							<li class="menu__item item">
								<a href="" class="menu__link menu__link--ad link">
									Інтер’єрна реклама
									<svg class="icon chevron"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#chevronDown"></use></svg>
								</a>
								<ul class="main-nav__submenu list">
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Неонові вивіски</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Об’ємні логотипи</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Фігури та елементи з пластику</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Оформлення зони ресепшн</a>
									</li>
									<li class="sub-menu__item item">
										<a href="" class="menu__link link sub-menu__link">Інтер’єні вивіски</a>
									</li>
								</ul>
							</li>
							<li class="menu__item item">
								<a href="./about-us.html" class="menu__link link">Про нас</a>
							</li>
							<li class="menu__item item"><a href="./contacts.html" class="menu__link link">Контакти</a></li>
							<li class="menu__item item menu__item--contacts">
								<ul class="menu__contacts-list list">
									<li class="menu__contacts-item">
										<a class="menu__contacts-link link" href="tel:<?php the_field('main_phone_number_call', 2); ?>" aria-label="Phone">
											<svg class="icon phone icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#phone"></use></svg>
										</a>
									</li>
									<li class="menu__contacts-item">
										<a class="menu__contacts-link link" href="mailto:<?php the_field('email', 2); ?>" aria-label="Email">
											<svg class="icon mail icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#mail"></use></svg>
										</a>
									</li>
									<li class="menu__contacts-item">
										<a
											class="menu__contacts-link link"
											href="<?php the_field('instagram', 2); ?>"
											target="_blank"
											rel="noreferrer noopener"
											aria-label="Instagram"
										>
											<svg class="icon icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#instagram"></use></svg>
										</a>
									</li>
									<li class="menu__contacts-item">
										<a
											class="menu__contacts-link link"
											href="<?php the_field('facebook', 2); ?>"
											target="_blank"
											rel="noreferrer noopener"
											aria-label="Facebook"
										>
											<svg class="icon icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#facebook"></use></svg>
										</a>
									</li>
								</ul>
							</li>
							<li class="menu__item item">
								<a href="" class="menu__link menu__link--lang link">
									<svg class="icon globe"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#globe"></use></svg>
									<span lang="en">UA</span>
								</a>
							</li>
						</ul>

						<button type="button" class="menu__open">
							<svg class="menu__icon-open">
								<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#hamburgerMenu"></use>
							</svg>
						</button>
					</nav>
				</div>
				<div class="mob-menu is-hidden">
					<div class="container--mobile">
						<div class="mob-menu__header">
							<a href="./" class="logo main-nav__logo">
								<img src="<?php echo bloginfo('template_url'); ?>/assets/images/logoOriginal.png" alt="логотип" />
							</a>
							<button type="button" class="menu__close">
								<svg class="menu__icon-close">
									<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#iconClose"></use>
								</svg>
							</button>
						</div>

						<ul class="mob-menu__nav mob-nav list">
							<li class="mob-nav__item item">
								<p>Зовнішня реклама</p>
								<ul class="mob-nav__sub-list list">
									<li class="mob-nav__sub-item item">
										<a href="./ligthboxes.html" class="mob-nav__link link">Лайтбокси</a>
									</li>
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Дахові конструкції</a></li>
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Об’ємні літери</a></li>
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Банерні конструкції</a></li>
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Вхідні групи</a></li>
								</ul>
							</li>
							<li class="mob-nav__item item">
								<p>Інтер’єна реклама</p>
								<ul class="mob-nav__sub-list list">
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Неонові вивіски</a></li>
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Об’ємні логотипи</a></li>
									<li class="mob-nav__sub-item item">
										<a href="" class="mob-nav__link link">Фігури та елементи з пластику</a>
									</li>
									<li class="mob-nav__sub-item item">
										<a href="" class="mob-nav__link link">Оформлення зони ресепшн</a>
									</li>
									<li class="mob-nav__sub-item item"><a href="" class="mob-nav__link link">Інтер’єні вивіски</a></li>
								</ul>
							</li>
							<li class="mob-nav__item item">
								<a href="./about-us.html" class="mob-nav__link link">Про нас</a>
							</li>
							<li class="mob-nav__item item">
								<a href="./contacts.html" class="mob-nav__link link">Контакти</a>
							</li>
							<!-- menu__item--contacts -->
							<li class="mob-nav__item mob-nav__item--contacts item">
								<ul class="menu__contacts-list menu__contacts-list--mob list">
									<li class="menu__contacts-item">
										<a class="menu__contacts-link link" href="tel:<?php the_field('main_phone_number_call', 2); ?>" aria-label="Phone">
											<svg class="icon phone icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#phone"></use></svg>
										</a>
									</li>
									<li class="menu__contacts-item">
										<a class="menu__contacts-link link" href="mailto:<?php the_field('email', 2); ?>" aria-label="Email">
											<svg class="icon mail icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#mail"></use></svg>
										</a>
									</li>
									<li class="menu__contacts-item">
										<a
											class="menu__contacts-link link"
											href="<?php the_field('instagram', 2); ?>"
											target="_blank"
											rel="noreferrer noopener"
											aria-label="Instagram"
										>
											<svg class="icon icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#instagram"></use></svg>
										</a>
									</li>
									<li class="menu__contacts-item">
										<a
											class="menu__contacts-link link"
											href="<?php the_field('facebook', 2); ?>"
											target="_blank"
											rel="noreferrer noopener"
											aria-label="Facebook"
										>
											<svg class="icon icon--header"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#facebook"></use></svg>
										</a>
									</li>
								</ul>
							</li>
							<li class="mob-nav__item mob-nav__item--lang item">
								<a href="" class="menu__link menu__link--lang menu__link--mob link">
									<svg class="icon globe"><use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#globe"></use></svg>
									<span lang="en">UA</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</header>