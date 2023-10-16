<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="work">
	<div class="container">
		<h1 class="title">
			<?php the_title(); ?>
		</h1>
		<div class="work-top">
			<div class="left">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
				<?php if (get_field('video')) { ?> 
				<div class="play video-toggle" data-src="<?php the_field('video'); ?>"></div>
				<?php } ?>
			</div>
			<div class="right">
				<b class="title"><?php the_field('prim'); ?></b>
				<?php if(!get_field('hide_line')) { ?>
				<div class="line-wrap">
					<div class="top">
						<p>Осталось собрать</p>
						<b><span class="need-summ">0</span> руб.</b>
						<div class="now-summ">
							<?php the_field('sobrano_deneg'); ?>
						</div>
						<div class="all-summ">
							<?php the_field('neobhodimo'); ?>
						</div>
					</div>
					<div class="line">
						<div class="line-inline"></div>
					</div>
				</div>
				<?php } ?>
				<div class="place-item">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
							<path d="M25.5 28.6875C23.9239 28.6875 22.3833 28.2201 21.0728 27.3445C19.7623 26.4689 18.741 25.2244 18.1378 23.7683C17.5347 22.3122 17.3769 20.7099 17.6844 19.1641C17.9918 17.6183 18.7508 16.1984 19.8652 15.084C20.9797 13.9695 22.3996 13.2106 23.9454 12.9031C25.4912 12.5956 27.0934 12.7535 28.5495 13.3566C30.0056 13.9597 31.2502 14.9811 32.1258 16.2916C33.0014 17.602 33.4688 19.1427 33.4688 20.7188C33.4662 22.8314 32.6259 24.8568 31.132 26.3507C29.6381 27.8446 27.6127 28.685 25.5 28.6875ZM25.5 15.9375C24.5544 15.9375 23.63 16.2179 22.8437 16.7433C22.0574 17.2687 21.4446 18.0154 21.0827 18.889C20.7208 19.7627 20.6261 20.7241 20.8106 21.6515C20.9951 22.579 21.4505 23.4309 22.1191 24.0996C22.7878 24.7683 23.6398 25.2236 24.5672 25.4081C25.4947 25.5926 26.4561 25.4979 27.3297 25.1361C28.2034 24.7742 28.9501 24.1613 29.4755 23.3751C30.0008 22.5888 30.2813 21.6644 30.2813 20.7188C30.28 19.4511 29.7758 18.2357 28.8795 17.3393C27.9831 16.4429 26.7677 15.9388 25.5 15.9375Z" fill="#1F3040"/>
							<path d="M25.5 47.8125L12.0551 31.9563C11.8683 31.7182 11.6834 31.4786 11.5005 31.2375C9.20389 28.2122 7.9632 24.517 7.96877 20.7188C7.96877 16.0692 9.81581 11.61 13.1036 8.32228C16.3913 5.03454 20.8504 3.1875 25.5 3.1875C30.1496 3.1875 34.6087 5.03454 37.8965 8.32228C41.1842 11.61 43.0313 16.0692 43.0313 20.7188C43.0368 24.5153 41.7967 28.2088 39.5011 31.2327L39.4995 31.2375C39.4995 31.2375 39.0214 31.8654 38.9497 31.9499L25.5 47.8125ZM14.0441 29.317C14.0473 29.317 14.4171 29.8079 14.5016 29.9131L25.5 42.8846L36.5128 29.8956C36.583 29.8079 36.9559 29.3138 36.9575 29.3123C38.8336 26.8405 39.8475 23.8218 39.8438 20.7188C39.8438 16.9146 38.3326 13.2662 35.6426 10.5762C32.9526 7.88621 29.3042 6.375 25.5 6.375C21.6958 6.375 18.0474 7.88621 15.3575 10.5762C12.6675 13.2662 11.1563 16.9146 11.1563 20.7188C11.1529 23.8238 12.1664 26.8442 14.0441 29.317Z" fill="#1F3040"/>
						</svg>
					</div>
					<p><?php the_field('mestopolozhenie_hrama'); ?></p>
				</div>
				<div class="place-item">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="51" height="59" viewBox="0 0 51 59" fill="none">
							<path d="M37.104 25.8405C36.5538 26.3857 35.8096 26.6918 35.034 26.6918C34.2584 26.6918 33.5142 26.3857 32.964 25.8405L30.533 23.416C29.9858 22.8673 29.6786 22.1249 29.6786 21.351C29.6786 20.5771 29.9858 19.8347 30.533 19.2861L36.0354 13.7956C36.0463 13.7851 36.0544 13.7722 36.059 13.7578C36.0637 13.7435 36.0647 13.7282 36.0619 13.7134C36.0592 13.6986 36.0529 13.6847 36.0435 13.6729C36.034 13.6611 36.0218 13.6519 36.0079 13.6459C32.4562 12.1275 27.8514 12.9013 24.9273 15.7967C22.1294 18.5661 21.9702 22.7316 22.9949 26.367C23.1405 26.8837 23.1402 27.4305 22.9939 27.9471C22.8476 28.4636 22.5611 28.9298 22.166 29.2943L6.92333 43.1779C6.47361 43.5755 6.1102 44.0608 5.85544 44.6037C5.60068 45.1466 5.45996 45.7357 5.44193 46.3349C5.42389 46.9341 5.52893 47.5306 5.75057 48.0877C5.97222 48.6449 6.30579 49.151 6.73078 49.5749C7.15577 49.9987 7.6632 50.3314 8.22186 50.5525C8.78053 50.7735 9.37863 50.8783 9.97939 50.8603C10.5801 50.8423 11.1709 50.702 11.7152 50.4479C12.2596 50.1938 12.7461 49.8313 13.1448 49.3828L27.2219 34.1442C27.5827 33.7568 28.0423 33.4745 28.5516 33.3278C29.061 33.181 29.6007 33.1752 30.1131 33.3111C33.7307 34.2774 37.8479 34.0958 40.6091 31.3775C43.5817 28.4575 44.2231 23.2965 42.7821 20.3427C42.7756 20.3298 42.7661 20.3186 42.7544 20.3101C42.7428 20.3015 42.7292 20.2959 42.7149 20.2935C42.7006 20.2912 42.686 20.2923 42.6722 20.2968C42.6584 20.3012 42.6459 20.3088 42.6357 20.319L37.104 25.8405Z" stroke="#1F3040" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
							<path d="M9.85998 48.8277C11.1744 48.8277 12.24 47.765 12.24 46.4541C12.24 45.1432 11.1744 44.0806 9.85998 44.0806C8.54554 44.0806 7.47998 45.1432 7.47998 46.4541C7.47998 47.765 8.54554 48.8277 9.85998 48.8277Z" fill="#1F3040"/>
						</svg>
					</div>
					<p><?php the_field('osnovanie_hrama'); ?></p>
				</div>
				<div class="donate-wrap">
					<div class="button donate">
						Поддержать проект
					</div>
					
					<div class="share">
						<span class="catalog-item__share dif aic transition link" href="#">
							<script src="https://yastatic.net/share2/share.js"></script>
							<div class="ya-share2" data-curtain 					
							data-shape="round" 	
							data-url="<?php the_permalink(); ?>"
							data-title="<?php the_title(); ?>"
							data-image="<?php the_post_thumbnail_url(); ?>"								
							data-limit="0" 					
							data-more-button-type="short" data-services="telegram,twitter,viber,whatsapp"></div>						
							
						</span>
					</div>
				
				</div>
			</div>
		</div>
		<div class="work-nav">
			<div class="work-nav-link active">О храме</div>
			<div class="work-nav-link">Что необходимо сделать</div>
			<div class="work-nav-link">Что уже сделано</div>
		</div>
		<div class="work-wrap">
			<div class="work-main-wrapper">
				<div class="arr arr-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
						<mask id="mask0_90_642" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
						<rect width="48" height="48" fill="#D9D9D9"/>
						</mask>
						<g mask="url(#mask0_90_642)">
						<path d="M28.0298 35.3079L16.6914 23.9695L28.0298 12.6118L29.6606 14.2425L19.9529 23.9695L29.6606 33.6771L28.0298 35.3079Z" fill="#676766"/>
						</g>
					</svg>
				</div>
				<div class="work-wrap-slider swiper">
					<div class="work-slider swiper-wrapper">
							<?php
								$images = get_field('fotografii_hrama');
								$size = 'full';
								if( $images ) :
								foreach( $images as $image_id ) :
							?>
							<a href="<?php echo $image_id; ?>" class="work-slider-item swiper-slide">
								<img src="<?php echo $image_id; ?>" alt="img">
							</a>
							<?php endforeach; endif; ?>
					</div>
				</div>
				<div class="arr arr-next">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
							<mask id="mask0_90_645" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
							<rect width="48" height="48" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#mask0_90_645)">
							<path d="M18.7694 35.3079L17.1387 33.6771L26.8464 23.9695L17.1387 14.2425L18.7694 12.6118L30.1078 23.9695L18.7694 35.3079Z" fill="#676766"/>
							</g>
						</svg>
				</div>
			</div>
			<div class="work-wrap-item active">
				<div class="content">
					<?php the_field('kontent'); ?>
				</div>
			</div>
			<div class="work-wrap-item">
				<div class="content">
					<?php the_field('kontent_2'); ?>
				</div>
			</div>
			<div class="work-wrap-item">
				<div class="content">
					<?php the_field('kontent_3'); ?>
				</div>
			</div>
		</div>
		<div class="button main-btn donate">
			Поддержать проект
		</div>
	</div>
