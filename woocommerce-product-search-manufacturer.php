<?php
/**
 * woocommerce-product-search-manufacturer.php
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
 * @package woocommerce-product-search-manufacturer
 * @since 1.0.0
 *
 * Plugin Name: WooCommerce Product Search Manufacturer
 * Plugin URI: https://github.com/itthinx/woocommerce-product-search-manufacturer
 * Description: Extends <a href="https://woocommerce.com/products/woocommerce-product-search/">WooCommerce Product Search</a> - Keyword searches for terms in a Manufacturer custom taxonomy will result in matching products. 
 * Version: 1.0.0
 * Author: itthinx
 * Author URI: https://www.itthinx.com
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Uses the WooCommerce Product Search API to implement keyword searches for terms in a Manufacturer custom taxonomy that will result in matching products.
 *
 * The custom taxonomy assumed is registered in the 'WooCommerce Manufacturer' plugin: https://github.com/itthinx/woocommerce-manufacturer
 */
class WooCommerce_Product_Search_Manufacturer {

	/**
	 * Boot this ...
	 */
	public static function init() {
		add_filter( 'woocommerce_product_search_indexer_filter_content', array( __CLASS__, 'woocommerce_product_search_indexer_filter_content' ), 10, 3 );
	}

	public static function woocommerce_product_search_indexer_filter_content( $content, $context, $post_id ) {
		if ( $context === 'post_content' ) {

			$manufacturers = null;

			$terms = get_the_terms( $post_id, 'manufacturer' );
			if ( !is_wp_error( $terms ) && !empty( $terms ) && is_array( $terms ) ) {
				$manufacturers = array();
				foreach ( $terms as $term ) {
					$manufacturers[] = $term->name;
				}
				$manufacturers = implode( ' ', $manufacturers );
			}
			if ( $manufacturers !== null && is_string( $manufacturers ) ) {
				$content .= ' ' . $manufacturers;
			}
		}
		return $content;
	}
}

WooCommerce_Product_Search_Manufacturer::init();

