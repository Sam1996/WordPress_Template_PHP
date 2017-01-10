<?php
/**
 * Template Name: Post Page
 *
 * 
 */?>
<div class="container-fluid">
	<div class="post col-md-4 col-xs-6">
		<div class="row">
			<h4 class="title text-danger">
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </h4>
            <div class="post-thumbnail">
            	<a href="<?php the_permalink(); ?>">
                    <?php
				        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				            the_post_thumbnail();
				        }
			        ?>
                </a>
            </div>
            <p class="text-left"><?php the_excerpt();?></p>
            <div class="metaInfo col-xs-12">
                    <div class="row">
                    <a class="pull-left" href="<?php the_permalink(); ?>">Read More...</a>
                        <p class="pull-right">
                        	<b><span class="glyphicon glyphicon-calender"></span> 
                        	</b><?php the_date();?>
                        </p>
                        
                    </div>
                </div>
		</div>
	</div>
</div>