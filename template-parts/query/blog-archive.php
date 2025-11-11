<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $loop = new WP_Query(
                   array(
                       'post_type' => 'post',
                       'posts_per_page' => 10,
                       'paged' => $paged,
                       'orderby' => 'desc',
                   )
               );
 ?>

 <div class="w-dyn-list" udy-collection="archive-blog">
                 <?php if ( $loop->have_posts() ) : ?><div role="list" class="w-dyn-items">
                   <?php while ($loop->have_posts()) : $loop->the_post(); global $post; ?><div role="listitem" class="w-dyn-item">
                     <div class="div-block-81">
                       <h3 class="blog-title"><a href="<?php the_permalink() ?>" class="title-blog"><?php the_title() ?></a></h3>
                       <div class="div-block-79">
                         <div id="w-node-_584e1694-6209-8697-7cea-a4e1e7f5ff65-71d0fd5e" class="div-block-180"><img src="<?php echo udesly_get_image(_u('in56115e89', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in56115e89', 'img'))->alt ?>" class="image-71" data-img="in56115e89" srcset="<?php echo udesly_get_image(_u('in56115e89', 'img'))->srcset ?>">
                           <div class="text-block-70"><?php echo get_the_author_meta('display_name', $author_id); ?></div>
                           <div class="div-block-151 _1"></div>
                         </div>
                         <div class="div-block-180">
                           <div class="text-block-70" ><?php $category_detail=get_the_category($post->ID);//$post->ID
                           $sa1=0;
                           foreach($category_detail as $cd){
                             if($sa1>0){
                               echo '<span style="margin-left: 5px; margin-right: 5px;">,</span>';
                             }
                             echo '<a href="'.get_category_link($cd->term_id).'" class="blog-cat"> '.$cd->cat_name.'</a>';
                             $sa1++;
                           } ?></div>
                           <div class="div-block-151">
                           </div>
                         </div>
                         <div id="w-node-_11f00b53-9c57-a341-8647-e08eba90949d-71d0fd5e" class="div-block-180"><img src="<?php echo udesly_get_image(_u('i723c5eea', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i723c5eea', 'img'))->alt ?>" class="image-72" data-img="i723c5eea" srcset="<?php echo udesly_get_image(_u('i723c5eea', 'img'))->srcset ?>">
                           <div class="text-block-71"><?php echo get_the_date(); ?></div>
                         </div>
                       </div>
                       <div class="div-block-153"></div>
                       <div class="div-block-80">
                         <img src="<?php echo udesly_get_image()->src ?>" loading="lazy" alt="<?php echo udesly_get_image()->alt ?>" class="image-56" srcset="<?php echo udesly_get_image()->srcset ?>">
                         <div class="div-block-162">
                           <!-- <div class="text-block-71" style="padding-left:0px;padding-bottom:10px;">Share:</div> -->
                           <div class="text-block-89"><?php the_excerpt() ?></div>
                         </div>
                       </div>
                       <div class="div-block-152">
                         <a href="<?php the_permalink() ?>" class="winning-button more-results-btn blog w-button">CONTINUE READING</a>
                       </div>
                     </div>
                   </div><?php endwhile; ?>
                 </div>
                 <?php else : ?><div class="w-dyn-empty">
                   <div>No items found.</div>
                 </div><?php endif; ?>
                 <?php if ($loop->max_num_pages > 0) : ?>
                   <?php  wp_pagenavi( array( 'query' => $loop ) ); ?>
                 <?php endif  ?>
               </div>




 <section id="primary" class="site-content">
 <div id="content" role="main">

 <?php



 // Check if there are any posts to display
 if ( $loop->have_posts() ) : ?>

 <header class="archive-header">
 <h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>



 </header>

 <?php

 // The Loop
 while ($loop->have_posts()) : $loop->the_post();  ?>
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

 <div class="entry">
 <?php the_excerpt(); ?>

  <p class="postmetadata"><?php
   comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
 ?></p>
 </div>

 <?php endwhile;

 else: ?>
 <p>Sorry, no posts matched your criteria.</p>


 <?php endif; ?>
   <?php  wp_pagenavi( array( 'query' => $loop ) );?>
 <?php //wp_reset_query(); ?>


 </div>
 </section>
