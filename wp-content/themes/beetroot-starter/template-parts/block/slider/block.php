<?php
/**
 * Block Name: Slider
 * Description: It is sample ACF Block. Just copy and rename `sample/` into `block/`. Also dont forget to change file data.
 * Category: common
 * Icon: list-view
 * Keywords: sample acf block example
 * Supports: { "align":false, "anchor":true }
 *
 * @package Beetroot
 *
 * @var array $block
 */

$slug         = str_replace( 'acf/', '', $block['name'] );
$block_id     = $slug . '-' . $block['id'];
$align_class  = $block['align'] ? 'align' . $block['align'] : '';
$custom_class = isset( $block['className'] ) ? $block['className'] : '';
$slider = get_field('slider');
?>

<?php if(get_field('slider')) : ?>
<section id="<?php echo $block_id; ?>" class="<?php echo $slug; ?> <?php echo $align_class; ?> <?php echo $custom_class; ?>">
	<div id="carouselControls" class="carousel slide carousel-fade" data-interval="false" data-ride="carousel">
		<div class="carousel-inner">
		<?php $active_slide = 0; ?>
		<?php foreach($slider as $item) : ?>
			<div class="carousel-item <?php if($active_slide == 0) echo 'active'; ?>">
				<img src="<?php echo $item ?>" class="d-block w-100" alt="...">
			</div>
			<?php $active_slide++; ?>
			<?php endforeach; ?>
		</div>
		<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<?php endif; ?>