<?php get_header(); ?>


<!-- banner section-------------------------------------------------------->
<section class="banner">
<?php if ( have_rows( 'banner' ) ) : ?>
	<?php while ( have_rows( 'banner' ) ) : the_row(); ?>

    <!--banner background-->
    <?php if ( get_sub_field( 'image') ) { ?>
        <img src="<?php the_sub_field( 'image' ); ?>" class="one" alt="">
    <?php } ?>

    <?php if ( get_sub_field( 'image2') ) { ?>
        <img src="<?php the_sub_field( 'image2' ); ?>" class="bkg" alt="">
    <?php } ?>
    
    <?php if ( get_sub_field( 'image3') ) { ?>
		<img src="<?php the_sub_field( 'image3' ); ?>" class="two"alt="">
    <?php } ?>
    
    <!--end banner background-->

    <!--banner slider-->
    <?php if ( have_rows( 'banner-inner' ) ) : ?>
		<?php while ( have_rows( 'banner-inner' ) ) : the_row(); ?>
            <div class="banner-inner">

                <!--small-device-->
                <?php if ( have_rows( 'small' ) ) : ?>
			        <?php while ( have_rows( 'small' ) ) : the_row(); ?>

                        <div class="small-device">
                            <?php if ( get_sub_field( 'image') ) { ?>
                                <img src="<?php the_sub_field( 'image' ); ?>" alt="" class="img-fluid">
                            <?php } ?>
                            
                            <?php if ( have_rows( 'inner' ) ) : ?>
			                    <?php while ( have_rows( 'inner' ) ) : the_row(); ?>

                                    <div class="inner">
                                        <?php the_sub_field( 'h1' ); ?>

                                        <?php if ( have_rows( 'btn-group' ) ) : ?>
			                                <?php while ( have_rows( 'btn-group' ) ) : the_row(); ?>
                                                <button id="button">
                                                    <?php if ( get_sub_field( 'img') ) { ?>
                                                        <img src="<?php the_sub_field( 'img' ); ?>" class="prev" alt="">
                                                    <?php } ?>
                                                    <?php the_sub_field( 'btn-text' ); ?>
                                                    <?php if ( get_sub_field( 'img2') ) { ?>
                                                        <img src="<?php the_sub_field( 'img2' ); ?>" class="next" alt="">
                                                    <?php } ?>
                                                </button>
                                            <?php endwhile; ?>
		                                <?php endif; ?>
                                    </div>

                                <?php endwhile; ?>
		                    <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
		        <?php endif; ?>
                <!--end small device-->

                            <!--large devices-->
                <?php if ( have_rows( 'top' ) ) : ?>
			        <?php while ( have_rows( 'top' ) ) : the_row(); ?>
                        
                        <div class="top">
                            <!--slide 1-->
                            <?php if ( have_rows( 'items' ) ) : ?>
			                    <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                                    <div class="items">

                                        <?php if ( have_rows( 'heading' ) ) : ?>
			                                <?php while ( have_rows( 'heading' ) ) : the_row(); ?>
                                                <div class="heading">
                                                <?php the_sub_field( 'hh1' ); ?>
                                                    
                                                    <?php if ( have_rows( 'button-grp' ) ) : ?>
			                                            <?php while ( have_rows( 'button-grp' ) ) : the_row(); ?>
                                                            <button id="button">
                                                                <?php if ( get_sub_field( 'img1') ) { ?>
                                                                    <img src="<?php the_sub_field( 'img1' ); ?>" class="prev" alt="">
                                                                <?php } ?>
                                                                <?php the_sub_field( 'btttn-text' ); ?>
                                                                <?php if ( get_sub_field( 'img2') ) { ?>
                                                                    <img src="<?php the_sub_field( 'img2' ); ?>" class="next" alt="">
                                                                <?php } ?>
                                                            </button>
                                                        <?php endwhile; ?>
		                                             <?php endif; ?>

                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>


                                        <div class="gallery">
                                            <?php if ( get_sub_field( 'gallery') ) { ?>
                                                <img src="<?php the_sub_field( 'gallery' ); ?>" alt="" class="img-fluid">
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <!--end slide 1-->

                            <!-- slide 2-->

                            <?php if ( have_rows( 'items' ) ) : ?>
			                    <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                                    <div class="items">

                                        <?php if ( have_rows( 'heading' ) ) : ?>
			                                <?php while ( have_rows( 'heading' ) ) : the_row(); ?>
                                                <div class="heading">
                                                <?php the_sub_field( 'hh1' ); ?>
                                                    
                                                    <?php if ( have_rows( 'button-grp' ) ) : ?>
			                                            <?php while ( have_rows( 'button-grp' ) ) : the_row(); ?>
                                                            <button id="button">
                                                                <?php if ( get_sub_field( 'img1') ) { ?>
                                                                    <img src="<?php the_sub_field( 'img1' ); ?>" class="prev" alt="">
                                                                <?php } ?>
                                                                <?php the_sub_field( 'btttn-text' ); ?>
                                                                <?php if ( get_sub_field( 'img2') ) { ?>
                                                                    <img src="<?php the_sub_field( 'img2' ); ?>" class="next" alt="">
                                                                <?php } ?>
                                                            </button>
                                                        <?php endwhile; ?>
		                                             <?php endif; ?>

                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>


                                        <div class="gallery">
                                            <?php if ( get_sub_field( 'gallery') ) { ?>
                                                <img src="<?php the_sub_field( 'gallery' ); ?>" alt="" class="img-fluid">
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!--end slide 2-->

                            <!--slide 3-->

                            <?php if ( have_rows( 'items' ) ) : ?>
			                    <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                                    <div class="items">

                                        <?php if ( have_rows( 'heading' ) ) : ?>
			                                <?php while ( have_rows( 'heading' ) ) : the_row(); ?>
                                                <div class="heading">
                                                <?php the_sub_field( 'hh1' ); ?>
                                                    
                                                    <?php if ( have_rows( 'button-grp' ) ) : ?>
			                                            <?php while ( have_rows( 'button-grp' ) ) : the_row(); ?>
                                                            <button id="button">
                                                                <?php if ( get_sub_field( 'img1') ) { ?>
                                                                    <img src="<?php the_sub_field( 'img1' ); ?>" class="prev" alt="">
                                                                <?php } ?>
                                                                <?php the_sub_field( 'btttn-text' ); ?>
                                                                <?php if ( get_sub_field( 'img2') ) { ?>
                                                                    <img src="<?php the_sub_field( 'img2' ); ?>" class="next" alt="">
                                                                <?php } ?>
                                                            </button>
                                                        <?php endwhile; ?>
		                                             <?php endif; ?>

                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>


                                        <div class="gallery">
                                            <?php if ( get_sub_field( 'gallery') ) { ?>
                                                <img src="<?php the_sub_field( 'gallery' ); ?>" alt="" class="img-fluid">
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <!--end slide 3-->
                        </div>
                            <!--end large devices-->
                    <?php endwhile; ?>
                <?php endif; ?>

                            <?php if ( get_sub_field( 'image4') ) { ?>
                                <img src="<?php the_sub_field( 'image4' ); ?>" class="edge" alt="">
                            <?php } ?>
                            <?php if ( get_sub_field( 'image5') ) { ?>
                                <img src="<?php the_sub_field( 'image5' ); ?>" class="prevv" alt="">
                            <?php } ?>
                            <?php if ( get_sub_field( 'image6') ) { ?>
                                <img src="<?php the_sub_field( 'image6' ); ?>" class="nextt" alt="">
                            <?php } ?>

            </div>
                
        <?php endwhile; ?>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
</section>
<!-- end banner section-------------------->

<!--about section---------------------------------------------------------->
<?php if ( have_rows( 'about' ) ) : ?>
	<?php while ( have_rows( 'about' ) ) : the_row(); ?>
        <section class="about">
        <?php if ( get_sub_field( 'watermark') ) { ?>
			<img src="<?php the_sub_field( 'watermark' ); ?>" class="watermark" alt="">
		<?php } ?>

            <!--about us inner-->
            <?php if ( have_rows( 'row' ) ) : ?>
			    <?php while ( have_rows( 'row' ) ) : the_row(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <h2><?php the_sub_field( 'h2' ); ?></h2>
                            
                            <img src="<?php $img1 = get_sub_field( 'img1' ); echo $img1['url'];?>" alt="">
                        </div>

                        <!--cards-->
                        <div class="card-collection col-md-6">
                            <!--row-->
                            <?php if ( have_rows( 'c1' ) ) : ?>
			                    <?php while ( have_rows( 'c1' ) ) : the_row(); ?>
                                    <div class="row c1">
                                        <div class="col-md-6">
                                            <?php if ( have_rows( 'card' ) ) : ?>
                                                <?php while ( have_rows( 'card' ) ) : the_row(); ?>
                                                    <div class="card one " style="width:18rem;">
                                                        <?php if ( get_sub_field( 'cardimg') ) { ?>
                                                            <img src="<?php the_sub_field( 'cardimg' ); ?>" class="card-img" alt="">
                                                        <?php } ?>

                                                        <div class="cardbody">
                                                            <p><?php the_sub_field( 'text' ); ?></p>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <?php if ( have_rows( 'card' ) ) : ?>
                                            <?php while ( have_rows( 'card' ) ) : the_row(); ?>
                                                <div class="card two " style="width:18rem;">
                                                    <?php if ( get_sub_field( 'cardimg') ) { ?>
                                                        <img src="<?php the_sub_field( 'cardimg' ); ?>" class="card-img" alt="">
                                                    <?php } ?>
                                
                                                    <div class="cardbody">
                                                        <p><?php the_sub_field( 'text' ); ?></p>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <!--end row-->
                            
                            <!--row2-->
                            <?php if ( have_rows( 'c2' ) ) : ?>
			                    <?php while ( have_rows( 'c2' ) ) : the_row(); ?>
                                    <div class="row c2">
                                        <div class="col-md-6">
                                        <?php if ( have_rows( 'cardd' ) ) : ?>
                                            <?php while ( have_rows( 'cardd' ) ) : the_row(); ?>
                                                <div class="card three col-md-6" style="width:18rem;">
                                                    <?php if ( get_sub_field( 'card_img') ) { ?>
                                                        <img src="<?php the_sub_field( 'card_img' ); ?>" class="card-img" alt="">
                                                    <?php } ?>
                                
                                                    <div class="cardbody">
                                                        <p><?php the_sub_field( 'text' ); ?></p>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <?php if ( have_rows( 'cardd' ) ) : ?>
                                            <?php while ( have_rows( 'cardd' ) ) : the_row(); ?>
                                                <div class="card four col-md-6" style="width:18rem;">
                                                        <?php if ( get_sub_field( 'card_img') ) { ?>
                                                            <img src="<?php the_sub_field( 'card_img' ); ?>" class="card-img" alt="">
                                                        <?php } ?>
                                                        <?php if ( get_sub_field( 'card_img2') ) { ?>
                                                            <img src="<?php the_sub_field( 'card_img2' ); ?>" class="s-seeds"alt="">
                                                        <?php } ?>
                                
                                                    <div class="cardbody">
                                                        <p class="s-paragraph"><?php the_sub_field( 'text' ); ?></p>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            
                        </div>
                        <!--end cards-->
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--end about us inner-->
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end about section---------------------->

<!--menu------------------------------------------------------------------->
<?php if ( have_rows( 'menu' ) ) : ?>
	<?php while ( have_rows( 'menu' ) ) : the_row(); ?>
        <section class="menu">
            <h2><?php the_sub_field( 'hh2' ); ?></h2>
            <img src="<?php $img_m1 = get_sub_field( 'img_m1' ); echo $img_m1['url']; ?>" class="rule" alt="">
            <img src="<?php $img_m2 = get_sub_field( 'img_m2' ); echo $img_m2['url']; ?>" class="img-fluid e1" alt="">

            <!--tabs-->
            <!--all devices-->
            <img src="<?php $tab_img1 = get_sub_field( 'tab_img1' ); echo $tab_img1['url']; ?>" class="img-fluid icon1" alt="">

            <?php if ( have_rows( 'container' ) ) : ?>
			    <?php while ( have_rows( 'container' ) ) : the_row(); ?>
                    <div class="tabsContainerr">
                        <!--tab buttons-->
                        <?php if ( have_rows( 'buttonc' ) ) : ?>
			                <?php while ( have_rows( 'buttonc' ) ) : the_row(); ?>
                                <div class="buttonsContainerr">
                                <?php if ( have_rows( 'b1' ) ) : ?>
			                        <?php while ( have_rows( 'b1' ) ) : the_row(); ?>
                                    <button class="btt" onclick="showPanels(0,)">
                                    <?php if ( get_sub_field( 'img') ) { ?>
                                        <img src="<?php the_sub_field( 'img' ); ?>" alt="">
                                    <?php } ?>
                                    <?php the_sub_field( 'txt' ); ?>
                                    </button>
                                    <?php endwhile; ?>
		                        <?php endif; ?>
                                <?php if ( have_rows( 'b2' ) ) : ?>
			                        <?php while ( have_rows( 'b2' ) ) : the_row(); ?>   
                                    <button class="btt" onclick="showPanels(1,)">
                                    <?php if ( get_sub_field( 'img2') ) { ?>
                                        <img src="<?php the_sub_field( 'img2' ); ?>" alt=""/>
                                    <?php } ?>
                                    <?php the_sub_field( 'txt2' ); ?>
                                    </button>
                                    <?php endwhile; ?>
		                        <?php endif; ?>  
                                <?php if ( have_rows( 'b3' ) ) : ?>
			                        <?php while ( have_rows( 'b3' ) ) : the_row(); ?>       
                                    <button class="btt" onclick="showPanels(2,)">
                                    <img src="<?php $img3 = get_sub_field( 'img3' ); echo $img3['url']; ?>" alt=""/>
                                    <?php the_sub_field( 'txt3' ); ?>
                                    </button>
                                    <?php endwhile; ?>
		                        <?php endif; ?>
                                <?php if ( have_rows( 'b4' ) ) : ?>
			                        <?php while ( have_rows( 'b4' ) ) : the_row(); ?>        
                                    <button class="btt" onclick="showPanels(3,)">
                                    <?php if ( get_sub_field( 'img4') ) { ?>
                                        <img src="<?php the_sub_field( 'img4' ); ?>" id="sh" alt="">
                                    <?php } ?>
                                    <?php the_sub_field( 'txt4' ); ?>
                                    </button>
                                    <?php endwhile; ?>
		                        <?php endif; ?>
                                <?php if ( have_rows( 'b5' ) ) : ?>
			                        <?php while ( have_rows( 'b5' ) ) : the_row(); ?>        
                                    <button class="btt" onclick="showPanels(4,)">
                                    <?php if ( get_sub_field( 'img5') ) { ?>
                                        <img src="<?php the_sub_field( 'img5' ); ?>" id="p" alt="">
                                    <?php } ?>
                                    <?php the_sub_field( 'txt5' ); ?>
                                    </button>
                                    <?php endwhile; ?>
		                        <?php endif; ?>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <!--end tab buttons-->

                        <hr class="rulee">

                        <!--tab content-->
                        <div class="tabsPanell">
                        <?php if ( have_rows( 'm_row' ) ) : ?>
			                <?php while ( have_rows( 'm_row' ) ) : the_row(); ?>
                            <div class="menulist row">
                                <?php if ( have_rows( 'm_items' ) ) : ?>
                                    <?php while ( have_rows( 'm_items' ) ) : the_row(); ?>
                                        <div class="menu-item col-md-6 row">
                                                <div class="items col-md-5">
                                                    <p><?php the_sub_field( 'item' ); ?></p>
                                                    <p><?php the_sub_field( 'item' ); ?></p>
                                                    <p><?php the_sub_field( 'item' ); ?></p>
                                                    <p><?php the_sub_field( 'item' ); ?></p>
                                                    <p><?php the_sub_field( 'item' ); ?></p>
                                                </div>

                                                <div class="HR col-md-3">
                                                    <hr>
                                                    <hr>
                                                    <hr>
                                                    <hr>
                                                    <hr>
                                                </div>

                                                <div class="price text-muted col-md-4">
                                                    <p><?php the_sub_field( 'price' ); ?></p>
                                                    <p><?php the_sub_field( 'price' ); ?></p>
                                                    <p><?php the_sub_field( 'price' ); ?></p>
                                                    <p><?php the_sub_field( 'price' ); ?></p>
                                                    <p><?php the_sub_field( 'price' ); ?></p>
                                                </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?> 

                                <?php if ( have_rows( 'm_items2' ) ) : ?>
                                    <?php while ( have_rows( 'm_items2' ) ) : the_row(); ?>
                                        <div class="menu-item col-md-6 row">
                                                <div class="items col-md-5">
                                                    <p><?php the_sub_field( 'itemss' ); ?></p>
                                                    <p><?php the_sub_field( 'itemss' ); ?></p>
                                                    <p><?php the_sub_field( 'itemss' ); ?></p>
                                                    <p><?php the_sub_field( 'itemss' ); ?></p>
                                                    <p><?php the_sub_field( 'itemss' ); ?></p>
                                                </div>

                                                <div class="HR col-md-3">
                                                    <hr>
                                                    <hr>
                                                    <hr>
                                                    <hr>
                                                    <hr>
                                                </div>

                                                <div class="price text-muted col-md-4">
                                                    <p><?php the_sub_field( 'pricee' ); ?></p>
                                                    <p><?php the_sub_field( 'pricee' ); ?></p>
                                                    <p><?php the_sub_field( 'pricee' ); ?></p>
                                                    <p><?php the_sub_field( 'pricee' ); ?></p>
                                                    <p><?php the_sub_field( 'pricee' ); ?></p>
                                                </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?> 
                            </div> 
                            <?php endwhile; ?>
                        <?php endif; ?> 
                        </div>


                    </div>
                <?php endwhile; ?>
            <?php endif; ?>  

        <?php if ( get_sub_field( 'tab_img2') ) { ?>
            <img src="<?php the_sub_field( 'tab_img2' ); ?>" class="img-fluid icon2" alt="">
        <?php } ?>
        <!--end tabs-->
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end menu------------------------------->

<!--specials--------------------------------------------------------------->
<?php if ( have_rows( 'specials' ) ) : ?>
	<?php while ( have_rows( 'specials' ) ) : the_row(); ?>
        <section class="specials">
                <!--gallery2-->
                <?php if ( have_rows( 'slider' ) ) : ?>
			        <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
                        <div class="Specials slider">
                            <!--slide 1-->
                            <?php if ( have_rows( 'slide' ) ) : ?>
			                     <?php while ( have_rows( 'slide' ) ) : the_row(); ?>
                                    <div class="slide first">
                                        <div class="detail">
                                            <h3><?php the_sub_field( 'h3' ); ?></h3>
                                            <p><?php the_sub_field( 'p' ); ?></p>
                                            <?php if ( have_rows( 'button' ) ) : ?>
			                                    <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                                    <button>
                                                        <?php the_sub_field( 'bn_text' ); ?>
                                                        <?php if ( get_sub_field( 'bn_img') ) { ?>
                                                            <img src="<?php the_sub_field( 'bn_img' ); ?>"  alt="">
                                                        <?php } ?>
                                                    </button>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ( have_rows( 'imgg' ) ) : ?>
			                                <?php while ( have_rows( 'imgg' ) ) : the_row(); ?>
                                                <div class="images">
                                                    <p><?php the_sub_field( 'price' ); ?></p>
                                                    <?php if ( get_sub_field( 'img_') ) { ?>
                                                        <img src="<?php the_sub_field( 'img_' ); ?>"  alt="">
                                                    <?php } ?>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>     
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                         
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!--end gallery2-->
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end specials--------------------------->

<!--testimonials----------------------------------------------------------->
<?php if ( have_rows( 'testimonials' ) ) : ?>
	<?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
        <section class="testimonials">
            <?php if ( get_sub_field( 't_img') ) { ?>
                <img src="<?php the_sub_field( 't_img' ); ?>" class="backgrnd img-fluid" alt="">
            <?php } ?>
            <?php if ( get_sub_field( 't_img2') ) { ?>
                <img src="<?php the_sub_field( 't_img2' ); ?>" id="top" class="img-fluid" alt="">
            <?php } ?>
            <?php if ( get_sub_field( 't_img3') ) { ?>
                <img src="<?php the_sub_field( 't_img3' ); ?>" class="e1" alt="">
            <?php } ?>
            <?php if ( get_sub_field( 't_img4') ) { ?>
                <img src="<?php the_sub_field( 't_img4' ); ?>" class="e2" alt="">
            <?php } ?>
            <h2><?php the_sub_field( 'h2' ); ?></h2>

            <!--tab2-->
            <div class="tabsContainer">
                <!--tab content-->
                <?php if ( have_rows( 'panel' ) ) : ?>
	                <?php while ( have_rows( 'panel' ) ) : the_row(); ?>
                        <div class="tabsPanel">
                            <?php if ( get_sub_field( 'img') ) { ?>
                                <img src="<?php the_sub_field( 'img' ); ?>" class="e2" alt="">
                            <?php } ?>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <div class="tt">
                                <h4><?php the_sub_field( 'name' ); ?></h4>
                            <p class="panel"><?php the_sub_field( 'profession' ); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!--end tab content-->

                <hr class="tab-rule">

                <!--tab buttons-->
                <?php if ( have_rows( 'buttonc' ) ) : ?>
			        <?php while ( have_rows( 'buttonc' ) ) : the_row(); ?>
                        <div class="buttonsContainer">
                        <?php if ( have_rows( 'bn1' ) ) : ?>
			                <?php while ( have_rows( 'bn1' ) ) : the_row(); ?> 
                                <button class="bt" onclick="showPanel(0,)">
                                <?php if ( get_sub_field( 'bnimg') ) { ?>
                                    <img src="<?php the_sub_field( 'bnimg' ); ?>" />
                                <?php } ?>
                                </button>
                            <?php endwhile; ?>
		                <?php endif; ?>
                        <?php if ( have_rows( 'bn2' ) ) : ?>
			                <?php while ( have_rows( 'bn2' ) ) : the_row(); ?> 
                            <button class="bt" onclick="showPanel(1,)">
                            <?php if ( get_sub_field( 'bnimg2') ) { ?>
                                <img src="<?php the_sub_field( 'bnimg2' ); ?>" />
                            <?php } ?>
                            </button>
                            <?php endwhile; ?>
		                <?php endif; ?>
                        <?php if ( have_rows( 'bn3' ) ) : ?>
			                <?php while ( have_rows( 'bn3' ) ) : the_row(); ?>
                            <button class="bt" onclick="showPanel(2,)">
                            <?php if ( get_sub_field( 'bnimg3') ) { ?>
                                <img src="<?php the_sub_field( 'bnimg3' ); ?>" />
                            <?php } ?>
                            </button>
                            <?php endwhile; ?>
		                <?php endif; ?>
                        <?php if ( have_rows( 'bn4' ) ) : ?>
			                <?php while ( have_rows( 'bn4' ) ) : the_row(); ?>
                            <button class="bt" onclick="showPanel(3,)">
                            <?php if ( get_sub_field( 'bnimg4') ) { ?>
                                <img src="<?php the_sub_field( 'bnimg4' ); ?>" />
                            <?php } ?>
                            </button>
                            <?php endwhile; ?>
		                <?php endif; ?>
                        <?php if ( have_rows( 'bn5' ) ) : ?>
			                <?php while ( have_rows( 'bn5' ) ) : the_row(); ?>
                            <button class="bt" onclick="showPanel(4,)">
                            <?php if ( get_sub_field( 'bnimg5') ) { ?>
                                <img src="<?php the_sub_field( 'bnimg5' ); ?>" />
                            <?php } ?>
                            </button>
                            <?php endwhile; ?>
		                <?php endif; ?>
                        <?php if ( have_rows( 'bn6' ) ) : ?>
			                <?php while ( have_rows( 'bn6' ) ) : the_row(); ?>
                            <button class="bt" onclick="showPanel(5,)">
                            <?php if ( get_sub_field( 'bnimg6') ) { ?>
                                <img src="<?php the_sub_field( 'bnimg6' ); ?>" />
                            <?php } ?>
                            </button>
                            <?php endwhile; ?>
		                <?php endif; ?>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>    
                <!--end tab buttons-->
            </div>
            <!--end tab2-->

            <?php if ( get_sub_field( 't_mig5') ) { ?>
                <img src="<?php the_sub_field( 't_mig5' ); ?>" id="bottom" class="img-fluid" alt="">
            <?php } ?>
            <?php if ( get_sub_field( 't_mig6') ) { ?>
                <img src="<?php the_sub_field( 't_mig6' ); ?>" id="edg1" alt="">
            <?php } ?>
            <?php if ( get_sub_field( 't_mig7') ) { ?>
                <img src="<?php the_sub_field( 't_mig7' ); ?>" id="edg2" alt="">
            <?php } ?>
            

            <!--craftsman section----------------------->
            <?php if ( have_rows( 'crafts' ) ) : ?>
			    <?php while ( have_rows( 'crafts' ) ) : the_row(); ?>
                    <div class="crafts">
                        <?php if ( get_sub_field( 'c_img') ) { ?>
                            <img src="<?php the_sub_field( 'c_img' ); ?>" class="bbg img-fluid" alt="">
                        <?php } ?>
                        <?php if ( get_sub_field( 'c_img2') ) { ?>
                            <img src="<?php the_sub_field( 'c_img2' ); ?>" class="bbg2 img-fluid" alt="">
                        <?php } ?>
                        <h2><?php the_sub_field( 'c_h2' ); ?></h2>
                        
                        <!--crafts gallery-->
                        <?php if ( have_rows( 'gallery' ) ) : ?>
			                <?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
                            <div class="gallery">
                            <?php if ( get_sub_field( 'img') ) { ?>
                                <img src="<?php the_sub_field( 'img' ); ?>" id="one" alt="">
                            <?php } ?>
                            <?php if ( get_sub_field( 'img2') ) { ?>
                                <img src="<?php the_sub_field( 'img2' ); ?>" id="two" alt="">
                            <?php } ?>   
                            <?php if ( get_sub_field( 'img3') ) { ?>
                                <img src="<?php the_sub_field( 'img3' ); ?>" id="three" alt="">
                            <?php } ?>  
                            <?php if ( get_sub_field( 'img4') ) { ?>
                                <img src="<?php the_sub_field( 'img4' ); ?>" id="four" alt="">
                            <?php } ?>  
                            <?php if ( get_sub_field( 'img5') ) { ?>
                                <img src="<?php the_sub_field( 'img5' ); ?>" id="five" alt="">
                            <?php } ?>   
                            <?php if ( get_sub_field( 'img6') ) { ?>
                                <img src="<?php the_sub_field( 'img6' ); ?>" id="six" alt="">
                            <?php } ?>  
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>   
                        <!--end crafts gallery-->
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>    
            <!--end craftsman section------>
            <?php if ( get_sub_field( 'c_img3') ) { ?>
                <img src="<?php the_sub_field( 'c_img3' ); ?>" class="img-fluid" id="crushed" alt="">
            <?php } ?>
        </section>
        <?php endwhile; ?>
<?php endif; ?>
<!--end testimonials------------------------>

<!--acoustic nights section------------------------------------------------->
<?php if ( have_rows( 'acoustics' ) ) : ?>
	<?php while ( have_rows( 'acoustics' ) ) : the_row(); ?>
        <section class="acoustic">
            <h2><?php the_sub_field( 'a_h2' ); ?></h2>
            <h3><?php the_sub_field( 'a_h3' ); ?></h3> 
            <?php if ( get_sub_field( 'a_img') ) { ?>
                <img src="<?php the_sub_field( 'a_img' ); ?>" class="sq" alt="">
            <?php } ?> 

            <!--performers gallery -->
            <?php if ( have_rows( 'performers' ) ) : ?>
                <?php while ( have_rows( 'performers' ) ) : the_row(); ?>
                    <div class="performers">
                        <?php if ( have_rows( 'artists' ) ) : ?>
                            <?php while ( have_rows( 'artists' ) ) : the_row(); ?>
                                <div class="artist">
                                <?php if ( get_sub_field( 'img') ) { ?>
                                    <img src="<?php the_sub_field( 'img' ); ?>" class="img-fluid" alt="">
                                <?php } ?> 
                                    <h3><?php the_sub_field( 'hh3' ); ?></h3>
                                    <p id="a"><?php the_sub_field( 'date' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
		    <?php endif; ?>

            <!--end performers gallery--->
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--end acoustic nights section------------->



<?php get_footer(); ?>