<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>



        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <a href="<?= home_url(); ?>" class="navbar-brand">Maison Georgette</a>

        <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
          </svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <?php 
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
                            <li><a class="nav-link" href="<?= get_home_url() . '/' . $term->taxonomy . '/' . $term->slug; ?>"><?= $term->name; ?></a></li>
                <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>


                <!--<?php foreach (getMainMenuItems()as $link) {?>
                <li class="nav-item">
                    <a href="<?= $link->url ?>" class="nav-link"><?= $link->title ?></a>
                </li>
                <?php } ?>-->

                <!--<nav class="desktop-display d-flex col-12">

            <ul class="main-menu m-auto col-4">
            <?php $MenuItems = array_chunk(getMainMenuItems(), count(getMainMenuItems()) / 2);
                foreach ($MenuItems[0] as $menuItem) : ?>
                    <?php if ($_SERVER['HTTP_REFERER'] === $menuItem->url) { ?>
                        <li class="main-menu__item header-active">
                            <a href="<?= $menuItem->url; ?>"><?= $menuItem->title; ?></a>
                        </li>
                    <?php } else { ?>
                        <li class="main-menu__item">
                            <a href="<?= $menuItem->url; ?>"><?= $menuItem->title; ?></a>
                        </li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>

            <a class="col-4" href="<?php echo home_url('/'); ?>">
                <img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo">
            </a>

            <ul class="main-menu m-auto col-4">
                <?php foreach ($MenuItems[1] as $menuItem) : ?>
                    <?php if ($_SERVER['HTTP_REFERER'] === $menuItem->url) { ?>
                        <li class="main-menu__item header-active">
                            <a href="<?= $menuItem->url; ?>"><?= $menuItem->title; ?></a>
                        </li>
                    <?php } else { ?>
                        <li class="main-menu__item">
                            <a href="<?= $menuItem->url; ?>"><?= $menuItem->title; ?></a>
                        </li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
        </nav>-->
    </nav>
    </header>