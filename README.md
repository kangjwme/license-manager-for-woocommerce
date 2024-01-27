# Fix by nafstore.net
license-manager-for-woocommerce/templates/myaccount/lmfwc-license-keys.php
> Replace  display product name for "get_formatted_name", which can display the varible product name.

# Addition
Add the code below in `function.php` to modify the origin function `get_formatted_name` from woocommerce
```php
class Custom_WC_Product_Variation extends WC_Product_Variation {
    	public function get_formatted_name() {
		if ( $this->get_sku() ) {
			$identifier = $this->get_sku();
		} else {
			$identifier = '#' . $this->get_id();
		}

		$formatted_variation_list = wc_get_formatted_variation( $this, true, true, true );

		return sprintf( '%2$s', $identifier, $this->get_name() ) . '｜' . $formatted_variation_list;
	}
}

function custom_woocommerce_product_class( $classname, $product_type ) {
    if ( 'variation' === $product_type ) {
        $classname = 'Custom_WC_Product_Variation';
    }
    return $classname;
}
add_filter( 'woocommerce_product_class', 'custom_woocommerce_product_class', 10, 2 );
```

# Autocomplete WooCommerce Orders
- Origin Link: https://wordpress.org/plugins/autocomplete-woocommerce-orders/
- Current Version: 3.0.5
