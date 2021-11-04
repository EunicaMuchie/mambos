<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <title>Mambos</title>
    <?php wp_head(); ?>
</head>
<body>
 

<!-- header --------------------------------------------------------------->
<?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) : the_row(); ?>
        <header>
            
            <!-- logo -->
            <a href="#" class="logo">
            <?php $a = get_sub_field( 'a' ); ?>
            <?php if ( $a ) { ?>
                <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
            <?php } ?> 
                <img src="<?php $a_mg = get_sub_field( 'a_mg' );echo $a_mg['url']; ?>" alt="" class="img-fluid">
            </a>
            <!-- end logo -->

            <!-- Hamburger -->
            <div class="navbar">
                <div class="menu-btn">
                    <div class="hamburger">
                    <?php if ( have_rows( 'links' ) ) : ?>
			            <?php while ( have_rows( 'links' ) ) : the_row(); ?>                    
                            <div class="mylinks">
                                <a id="anchor" href="#"><?php $l_1 = get_sub_field( 'l_1' ); ?>
                                    <?php if ( $l_1 ) { ?>
                                        <a href="<?php echo $l_1['url']; ?>" target="<?php echo $l_1['target']; ?>"><?php echo $l_1['title']; ?></a>
                                    <?php } ?></a>
                                <a id="anchor" href="#"><?php $l_2 = get_sub_field( 'l_2' ); ?>
                                    <?php if ( $l_2 ) { ?>
                                        <a href="<?php echo $l_2['url']; ?>" target="<?php echo $l_2['target']; ?>"><?php echo $l_2['title']; ?></a>
                                    <?php } ?></a>
                                <a id="anchor" href="#"><?php $l_3 = get_sub_field( 'l_3' ); ?>
                                    <?php if ( $l_3 ) { ?>
                                        <a href="<?php echo $l_3['url']; ?>" target="<?php echo $l_3['target']; ?>"><?php echo $l_3['title']; ?></a>
                                    <?php } ?></a>
                                <a id="anchor" href="#"><?php $l_4 = get_sub_field( 'l_4' ); ?>
                                    <?php if ( $l_4 ) { ?>
                                        <a href="<?php echo $l_4['url']; ?>" target="<?php echo $l_4['target']; ?>"><?php echo $l_4['title']; ?></a>
                                    <?php } ?></a>
                                <a id="anchor" href=""><?php $l_5 = get_sub_field( 'l_5' ); ?>
                                    <?php if ( $l_5 ) { ?>
                                        <a href="<?php echo $l_5['url']; ?>" target="<?php echo $l_5['target']; ?>"><?php echo $l_5['title']; ?></a>
                                    <?php } ?></a>
                            </div>
                        <?php endwhile; ?>
		            <?php endif; ?>   
                    </div>
                </div>
            </div>
            <!-- end Hamburger -->

            <!-- menu-->
            <?php if ( have_rows( 'menu' ) ) : ?>
			    <?php while ( have_rows( 'menu' ) ) : the_row(); ?>
                    <ul class="menu">
                        <a href="#" class=""><?php $m_a = get_sub_field( 'm_a' ); ?>
                            <?php if ( $m_a ) { ?>
                                <a href="<?php echo $m_a['url']; ?>" target="<?php echo $m_a['target']; ?>"><?php echo $m_a['title']; ?></a>
                            <?php } ?></a>
                        <a href="#"><?php $m_a2 = get_sub_field( 'm_a2' ); ?>
                            <?php if ( $m_a2 ) { ?>
                                <a href="<?php echo $m_a2['url']; ?>" target="<?php echo $m_a2['target']; ?>"><?php echo $m_a2['title']; ?></a>
                            <?php } ?></a>
                        <a href="#"><?php $m_a3 = get_sub_field( 'm_a3' ); ?>
                            <?php if ( $m_a3 ) { ?>
                                <a href="<?php echo $m_a3['url']; ?>" target="<?php echo $m_a3['target']; ?>"><?php echo $m_a3['title']; ?></a>
                            <?php } ?></a>
                        <a href="#"><?php $m_a4 = get_sub_field( 'm_a4' ); ?>
                            <?php if ( $m_a4 ) { ?>
                                <a href="<?php echo $m_a4['url']; ?>" target="<?php echo $m_a4['target']; ?>"><?php echo $m_a4['title']; ?></a>
                            <?php } ?></a> 
                        <a href="#"><?php $m_a5 = get_sub_field( 'm_a5' ); ?>
                        <?php if ( $m_a5 ) { ?>
                            <a href="<?php echo $m_a5['url']; ?>" target="<?php echo $m_a5['target']; ?>"><?php echo $m_a5['title']; ?></a>
                        <?php } ?></a>
                    </ul>
                <?php endwhile; ?>
            <?php endif; ?> 
            <!-- end menu-->
        </header> 
    <?php endwhile; ?>
<?php endif; ?>
<!-- end header --------------------------->  