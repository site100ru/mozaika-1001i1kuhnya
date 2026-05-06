<?php
	
	// Bootstrap 5 wp_nav_menu walker
	class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {
		private $current_item;
		private $dropdown_menu_alignment_values = [
			'dropdown-menu-start',
			'dropdown-menu-end',
			'dropdown-menu-sm-start',
			'dropdown-menu-sm-end',
			'dropdown-menu-md-start',
			'dropdown-menu-md-end',
			'dropdown-menu-lg-start',
			'dropdown-menu-lg-end',
			'dropdown-menu-xl-start',
			'dropdown-menu-xl-end',
			'dropdown-menu-xxl-start',
			'dropdown-menu-xxl-end'
		];

		function start_lvl(&$output, $depth = 0, $args = null) {
			$dropdown_menu_class[] = '';
			foreach($this->current_item->classes as $class) {
				if(in_array($class, $this->dropdown_menu_alignment_values)) {
					$dropdown_menu_class[] = $class;
				}
			}
			$indent = str_repeat("\t", $depth);
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
		}

		function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
			$this->current_item = $item;

			$indent = ($depth) ? str_repeat("\t", $depth) : '';

			$li_attributes = '';
			$class_names = $value = '';

			$classes = empty($item->classes) ? array() : (array) $item->classes;

			$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
			$classes[] = 'nav-item';
			$classes[] = 'nav-item-' . $item->ID;
			if ($depth && $args->walker->has_children) {
				$classes[] = 'dropdown-menu dropdown-menu-end';
			}

			$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
			$class_names = ' class="' . esc_attr($class_names) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
			$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

			/*
			if ( $output != '' ) {
				// Подключаем точки в меню
				$output .= '
					<li class="nav-item d-none d-xl-inline">
						<span class="nav-link px-0"><img src="'.get_stylesheet_directory_uri().'/img/ico/menu-point.webp"></span>
					</li>
				';
			} */
			
			$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

			$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

			$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
			$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
			$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}
	}

	// Register a new menu
	//register_nav_menu('navbarSupportedContent', 'Main menu');


	/* Register a new menuы */
	add_action( 'after_setup_theme', function() {
		register_nav_menus( [
			'navbarSupportedContent' => 'Main menu',
			//'mobail-header-collapse' => 'Mobail header collapse',
			//'sliding-header-collapse' => 'Sliding header collapse',
			//'contacts-desktop-menu' => 'Contacts desktop menu',
			//'footer-right' => 'footer-right',
			//'footer-left' => 'footer-left',
			//'menu-main-menu-2' => 'Menu main menu 2',
			//'menu-main-menu-3' => 'Menu main menu 3',
			//'contacts-menu-2' => 'Contacts menu 2',
			//'navbarSupportedContent2' => 'navbarSupportedContent2'

		] );
	} );
	
	
	/* WooCommerce support */
	add_action( 'after_setup_theme', 'furniture_catalog_add_woocommerce_support' );
	function furniture_catalog_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	
	
	/* Изменяем размер миниатюр WooCommerce */
	add_filter('woocommerce_get_image_size_thumbnail','add_thumbnail_size',1,10);
	function add_thumbnail_size($size){
		$size['width'] = 600;
		//$size['height'] = 450;
		$size['crop']   = 1; //0 - не обрезаем, 1 - обрезка
		return $size;
	}
	
	/* Отключаем ненужные опции вывода настраницу */
	/* Отключаем название товара
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	
	
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);
	
	
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 ); */
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	
	
	// Цена
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
	
	// Кнопка add to cart
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


	
	/* Изменям значек валюты */
	add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
	function change_existing_currency_symbol( $currency_symbol, $currency ) {
		 switch( $currency ) {
			  case 'RUB': $currency_symbol = 'руб'; break;
		 }
		 return $currency_symbol;
	}
	
	
	// Register taxonomy
	add_action( 'init', 'create_taxonomy' );
	function create_taxonomy() {
		
		// Таксономия - портфолио
		register_taxonomy( 'portfolio-cat', [ 'portfolio' ], [
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => [
				'name'              => 'Наши работы',
				'singular_name'     => 'Категория портфолио',
				'search_items'      => 'Искать категорию портфолио',
				'all_items'         => 'Все категории портфолио',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Edit Genre',
				'update_item'       => 'Update Genre',
				'add_new_item'      => 'Add New Genre',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категории портфолио',
				'back_to_items'     => '← Вернуться к категориям портфолио',
			],
			'description'           => '', // описание таксономии
			'public'                => true,
			// 'publicly_queryable'    => null, // равен аргументу public
			// 'show_in_nav_menus'     => true, // равен аргументу public
			// 'show_ui'               => true, // равен аргументу public
			// 'show_in_menu'          => true, // равен аргументу show_ui
			// 'show_tagcloud'         => true, // равен аргументу show_ui
			// 'show_in_quick_edit'    => null, // равен аргументу show_ui
			'hierarchical'          => true,

			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
			'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			// '_builtin'              => false,
			//'update_count_callback' => '_update_post_term_count',
		] );
	}
	
	
	// Создаем запись Портфолио
	add_action( 'init', 'register_post_types' );
	function register_post_types(){
		
		add_theme_support ( 'post-thumbnails' );
		
		// Тип записи - наши работы (портфолио)
		register_post_type( 'portfolio', [
			'label'  => null,
			'labels' => [
				'name'               => 'Наши работы', // основное название для типа записи
				'singular_name'      => 'Наши работы', // название для одной записи этого типа
				'add_new'            => 'Добавить нашу работу', // для добавления новой записи
				'add_new_item'       => 'Добавление нашей работы', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование нашей работы', // для редактирования типа записи
				'new_item'           => 'Новая наша работа', // текст новой записи
				'view_item'          => 'Смотреть нашу работу', // для просмотра записи этого типа.
				'search_items'       => 'Искать нашу работу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Наши работы', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','trackbacks','comments', 'thumbnail', 'custom-fields','revisions','page-attributes','post-formats', 'excerpt'
			'taxonomies'          => [ 'portfolio-cat' ],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}
	
	
	// Подключаем функцию активации мета блока (my_extra_fields)
	add_action('add_meta_boxes', 'my_extra_fields', 1);

	function my_extra_fields() {
		add_meta_box( 'extra_fields', 'Галерея наших работ', 'extra_fields_box_func', 'portfolio', 'side', 'high' );
	}

	/* Код блока галереи */
	function extra_fields_box_func( $post ){
		for ($i=1; $i<=9; $i++) { ?>
<label>URL&#160;изображения <?php echo $i; ?>:</label>
<input type="text" name="extra[img-<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, '_img-'.$i, 1); ?>"
  style="width: 100%;">
<div style="clear: both;"></div>
<? } ?>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?php
	}
	
	// включаем обновление полей при сохранении
	add_action( 'save_post', 'my_extra_fields_update', 0 );

	## Сохраняем данные, при сохранении поста
	function my_extra_fields_update( $post_id ){
		// базовая проверка
		if (
			   empty( $_POST['extra'] )
			|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
			|| wp_is_post_autosave( $post_id )
			|| wp_is_post_revision( $post_id )
		)
			return false;

		// Все ОК! Теперь, нужно сохранить/удалить данные
		//$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
		foreach( $_POST['extra'] as $key => $value ){
			if( empty($value) ){
				delete_post_meta( $post_id, '_'.$key ); // удаляем поле если значение пустое
				continue;
			}
			update_post_meta( $post_id, '_'.$key, $value ); // add_post_meta() работает автоматически
		}
		return $post_id;
	}
	
	
	// Wijet область в сайдбаре
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Область в сайдбаре', //название виджета в админ-панели
				'id'            => 'wsidebar-1', //идентификатор виджета
				'description'   => 'виден во всех разделах сайта', //описание виджета в админ-панели
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', //открывающий тег виджета с динамичным идентификатором
				'after_widget'  => '<div class="clear"></div></aside>', //закрывающий тег виджета с очищающим блоком
				'before_title'  => '<span class="widget-title">', //открывающий тег заголовка виджета
				'after_title'   => '</span>',//закрывающий тег заголовка виджета
			)
		);
	}
	
	
	// Меняем количество отображения подобных товаров
	add_filter( 'woocommerce_output_related_products_args', 'truemisha_rel_products_args', 25 );
	function truemisha_rel_products_args( $args ) {
		$args[ 'posts_per_page' ] = 6; // сколько штук отображать
		//$args[ 'columns' ] = 4; // сколько штук в одном ряду
		return $args;
	}
	
	
	// Убрираем шильдик в single_poduct "Распродажа"
	add_filter( 'woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3 );
	function my_custom_sale_flash($text, $post, $_product) {
		return '<span class="onsale d-none">Распродажа!</span>';
	}
	
	
	/**
	 * Change several of the breadcrumb defaults
	 */
	add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
	function jk_woocommerce_breadcrumbs() {
		return array(
				'delimiter'   => ' &#47; ',
				'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="https://1001i1kuhnya.ru"><img src="'.get_stylesheet_directory_uri().'/images/icons/home-breadcrumbs.png"></a> / ',
				'wrap_after'  => '</nav>',
				'before'      => '',
				'after'       => '',
				'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
			);
	}
	
	/**/
	// Убираем ссылку на главную страницу сайта в хлебных крошках, чтобы потом подставить вместо этого ссылку с изображением
	add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
	function wcc_change_breadcrumb_home_text( $defaults ) {
		// Change the breadcrumb home text from 'Home' to 'Apartment'
		$defaults['home'] = null;
		return $defaults;
	}
	
	
	
	
	
	/*** ИЗМЕНЯЕМ НАЗВАНИЕ СТРАНИЦЫ ДЛЯ КАТЕГОРИЙ ***/
	add_filter( 'woocommerce_page_title', 'wp_kama_woocommerce_page_title_filter' );
	function wp_kama_woocommerce_page_title_filter( $page_title ){
		switch ( $page_title ) {
			case 'Кухни':
			$page_title = 'Купить кухню в Рязани';
			break;
		}
		
		return $page_title;
		
	}
	
	// Универсальный title для отображения на странице
	function page_title() {
		if ( is_front_page() OR is_page() OR is_product() ) {
			echo wp_get_document_title();
		} else if ( is_product_category() ) {
			echo woocommerce_page_title();
		} else {
			echo woocommerce_page_title();
		}
	}
	
	// Универсальный title для отображения в head
	function head_title() {
		if ( is_front_page() OR is_page() OR is_product() ) {
			echo wp_get_document_title();
		} else if ( is_product_category() ) {
			echo woocommerce_page_title() . ' &#8212; Мебельный магазин «1001 и 1 кухня»';
		} else {
			echo woocommerce_page_title();
		}
	}
	/*** END ИЗМЕНЯЕМ НАЗВАНИЕ СТРАНИЦЫ ДЛЯ КАТЕГОРИЙ ***/
	
	
    /*** ДЕЛАЕМ ПРАВИЛЬНЫЙ DESCRIPTION ДЛЯ КАЖДОЙ СТРАНИЦЫ ***
	function echo_description() {
		
		// Если страница стандартной категории поста
		if ( is_category() ) {
			echo wp_strip_all_tags( category_description() );
		
		// Если страница продукта woocommerce
		} elseif ( is_product() ) {
			$product = wc_get_product( get_the_ID() ); 
			$short_description = $product->get_short_description();
			echo wp_strip_all_tags( $short_description );
		
		// Если страница категории продукта woocommerce
        } elseif ( is_product_category() ) {
            $term = get_queried_object(); // Получаем текущую категорию
            if( $term && !empty( $term->description ) ){
                echo wp_strip_all_tags( $term->description ); // Описание только текущей категории
            }
		
		// Если страница портфолио
		} elseif ( is_post_type_archive( 'portfolio' ) ) {
			echo 'Наши выполненные работы';
		
		// Если страница категорий портфолио
		} elseif ( is_tax( 'portfolio-cat' ) ) {
			$term = get_queried_object(); // Получаем текущий термин
			echo wp_strip_all_tags( $term->description );
			//echo 'Категория портфолио';
		
		// Если страница магазина	
		} elseif ( is_shop() ) {
			$shop_page_id = wc_get_page_id('shop');
			echo wp_strip_all_tags( get_the_excerpt($shop_page_id) );
		
		// Если обычная страница
		} else {
			echo wp_strip_all_tags( get_the_excerpt() );
		}
	}
	/*** END ДЕЛАЕМ ПРАВИЛЬНЫЙ DESCRIPTION ДЛЯ КАЖДОЙ СТРАНИЦЫ ***/
	
	
	/*** Actions section ***/
	function actionsSection( $var ) {
		switch ( $var ) {
			case 1: ?>
<!-- Actions section -->
<section class="action-4-section bg-light py-5">
  <div class="container">
    <!-- container/container-fluid -->
    <div class="row justify-content-center">
      <div class="col">
        <h2 class="text-uppercase text-center text-corporation-orange fw-bold">Акции и скидки</h2>
        <div class="row justify-content-center">
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/06-05.webp" class="w-100 mb-3 rounded">
            <p><strong>Скидки до 100%</strong>
              при покупке комплекта техники KÖRTING. Подробности уточняйте у менеджеров магазина
            </p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/06-05-02.webp"
              class="w-100 mb-3 rounded">
            <p>При покупке 3-х предметов бытовой техники Evelux - 4-ый <strong>в подарок!</strong></p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-from-2024-10-18-2.jpg"
              class="w-100 mb-3 rounded">
            <p>При заказе кухни - честная <strong>скидка&#160;5%!</strong> при 100% оплате.</p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-img-present-moyka.jpg"
              class="w-100 mb-4 rounded">
            <p>При заказе кухни от 70 000 рублей - каменная мойка <strong>в&#160;подарок</strong></p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-img-discount-30.jpg"
              class="w-100 mb-4 rounded">
            <p>При заказе кухни <strong>скидки до&#160;30%!</strong></p>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-md-4 mt-4 text-center">
            <a href="http://1001i1kuhnya.ru/акции-и-скидки/" class="btn btn-lg btn-corporation-orange px-5 text-light"
              type="button">Смотреть все акции</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Action section -->
<?php break;
			
			case 2: ?>
<!-- Action section -->
<section class="action-4-section bg-white pt-3 pb-5">
  <div class="container">
    <!-- container/container-fluid -->
    <div class="row justify-content-center">
      <div class="col">
        <div class="row justify-content-center">
          <!--div class="col-md-6 mt-5">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-img-free-delivery.jpg" class="w-100 mb-3 rounded">
										<p>При заказе  любой корпусной мебели доставка <strong>бесплатно!</strong></p>
									</div-->
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/06-05.webp" class="w-100 mb-3 rounded">
            <p><strong>Скидки до 100%</strong>
              при покупке комплекта техники KÖRTING. Подробности уточняйте у менеджеров магазина
            </p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/06-05-02.webp"
              class="w-100 mb-3 rounded">
            <p>При покупке 3-х предметов бытовой техники Evelux - 4-ый <strong>в подарок!</strong></p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-from-2024-10-18-2.jpg"
              class="w-100 mb-3 rounded">
            <p>При заказе кухни - честная <strong>скидка&#160;5%!</strong> при 100% оплате.</p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-img-present-moyka.jpg"
              class="w-100 mb-4 rounded">
            <p>При заказе кухни от 70 000 рублей - каменная мойка <strong>в&#160;подарок</strong></p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-img-free-parking.jpg"
              class="w-100 mb-4 rounded">
            <p>Нашим клиентам <strong>оплачиваем парковку</strong> в&#160;ТЦ&#160;«Малина»</p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-img-discount-30.jpg"
              class="w-100 mb-4 rounded">
            <p>При заказе кухни <strong>скидки до&#160;30%!</strong></p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-6.jpg"
              class="w-100 mb-4 rounded">
            <p>При заказе шкафа-купе <strong>скидка до&#160;20%!</strong></p>
          </div>
          <div class="col-md-6 mt-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/action-3.jpg"
              class="w-100 mb-4 rounded">
            <p><strong>Дополнительная скидка&#160;5%</strong> за 100% предоплату, молодожёнам и новосёлам, иногородним,
              пенсионерам, в день рождения и юбилей. Скидка распространяется на всю корпусную мебель.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Action section -->
<?php break;
		}
	} 

    // КЛАССЫ В BODY_CLASS
    // add_filter('body_class', 'custom_body_classes');

    // function custom_body_classes($classes) {
    //     // Добавить класс для всех страниц
    //     $classes[] = 'b-new-year';
    //     return $classes;
    // }
?>