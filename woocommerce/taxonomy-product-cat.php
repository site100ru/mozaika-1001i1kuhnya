<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Определяем категорию
$product_cat = get_queried_object();

/* Выбераем шаблон для категории
if ( ( $product_cat->name == 'Шкафы-купе' ) OR ( $product_cat->name == 'Шкафы распашные' ) ) {
	wc_get_template( 'archive-product-shkafy-cupe.php' );
	
} else if ( ( $product_cat->name == 'Кухни' ) or ( $product_cat->name == 'Новинки' ) or ( $product_cat->name == 'Кухни из эмали' ) or ( $product_cat->name == 'Кухни из пластика' ) or ( $product_cat->name == 'Кухни AGT' ) or ( $product_cat->name == 'Кухни из массива' ) ) {
	wc_get_template( 'archive-kitchens.php' );
} else if (  $product_cat->name == 'Обеденные группы' ) {
	wc_get_template( 'archive-lunch-group.php' );
} else {
	wc_get_template( 'archive-product.php' );
} */


// Выбераем шаблон для категории */
// Кухни
if ( $product_cat->name == 'Кухни' ) {
	wc_get_template( 'archive-kitchens.php' );

// Шкафы-купе
} else if ( $product_cat->name == 'Шкафы-купе' ) {
	wc_get_template( 'archive-sliding-wardrobes.php' );

// Шкафы распашные
} else if ( $product_cat->name == 'Шкафы распашные' ) {
	wc_get_template( 'archive-cabinets.php' );

// Гардеробные
} else if ( $product_cat->name == 'Гардеробные' ) {
	wc_get_template( 'archive-checkrooms.php' );

// Обеденные группы
} else if (  $product_cat->name == 'Обеденные группы' ) {
	wc_get_template( 'archive-lunch-groups.php' );

// Кухонные уголки
} else if (  $product_cat->name == 'Кухонные уголки' ) {
	wc_get_template( 'archive-kitchen-corners.php' );

// Гостиные
} else if (  $product_cat->name == 'Гостиные' ) {
	wc_get_template( 'archive-living-rooms.php' );
	
// Спальни
} else if (  $product_cat->name == 'Спальни' ) {
	wc_get_template( 'archive-bedrooms.php' );
	
// Прихожие
} else if (  $product_cat->name == 'Прихожие' ) {
	wc_get_template( 'archive-hallways.php' );
	
// Детские
} else if (  $product_cat->name == 'Детские' ) {
	wc_get_template( 'archive-childrens.php' );

// Другие или новые категории
} else {
	wc_get_template( 'archive-product.php' );
}