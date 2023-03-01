
<?php
/**
 * woocommerce-product-search-custom-taxonomy.php
 *
 * Copyright (c) 2023 www.itthinx.com
 *
 * This code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This header and all notices must be kept intact.
 *
 * @author itthinx
 * @package woocommerce-product-search-custom-taxonomy
 * @since 1.0.0
 *
 * Plugin Name: WooCommerce Product Search Custom Taxonomy
 * Plugin URI: https://github.com/itthinx/affiliates-auto-login
 * Description: Extends <a href="https://woocommerce.com/products/woocommerce-product-search/">WooCommerce Product Search</a> - Keyword searches for terms in a custom taxonomy will result in matching products. 
 * Version: 1.0.0
 * Author: itthinx
 * Author URI: https://www.itthinx.com
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Uses the WooCommerce Product Search API to implement keyword searches for terms in a custom taxonomy that will result in matching products.
 *
 * The custom taxonomy assumed in this example is 'Manufacturer'.
 */
class WooCommerce_Product_Search_Custom_Taxonomy {
	
	/**
	 * Boot this ...
	 */
	public static function init() {
		// @todo do something
	}
}

WooCommerce_Product_Search_Custom_Taxonomy::init();
