
			<footer class="footer">
				<div class="footer__container container">
					<div class="footer__upper-part">
						<div class="footer__logo-part">
							<a href="<?php echo get_home_url(); ?>" class="footer__logo logo">
								<img src="<?php echo bloginfo('template_url'); ?>/assets/images/logoWhite.png" alt="логотип" class="logo" />
							</a>
						</div>
						<div class="first-col">
							<ul class="list">
								<li class="footer__title footer__title--first-col">
									<a href="./about-us.html" class="link">Про нас</a>
								</li>
								<li class="footer__title footer__title--first-col">
									<a href="https://seit-horeca.com.ua" target="_blank" rel="noreferrer noopener" class="link" lang="en">
										SEIT-HORECA
									</a>
								</li>
							</ul>
						</div>
						<div class="second-col">
							<b class="footer__title footer__title--products">Зовнішня реклама</b>
							<ul class="list footer__list">
								<li><a href="" class="link footer__link">Об’ємні літери</a></li>
								<li><a href="./ligthboxes.html" class="link footer__link">Лайтбокси</a></li>
								<li><a href="" class="link footer__link">Дахові конструкції</a></li>
								<li><a href="" class="link footer__link">Банерні конструкції</a></li>
								<li><a href="" class="link footer__link">Вхідні групи</a></li>
							</ul>
						</div>
						<div class="third-col">
							<b class="footer__title footer__title--products">Інтер’єна реклама</b>
							<ul class="list footer__list">
								<li><a href="" class="link footer__link">Неонові вивіски</a></li>
								<li><a href="" class="link footer__link">Об’ємні логотипи</a></li>
								<li><a href="" class="link footer__link">Фігури та елементи з пластику</a></li>
								<li><a href="" class="link footer__link">Оформлення зони ресепшн</a></li>
								<li><a href="" class="link footer__link">Інтер’єні вивіски</a></li>
							</ul>
						</div>
						<div class="fourth-col">
							<b class="footer__title footer__title--contacts">Контакти</b>
							<address>
								<ul class="list footer__contacts-list">
									<li>
										<a href="tel:<?php the_field('main_phone_number_call', 2); ?>" class="link footer__link footer__contacts-link">
											<svg class="icon icon--footer phone">
												<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#phone"></use>
											</svg>
											<span>
<?php the_field('main_phone_number_show', 2); ?></span>
										</a>
									</li>
									<li>
										<a href="mailto:seitpromotion@ukr.net" class="link footer__link footer__contacts-link" lang="en">
											<svg class="icon icon--footer mail">
												<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#mail"></use>
											</svg>
											<span><?php the_field('email', 2); ?></span>
										</a>
									</li>
									<li>
										<a
											href="https://goo.gl/maps/7Vk1duzJPA59DLT69"
											target="_blank"
											rel="noopener noreferrer"
											class="link footer__link footer__contacts-link"
										>
											<svg class="icon icon--footer location">
												<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#location"></use>
											</svg>
											<span><?php the_field('address', 2); ?></span>
										</a>
									</li>
								</ul>
							</address>
						</div>
						<div class="fifth-col">
							<b class="footer__title footer__title--contacts">Соціальні мережі</b>
							<ul class="list footer__contacts-list">
								<li>
									<a
										class="link footer__link footer__contacts-link"
										href="<?php the_field('instagram', 2); ?>"
										target="_blank"
										rel="noreferrer noopener"
										aria-label="Instagram"
									>
										<svg class="icon icon--footer">
											<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#instagram"></use>
										</svg>
										<span lang="en">Seit Promotion</span>
									</a>
								</li>
								<li>
									<a
										class="link footer__link footer__contacts-link"
										href="<?php the_field('facebook', 2); ?>"
										target="_blank"
										rel="noreferrer noopener"
										aria-label="Facebook"
									>
										<svg class="icon icon--footer">
											<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#facebook"></use>
										</svg>
										<span lang="en">Seit Promotion</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer__lower-part">
						<div class="copyright">
							&copy; 2016 -
							<span class="copyright__year">2023</span>
							Всі права захищено Seit Promotion
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div class="backdrop is-hidden" data-modal>
			<div class="modal">
				<p class="modal__title">Надішліть Вашу заявку, щоб ми могли зв’язатись з Вами</p>
				<form name="callback" class="modal__callback" autocomplete="off">
					<div class="modal__field modal__field--usual">
						<input type="text" name="name" id="name" class="modal__input" />
						<label for="name" class="modal__label">Ім’я</label>
						<svg class="person modal__icon">
							<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#person"></use>
						</svg>
					</div>
					<div class="modal__field modal__field--usual">
						<input type="text" name="phone" id="phone" class="modal__input" />
						<label for="phone" class="modal__label">Телефон</label>
						<svg class="phone modal__icon">
							<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#phone"></use>
						</svg>
					</div>
					<div class="modal__field modal__field--usual">
						<input type="email" name="name" id="email" class="modal__input" />
						<label for="email" class="modal__label">Email</label>
						<svg class="mail modal__icon">
							<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#mail"></use>
						</svg>
					</div>
					<div class="modal__field modal__field--comment">
						<textarea
							name="comment"
							id="comment"
							class="modal__input modal__input--comment"
							placeholder="Введіть текст"
						></textarea>
						<label for="email" class="modal__label">Повідомлення</label>
					</div>					
					<button type="submit" class="btn">Надіслати</button>
				</form>
				<button type="button" class="modal__close" data-modal-close>
					<svg class="menu__icon-close">
									<use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons.svg#iconClose"></use>
					</svg>
				</button>
			</div>
		</div>
		<?php
			wp_footer();
		?>
	</body>
</html>
