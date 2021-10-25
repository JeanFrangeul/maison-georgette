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

        <nav class="desktop-display d-flex col-12">

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
        </nav>
    </header>