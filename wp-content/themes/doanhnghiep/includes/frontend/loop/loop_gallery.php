<div class="list_post_item pw">
	<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
	<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
	<div class="post_wrapper_content">
		<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post_meta">
			<p><?php the_time('d/m/Y');?><span>  <?php the_time('H:i') ?></span> 
			</p>
		</div>
	
		
	
	</div>
</div>
