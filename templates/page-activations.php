<?php defined( 'ABSPATH' ) || exit; ?>

<div class="wrap lmfwc">
	<?php
	if ( $action === 'list' || $action === 'activate' || $action === 'deactivate' || $action === 'delete' ) {
		include_once( 'activations/page-list.php' );
	}

	?>
</div>