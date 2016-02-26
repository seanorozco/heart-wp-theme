<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heart
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'heart' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'heart' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'heart' ), 'heart', '<a href="http://seanoroz.co" rel="designer">sean orozco</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function( $ ) {
	  $("#modal-1").on("change", function() {
	    if ($(this).is(":checked")) {
	      $("body").addClass("modal-open");
	    } else {
	      $("body").removeClass("modal-open");
	    }
	  });

	  $(".modal-fade-screen, .modal-close").on("click", function() {
	    $(".modal-state:checked").prop("checked", false).change();
	  });

	  $(".modal-inner").on("click", function(e) {
	    e.stopPropagation();
	  });
});

(function (jQuery) {
  jQuery.mark = {
    jump: function (options) {
      var defaults = {
        selector: 'a.scroll-on-page-link'
      };
      if (typeof options == 'string') {
        defaults.selector = options;
      }

      options = jQuery.extend(defaults, options);
      return jQuery(options.selector).click(function (e) {
        var jumpobj = jQuery(this);
        var target = jumpobj.attr('href');
        var thespeed = 1000;
        var offset = jQuery(target).offset().top;
        jQuery('html,body').animate({
          scrollTop: offset
        }, thespeed, 'swing');
        e.preventDefault();
      });
    }
  };
})(jQuery);


jQuery(function(){  
  jQuery.mark.jump();
});


</script>


</body>
</html>
