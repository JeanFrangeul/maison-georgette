<?php get_header(); ?>
<main>
    <!--TEST GIT-->
    <section class="navigation">
        <h1 class="site__heading"><?php //post_type_archive_title(); 
                                    ?>Ce que yous trouverez chez Maison Georgette</h1>

        <nav class="products-nav navbar navbar-light" style="background-color: #e3f2fd;">
            <?php if (is_post_type_archive('produits')) :

                $args = array(
                    'public'   => true,
                    '_builtin' => false
                );
                $output = 'names'; // or objects
                $operator = 'and';
                $taxonomies = get_taxonomies($args, $output, $operator);
                if ($taxonomies) {
                    foreach ($taxonomies  as $taxonomy) {
                        $terms = get_terms([
                            'taxonomy' => $taxonomy,
                            'hide_empty' => false,
                        ]);
                        foreach ($terms as $term) {
            ?>
                            <li><a href="<?= get_home_url() . '/' . $term->taxonomy . '/' . $term->slug; ?>"><?= $term->name; ?></a></li>
            <?php
                        }
                    }
                }
            endif ?>
        </nav>
    </section>

    <section class="site__produits row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="produit col-3">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2 class="produit__title"><?php the_title(); ?></h2>
                    </a>
                </div>
        <?php endwhile;
        endif; ?>
        <?php the_posts_pagination(); ?>
    </section>
</main>
<?php get_footer(); ?>


<!-- accessoires / cosmétique / épicerie fine / maison / prêt à porter -->