</section>

<section class="projects another-work">
  <div class="container">
    <div class="projects-title">
      <div class="projects-title-wrap">
        <div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87" fill="none">
						<path d="M26.2812 21.75C25.5602 21.75 24.8687 22.0364 24.3588 22.5463C23.8489 23.0562 23.5625 23.7477 23.5625 24.4688V51.6562C23.5625 52.3773 23.8489 53.0688 24.3588 53.5787C24.8687 54.0886 25.5602 54.375 26.2812 54.375C27.0023 54.375 27.6938 54.0886 28.2037 53.5787C28.7136 53.0688 29 52.3773 29 51.6562V24.4688C29 23.7477 28.7136 23.0562 28.2037 22.5463C27.6938 22.0364 27.0023 21.75 26.2812 21.75ZM43.5 21.75C42.7789 21.75 42.0874 22.0364 41.5776 22.5463C41.0677 23.0562 40.7812 23.7477 40.7812 24.4688V40.7812C40.7812 41.5023 41.0677 42.1938 41.5776 42.7037C42.0874 43.2136 42.7789 43.5 43.5 43.5C44.2211 43.5 44.9126 43.2136 45.4224 42.7037C45.9323 42.1938 46.2188 41.5023 46.2188 40.7812V24.4688C46.2188 23.7477 45.9323 23.0562 45.4224 22.5463C44.9126 22.0364 44.2211 21.75 43.5 21.75ZM58 24.4688C58 23.7477 58.2864 23.0562 58.7963 22.5463C59.3062 22.0364 59.9977 21.75 60.7188 21.75C61.4398 21.75 62.1313 22.0364 62.6412 22.5463C63.1511 23.0562 63.4375 23.7477 63.4375 24.4688V58.9062C63.4375 59.6273 63.1511 60.3188 62.6412 60.8287C62.1313 61.3386 61.4398 61.625 60.7188 61.625C59.9977 61.625 59.3062 61.3386 58.7963 60.8287C58.2864 60.3188 58 59.6273 58 58.9062V24.4688Z" fill="#1F3040"/>
						<path d="M13.5938 7.25H73.4062C76.908 7.25 79.75 10.092 79.75 13.5938V73.4062C79.75 75.0887 79.0816 76.7023 77.892 77.892C76.7023 79.0816 75.0887 79.75 73.4062 79.75H13.5938C11.9113 79.75 10.2977 79.0816 9.10804 77.892C7.91836 76.7023 7.25 75.0887 7.25 73.4062V13.5938C7.25 10.092 10.092 7.25 13.5938 7.25ZM12.6875 13.5938V73.4062C12.6875 73.9065 13.0935 74.3125 13.5938 74.3125H73.4062C73.6466 74.3125 73.8771 74.217 74.0471 74.0471C74.217 73.8771 74.3125 73.6466 74.3125 73.4062V13.5938C74.3125 13.3534 74.217 13.1229 74.0471 12.9529C73.8771 12.783 73.6466 12.6875 73.4062 12.6875H13.5938C13.3534 12.6875 13.1229 12.783 12.9529 12.9529C12.783 13.1229 12.6875 13.3534 12.6875 13.5938Z" fill="#1F3040"/>
					</svg>
        </div>
        <h2 class="title">
					другие проекты
        </h2>
      </div>
      <a href="<?php the_permalink(24) ?>" class="all-link">
        <p>Смотреть все проекты</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
          <path d="M45 24.9999L46.18 26.1799L47.3567 24.9999L46.18 23.8199L45 24.9999ZM43.82 23.8199L30.4867 37.1532L32.8467 39.5132L46.18 26.1799L43.82 23.8199ZM46.18 23.8199L32.8467 10.4866L30.4867 12.8466L43.82 26.1799L46.18 23.8199ZM45 23.3332L3.33333 23.3332V26.6666L45 26.6666V23.3332Z" fill="#7289A0"/>
        </svg>
      </a>
    </div>
    <div class="project-slider swiper">
      <div class="projects-wrap swiper-wrapper">
				<?php 
						$my_posts = get_posts(array(
							'post_type'      => 'in_work',
							'numberposts' => 4,
							'exclude'     => $post->ID
						));
						foreach ($my_posts as $post) :
						setup_postdata($post);
					?>

        <a href="<?php the_permalink(  ) ?>" class="projects-wrap-item swiper-slide">
          <img src="<?php the_post_thumbnail_url('large') ?>" alt="thumb">
					<b><?php the_title(); ?></b>
					<div class="place">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
								<path d="M16.5 18.5625C15.4802 18.5625 14.4833 18.2601 13.6353 17.6935C12.7874 17.1269 12.1265 16.3216 11.7362 15.3795C11.346 14.4373 11.2439 13.4005 11.4428 12.4003C11.6418 11.4001 12.1329 10.4813 12.854 9.76023C13.5751 9.03912 14.4939 8.54803 15.4941 8.34908C16.4943 8.15012 17.531 8.25223 18.4732 8.6425C19.4154 9.03276 20.2207 9.69365 20.7873 10.5416C21.3538 11.3895 21.6563 12.3864 21.6563 13.4063C21.6546 14.7733 21.1108 16.0838 20.1442 17.0505C19.1776 18.0171 17.867 18.5609 16.5 18.5625ZM16.5 10.3125C15.8881 10.3125 15.29 10.4939 14.7812 10.8339C14.2724 11.1738 13.8759 11.657 13.6418 12.2223C13.4076 12.7876 13.3463 13.4097 13.4657 14.0098C13.5851 14.6099 13.8797 15.1612 14.3124 15.5939C14.7451 16.0265 15.2963 16.3212 15.8964 16.4406C16.4966 16.5599 17.1186 16.4987 17.6839 16.2645C18.2492 16.0303 18.7324 15.6338 19.0724 15.125C19.4123 14.6163 19.5938 14.0181 19.5938 13.4063C19.5929 12.586 19.2667 11.7996 18.6867 11.2195C18.1067 10.6395 17.3203 10.3133 16.5 10.3125Z" fill="#B1B6BB"/>
								<path d="M16.5 30.9375L7.80039 20.6776C7.67951 20.5235 7.55988 20.3685 7.44151 20.2125C5.95546 18.255 5.15266 15.8639 5.15626 13.4062C5.15626 10.3977 6.3514 7.51237 8.47877 5.38501C10.6061 3.25764 13.4915 2.0625 16.5 2.0625C19.5086 2.0625 22.3939 3.25764 24.5213 5.38501C26.6486 7.51237 27.8438 10.3977 27.8438 13.4062C27.8474 15.8628 27.0449 18.2528 25.5595 20.2094L25.5585 20.2125C25.5585 20.2125 25.2491 20.6188 25.2027 20.6735L16.5 30.9375ZM9.08739 18.9698C9.08945 18.9698 9.3287 19.2875 9.38336 19.3555L16.5 27.7489L23.6259 19.3442C23.6713 19.2875 23.9126 18.9678 23.9137 18.9668C25.1276 17.3674 25.7836 15.4141 25.7813 13.4062C25.7813 10.9447 24.8034 8.58399 23.0628 6.84341C21.3223 5.10284 18.9616 4.125 16.5 4.125C14.0385 4.125 11.6777 5.10284 9.93718 6.84341C8.19661 8.58399 7.21876 10.9447 7.21876 13.4062C7.2166 15.4154 7.87235 17.3698 9.08739 18.9698Z" fill="#B1B6BB"/>
							</svg>
						</div>
						<?php the_field('mestopolozhenie_hrama') ?>
					</div >
        </a>
        <?php endforeach; ?>
        
      </div>
      <div class="project-pagination swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"></div>
    </div>
  </div>
</section>


<?php endwhile; ?>

<?php get_footer();