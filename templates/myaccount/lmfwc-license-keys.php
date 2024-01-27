<?php
/**
 * The template for the purchased license keys inside "My account"
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/lmfwc-license-keys.php.
 *
 * HOWEVER, on occasion I will need to update template files and you
 * (the developer) will need to copy the new files to your theme to
 * maintain compatibility. I try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @version 2.0.0
 */

use LicenseManagerForWooCommerce\Models\Resources\License as LicenseResourceModel;

defined('ABSPATH') || exit; ?>

<h2><?php esc_html_e($heading); ?></h2>

    <table class="shop_table">
        <thead>
            <tr>
            <th>名稱</th>
            <th>序號</th> 
            <!-- <th>有效期限</th> -->
            </tr>
        </thead>
        <?php foreach ($data as $productId => $row): ?>
            
        <tbody>
            <?php
            /** @var LicenseResourceModel $license */
            foreach ($row['keys'] as $license):
            ?>
            
            <tr>
            
<!--             <td><?php echo esc_html($row['name']); ?></td> -->
			<td><?php
				echo esc_html(wc_get_product($productId)->get_formatted_name()); ?></td>
            <td><?php echo esc_html($license->getDecryptedLicenseKey()); ?></td>
            <!-- <td>
                <?php if ($license->getExpiresAt()): ?>
                <?php echo $date; ?>
                <?php endif; ?>  
            </td> -->
            </tr>
            <?php endforeach; ?>
        </tbody>
        <?php endforeach; ?>
        </table>
        

