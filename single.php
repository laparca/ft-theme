<?php

/**
 * @package WordPress
 * @subpackage Cleanfrog
 */

get_header();?>


<div class="column1">
	<div class="column2">
		
		<?php get_sidebar(); ?>
  
		<section class="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
	<article>
		<div class="article_head">
			<div class="dater">
				<p class="day"><a href="<?php the_permalink(); ?>" ><?php the_time('j'); ?></a></p>
				<p class="monthyear"><a href="<?php the_permalink(); ?>" ><?php the_time('M y'); ?></a></p>
			</div>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div style="clear: both;"></div>
		</div>
		<?php the_content(__('Read more'));?>

		<p class="postmetadata">
			<span class="cat">Publicado en <?php the_category(', ') ?></span> | 
			<span class="comm"><?php comments_popup_link('Sin comentarios', '1 comentario', '% comentarios'); ?></span>
			<?php edit_post_link('Editar', '&nbsp;|&nbsp;', ''); ?>
			<?php if (get_option('cf_hidetags') == '') { the_tags('<br /><span class="tags">Etiquetas: ',', ', '</span>'); } ?>
		</p>

		<?php comments_template(); ?>
	</article>
				<?php endwhile; endif; ?>
			</section>


			</div>
		</div>
		<div style="clear: both;"></div>
	</div>


	<?php get_footer(); ?>