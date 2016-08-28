<?php get_header(); ?>

<section>
<?php if( have_rows('section_usps') ): 
$i = 0;
?>

            <div class="container-fluid">
                <div class="row text-center">
                <?php 
                    $classes = array('color-block-black', 'color-block-brown', 'color-block-blue');
                    while ( have_rows('section_usps') ) : the_row(); 
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 <?php echo $classes[$i];?>">
                        <i class="fa <?php the_sub_field('icon');?> fa-4x"></i>
                            <div class="padding-20">
                                <h4 class="padding-bottom-10"><?php the_sub_field('title'); ?></h4>
                                <p class="font-size-12"><?php the_sub_field('content'); ?></p>
                            </div>    
                    </div>
                    <?php 
                    $i++;
                    endwhile; ?>

                    <!-- <div class="col-lg-4 col-md-4 col-sm-4 color-block-brown">
                        <i class="fa fa-music fa-4x"></i>
                        <h4 class="padding-bottom-10"><?php the_sub_field('title'); ?></h4>
                        <p class="font-size-12"><?php the_sub_field('content'); ?></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 color-block-blue">
                        <i class="fa fa-cloud fa-4x"></i>
                        <h4 class="padding-bottom-10">Sneeuwzekerheid!</h4>
                        <p class="font-size-12">Het hoogstgelegen dorp van Europa biedt sneeuwgarantie tot einde winterseizoen. 150 km goed onderhouden pistes tussen 1800 en 3200 m, mooie off-piste routes.</p>
                    </div> -->
                </div>
            </div>
<?php else :

    // no rows found

endif;


?>
    </section><!-- .section1 -->
 <?php 

$images = get_field('gallery');

if( $images ): ?>

<section class="well">  
    <div class="container">
        <div class="row">
            <?php foreach( $images as $image ): ?>
            <div class="col-lg-3 col-md-3 col-sm-6">
                 <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </div>
         <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php 

$images = get_field('gallery');
$i=0;
if( $images ): ?>

<section class="well">  
    <div class="container">
        <div class="row">
            <?php foreach( $images as $image ): ?>
            <div class="col-lg-3 col-md-3 col-sm-6">
                 <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </div>
         <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" data-toggle="modal" data-target=".foto1">
                <img src="img/gallerij/dw_0000_DSC_0083-786x576.jpg" class="img-thumbnail foto img-responsive padding-top-10">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" data-toggle="modal" data-target=".foto2">
                <img src="img/gallerij/dw_0000_DSC_0190-786x576.jpg" class="img-thumbnail foto img-responsive padding-top-10">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" data-toggle="modal" data-target=".foto3">
                <img src="img/gallerij/dw_0000_DSC_0254-786x576.jpg" class="img-thumbnail foto img-responsive padding-top-10">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
            <a href="#" data-toggle="modal" data-target=".foto4">
                <img src="img/gallerij/dw_0000_DSC_0429-786x576.jpg" class="img-thumbnail foto img-responsive padding-top-10">
            </a>
            </div>
</div>

<?php $i=0; // counter ?>

<?php 

$images = get_field('gallery');

if( $images ): ?>

    <?php if ($i%4==0) { // if counter is multiple of 3 ?>
    <div class="row">
    <?php } ?>
<?php foreach( $images as $image ): ?>
    <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target=".foto1">
            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-thumbnail foto img-responsive padding-top-10">
        </a>
    </div>        

    <?php $i++; ?>

    <?php if($i%4==0) { // if counter is multiple of 3 ?>
    </div>
    <?php } ?>

<?php endwhile; ?>

<?php if($i%4!=0) { // put closing div if loop is not exactly a multiple of 3 ?>
</div>
<?php } ?>
<?php endif; ?>







<?php 

$images = get_field('gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- test -->

<?php $i=0; // counter ?>

<?php $images = get_field('gallery');

if( $images ): ?>
<?php foreach( $images as $image ): ?>

    <?php if ($i%4==0) { // if counter is multiple of 3 ?>
    <div class="row">
    <?php } ?>

    <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target=".foto1">
           <img src="<?php echo site_url();?>/wp-content/uploads/2016/04/dw_0001_DSC_0416-786x576.jpg" class="img-thumbnail foto img-responsive padding-top-10">
        </a>
    </div>        

    <?php $i++; ?>

    <?php if($i%4==0) { // if counter is multiple of 3 ?>
    </div>
    <?php } ?>

<?php endforeach; ?>
<?php endif; ?>

<?php if($i%4!=0) { // put closing div if loop is not exactly a multiple of 3 ?>
</div>
<?php } ?>

<div class="list">
                            <ul>
                                <li><i class="fa <?php the_sub_field('icon_1');?>"></i><?php the_sub_field('text_1');?></li>
                                <li><i class="fa <?php the_sub_field('icon_2');?>"></i><?php the_sub_field('text_2');?></li>
                                <li><i class="fa <?php the_sub_field('icon_3');?>"></i><?php the_sub_field('text_3');?></li>
                                <li><i class="fa <?php the_sub_field('icon_4');?>"></i><?php the_sub_field('text_4');?></li>
                            </ul>
                        </div>

