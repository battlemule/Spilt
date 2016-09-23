<!--
    Spilt Clothing - index.php
    Designed and Coded by Robert Willis.
    Version 2.0. Updated 23 September 2016.
-->

<!-- Get Header -->
<?php get_header(); ?>

<!-- Main Content -->
<div id="main">

    <!-- If posts exist -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <!-- Get title -->
            <h1><a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a></h1>

           <!-- Create content div and fill with post content -->
           <div class="entry-content">
               <?php the_content(); ?>
           </div>
        </article>

    <!-- Keep filling while posts exist -->
    <?php endwhile; else: ?>

        <!-- Print error if no posts found -->
        <h2>Not Found</h2>
        <p>Sorry, no posts we're found.</p>
    <?php endif; ?>

<!-- End content -->
</div>

<!-- Get Footer -->
<?php get_footer(); ?>