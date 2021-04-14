<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rasforhas
 */

?>

	<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <?php if ( get_field( 'footer_img', 'option' ) ) : ?>
                    <img src="<?php the_field( 'footer_img', 'option' ); ?>" />
                <?php endif ?>
                <hr class="light">
                <p><?php the_field( 'left_col_num', 'option' ); ?></p>
                <p><?php the_field( 'left_col_email', 'option' ); ?></p>
                <p><?php the_field( 'left_col_street', 'option' ); ?></p>
                <p><?php the_field( 'left_col_state', 'option' ); ?></p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5><?php the_field('middle_col_text', 'option');?></h5>
                <hr class="light">
                <p><?php the_field('middle_col_monday_hrwrk', 'option');?></p>
                <p><?php the_field('middle_col_saturday_hrwrk', 'option');?></p>
                <p><?php the_field('middle_col_sunday_hrwrk', 'option');?></p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5><?php the_field('right_col_text', 'option');?></h5>
                <hr class="light">
                <p><?php the_field('right_col_citystate_1row', 'option');?></p>
                <p><?php the_field('right_col_citystate_2row', 'option');?></p>
                <p><?php the_field('right_col_citystate_3row', 'option');?></p>
                <p><?php the_field('right_col_citystate_4row', 'option');?></p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; Bohdan Rymar</h5>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
