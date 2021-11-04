<!--footer----------------------------------------------------------------->
<?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
        <footer>
            <?php if ( get_sub_field( 'img_f1') ) { ?>
                <img src="<?php the_sub_field( 'img_f1' ); ?>" class="top img-fluid" alt="">
            <?php } ?>
            <?php if ( get_sub_field( 'mig_f2') ) { ?>
                <img src="<?php the_sub_field( 'mig_f2' ); ?>" class="bkg img-fluid" alt="">
            <?php } ?>
           

            <!--content--->
            <?php if ( have_rows( 'row' ) ) : ?>
			    <?php while ( have_rows( 'row' ) ) : the_row(); ?>
                    <div class="row">
                        <div class="col-md-5">
                            <?php if ( get_sub_field( 'i_f') ) { ?>
                                <img src="<?php the_sub_field( 'i_f' ); ?>" class="img-fluid logo" alt="">
                            <?php } ?>
                            <?php if ( get_sub_field( 'i_f2') ) { ?>
                                <img src="<?php the_sub_field( 'i_f2' ); ?>" class="img-fluid flwr" alt="">
                            <?php } ?>
                        </div>

                        <!--content-items-->
                        <?php if ( have_rows( 'bloock' ) ) : ?>
			                <?php while ( have_rows( 'bloock' ) ) : the_row(); ?>
                                <div class="col-md-7 C-block">
                                <?php if ( have_rows( 'items' ) ) : ?>
			                        <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                                        <div class="links">
                                            <h3><?php the_sub_field( 'b_h3' ); ?></h3>
                                            <?php if ( have_rows( 'bloock_anchor' ) ) : ?>
			                                    <?php while ( have_rows( 'bloock_anchor' ) ) : the_row(); ?>
                                                    <div class="link-items">
                                                        <a href="#"><?php $a = get_sub_field( 'a' ); ?>
                                                                <?php if ( $a ) { ?>
                                                                    <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                                                                <?php } ?>
                                                        </a>
                                                        <a href="#"><?php $a = get_sub_field( 'a' ); ?>
                                                                <?php if ( $a ) { ?>
                                                                    <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                                                                <?php } ?>
                                                        </a>
                                                        <a href="#"><?php $a = get_sub_field( 'a' ); ?>
                                                                <?php if ( $a ) { ?>
                                                                    <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                                                                <?php } ?>
                                                        </a>
                                                        <a href="#"><?php $a = get_sub_field( 'a' ); ?>
                                                                <?php if ( $a ) { ?>
                                                                    <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                                                                <?php } ?>
                                                        </a>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if ( have_rows( 'items2' ) ) : ?>
			                        <?php while ( have_rows( 'items2' ) ) : the_row(); ?>
                                        <div class="W-time">
                                            <h3><?php the_sub_field( 'b_h33' ); ?></h3>
                                        <?php if ( have_rows( 'bloock_anchor2' ) ) : ?>
                                            <?php while ( have_rows( 'bloock_anchor2' ) ) : the_row(); ?>
                                                <div class="workingHours">
                                                    <p><?php the_sub_field( 'p' ); ?></p>
                                                    <p><?php the_sub_field( 'p' ); ?></p>
                                                    <p><?php the_sub_field( 'p' ); ?></p>
                                                    <p><?php the_sub_field( 'p' ); ?></p>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                    <hr>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>     
                        <!--end content-items-->
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--end content--->
        </footer>
    <?php endwhile; ?>
<?php endif; ?>
<!--end footer---------------------------->


<?php wp_footer(); ?>



<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/jQuery v2.2.0.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

</body>
</html>