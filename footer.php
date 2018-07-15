<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Shop Isle
 */
?>
<?php do_action( 'shop_isle_before_footer' ); ?>

	<?php do_action( 'shop_isle_footer' ); ?>

	</div>
	<!-- Wrapper end -->
	<!-- Scroll-up -->
	<div class="scroll-up">
		<a href="#totop"><i class="arrow_carrot-2up"></i></a>
	</div>

	<?php do_action( 'shop_isle_after_footer' ); ?>

<?php wp_footer(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S46GR6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script src='https://www.google.com/recaptcha/api.js?hl=de-CH'></script>
</body>
</html>
