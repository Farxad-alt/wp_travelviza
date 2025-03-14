<?php
/*
Template Name:  шаблон страницы Контакты
Template Post Type: page
*/
?>

<?php
get_header(); ?>
<?php get_template_part('/inc/componens/orders'); ?>
<?php get_template_part('/inc/componens/direction'); ?>


<main id="primary" class="site-main position-relative">
	<section class="contact container d-flex ">
		<div class="row">
		<div class="col d-flex flex-wrap align-items-baseline ">
			<div class="col-lg-12 col-xl-9 ">
				<h2 class="card-news__title title"><?php the_title(); ?></h2>
				<div class="shengen-visa_block ">
					<div class="row align-items-baseline">
						<?php $contact_title = carbon_get_post_meta(get_the_ID(), 'contact-title');
						if ($contact_title) : ?>
							<h3 class="contact-title__block"><?= $contact_title; ?></h3>
						<?php endif; ?>
						<div class="row">
							<div class="contact-block d-lg-flex align-items-md-center">
								<div class="contact-block__address col-lg-7">
									<a href="#">
										<div class="position-map d-flex text-start text-black align-items-center contact-description">
											<svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 42 30" fill="none">
												<path d="M15 0C9.72861 0 5.33203 4.24629 5.33203 9.66797C5.33203 11.7306 5.95184 13.5698 7.14135 15.2933L14.2601 26.4015C14.6055 26.9415 15.3952 26.9405 15.7399 26.4015L22.8895 15.2555C24.0534 13.6102 24.668 11.6781 24.668 9.66797C24.668 4.33705 20.3309 0 15 0ZM15 14.0625C12.577 14.0625 10.6055 12.091 10.6055 9.66797C10.6055 7.24494 12.577 5.27344 15 5.27344C17.423 5.27344 19.3945 7.24494 19.3945 9.66797C19.3945 12.091 17.423 14.0625 15 14.0625Z" fill="#F93A3A" />
												<path d="M21.8709 20.197L17.4453 27.1161C16.2997 28.9022 13.6939 28.8963 12.5538 27.1178L8.12098 20.1988C4.22074 21.1005 1.81641 22.7525 1.81641 24.7265C1.81641 28.1521 8.60906 30 15 30C21.3909 30 28.1836 28.1521 28.1836 24.7265C28.1836 22.7511 25.7759 21.0982 21.8709 20.197Z" fill="#FFED4B" />
											</svg> <?= carbon_get_post_meta(get_the_ID(), 'map-contact'); ?>
										</div>
									</a>

									<div class="contact-block__address-email">
										<svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
											<path d="M30.8334 6.16675H6.16671C4.47087 6.16675 3.09879 7.55425 3.09879 9.25008L3.08337 27.7501C3.08337 29.4459 4.47087 30.8334 6.16671 30.8334H30.8334C32.5292 30.8334 33.9167 29.4459 33.9167 27.7501V9.25008C33.9167 7.55425 32.5292 6.16675 30.8334 6.16675ZM30.8334 12.3334L18.5 20.0417L6.16671 12.3334V9.25008L18.5 16.9584L30.8334 9.25008V12.3334Z" fill="#5552E1" />
										</svg>
										<small>email:</small>
										<a href="#">
											<?= carbon_get_post_meta(15, 'email-contact'); ?>
										</a>

									</div>
									<div class="phone text-start d-flex align-items-center phohe-nomber">
										<div class=" contact-whatsapp icon-phone-call-1">
										</div>
										<div class="phohe-nomber__phone d-lg-flex">
											<?php $phone_one = carbon_get_theme_option('phone_number_one');
											if ($phone_one) : ?>
												<p class="phone"><a href="" class="text-black"><?php echo $phone_one; ?></a>
												</p>
											<?php endif; ?>
											<?php $phone_ty = carbon_get_theme_option('phone_number_ty');
											if ($phone_ty) : ?>
												<p class="phone1 contact-block__address-phone1"> <a href="#" class="text-black"><?php echo $phone_ty; ?></a></p>
											<?php endif; ?>
										</div>
									</div>
									<p class="ip-contact mt-4">
										<?= carbon_get_post_meta(get_the_ID(), 'ip-contact'); ?>
									</p>
								</div>
								<div class="contact-block__image d-flex  col-lg-5">
									<?php $img_src = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'photo-contact'), 'full'); ?>
									<img src="<?php echo $img_src; ?>" alt="photo" />
								</div>
							</div>
						</div>
						<div class="contacts__start ">
							<div class="contacts__map" id="map">
								<script async defer>
									(g => {
										var h, a, k, p = "The Google Maps JavaScript API",
											c = "google",
											l = "importLibrary",
											q = "__ib__",
											m = document,
											b = window;
										b = b[c] || (b[c] = {});
										var d = b.maps || (b.maps = {}),
											r = new Set,
											e = new URLSearchParams,
											u = () => h || (h = new Promise(async (f, n) => {
												await (a = m.createElement("script"));
												e.set("libraries", [...r] + "");
												for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
												e.set("callback", c + ".maps." + q);
												a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
												d[q] = f;
												a.onerror = () => h = n(Error(p + " could not load."));
												a.nonce = m.querySelector("script[nonce]")?.nonce || "";
												m.head.append(a)
											}));
										d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
									})
									({
										key: "AIzaSyDzl8_rZby1GN-B0Q7YNM_096Mo6kToAu0",
										v: "beta"
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
	<div class="contact-bg__left position-absolute ">
		<img src="/wp-content/uploads/2023/12/bg_left-reviws.png" alt="">
	</div>

</main><!-- #main -->

<?php get_template_part('/inc/componens/form'); ?>


<?php get_footer(); ?>