<?php get_header() ?>

    <article class="max-w-screen-lg mx-auto ">

        <h1 class="text-3xl font-semibold"><?php the_title() ?></h1>
        <div class="mt-4">
            <p class="m-2 bg-color3">ABOUT!!</p>
            <?php echo do_shortcode('[mwform_formkey key="36"]'); // ショートコードをここに追加 ?>
        </div>

    </article>

<?php get_footer() ?>
