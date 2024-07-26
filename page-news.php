<?php get_header(); ?>

<article class="max-w-screen-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-4xl font-bold text-center mb-8 text-indigo-700"><?php the_title(); ?></h1>

    <div class="mt-6">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => $paged,
            'order' => 'DESC',
            'orderby' => 'date'
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
        ?>
            <ul class="space-y-6">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <li class="bg-white border-l-4 border-indigo-500 shadow-md rounded-r-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-102">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-indigo-700 mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-indigo-500 transition-colors duration-200">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <p class="text-sm text-gray-500 mb-4"><?php the_time('Y年m月d日'); ?></p>
                        <div class="prose max-w-none text-gray-600 mb-4">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors duration-200">
                            Read more
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>

            <div class="mt-12">
                <?php
                echo paginate_links(array(
                    'total' => $news_query->max_num_pages,
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                    'type' => 'list',
                    'class' => 'pagination',
                ));
                ?>
            </div>

            <?php wp_reset_postdata();
        else :
            ?>
            <p class="text-center text-gray-500">No posts found.</p>
        <?php endif; ?>
    </div>
</article>

<style>
    .pagination {
        @apply flex justify-center items-center space-x-2;
    }
    .pagination .page-numbers {
        @apply px-3 py-2 bg-white border border-gray-300 text-indigo-600 rounded-md hover:bg-indigo-50 transition-colors duration-200;
    }
    .pagination .current {
        @apply bg-indigo-600 text-white border-indigo-600;
    }
</style>

<?php get_footer(); ?>