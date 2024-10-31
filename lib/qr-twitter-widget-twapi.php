<?php
function qr_twitter_api () {
?>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php
}
add_action( 'wp_print_footer_scripts', 'qr_twitter_api' );