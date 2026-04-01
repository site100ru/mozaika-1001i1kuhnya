<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>


<div class="woocommerce-product-details__short-description">
	<div class="row justify-content-center">
		<div class="col">
			<?php
				echo $short_description;
				
				$regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
				$sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
				
				/* Если есть акционная цена */
				if ( $sale_price != '' ) { ?>
					<p><strong>Стоимость:</strong> <span class="old-price"><del>от ₽<?php echo number_format( $regular_price, 0, ',', ' ' ); ?></del></span> <span class="price">от ₽<?php echo number_format( $sale_price, 0, ',', ' ' ); ?></span></p>
					<p>Хотите рассчитаем точную стоимость этого варианта по Вашим размерам? Это бесплатно и ни к чему Вас не обязывает!</p>
					<button class="btn btn-lg btn-corporation-orange mt-2 px-3 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal2">Рассчитать точную стоимость</button>
				<?php }
				
				// Если нет акционной цены
				elseif ( $regular_price != null AND $sale_price == '' ) { ?>
					<p><strong>Стоимость:</strong> <span class="price">от ₽<?php echo number_format( $regular_price, 0, ',', ' ' ); ?></span></p>
					<p>Хотите рассчитаем точную стоимость этого варианта по Вашим размерам? Это бесплатно и ни к чему Вас не обязывает!</p>
					<button class="btn btn-lg btn-corporation-orange mt-2 px-3 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal2">Рассчитать точную стоимость</button>
				<?php }
				
				// Если нет никакой цены
				else { ?>
					<button class="btn btn-lg btn-corporation-orange mt-3 px-5 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal2">Узнать стоимость</button>
				<?php }
			?>
		</div>
	</div>
</div>