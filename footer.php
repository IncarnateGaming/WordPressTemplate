<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package incarnateWordpress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'incarnatewordpress' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'incarnatewordpress' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'incarnatewordpress' ), 'incarnatewordpress', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
        <script>
            var IncarnateAnalyticsTag = 'UA-155417623-1';
        </script>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/analytics.js"></script>
        <link rel="stylesheet" href="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/style/incBootstrap.css">
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/policyAccept.js"></script>
        <script>
            IncarnatePolicyAccept.policy = '/policy/8-website';
            IncarnatePolicyAccept.reject = '/policy/9-reject';
        </script>
        <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/orientation.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
