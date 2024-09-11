<?php

/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="email=no,telephone=no,address=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo is_home() ? get_bloginfo('name') : get_the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body>
    <header class="header" id="header">
        <div class="header__wrapper">
            <a href="<?php echo home_url(); ?>" class="header__link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-icon.svg" alt="DUNX" class="img-fluid" width="141" height="36" loading="lazy">
            </a>
            <div class="hamburger" id="js-navIcon">
                <div class="hamburger-icon">
                    <div class="hamburger-icon__left"></div>
                    <div class="hamburger-icon__right"></div>
                </div>
            </div>
            <nav class="nav">
                <div class="nav__wrapper">
                    <?php
                        $nav_link = '';
                        if(is_home()){
                            $nav_link = '#';
                        }else{
                            $nav_link = get_home_url('/').'?scrollto=';
                        }
                    ?><ul class="nav-list">
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>" class="nav-link">TOP</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>about" class="nav-link">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>news" class="nav-link">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>feature" class="nav-link">FEATURE</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>case" class="nav-link">CASE</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>faq" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>price" class="nav-link">PRICE</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $nav_link; ?>contact" class="nav-link">CONTACT</a>
                        </li>
                    </ul>
                    <div class="nav-social">
                        <a href="#" class="nav-social__link" target="_blank" rel="noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/x-icon.png" alt="X" class="img-fluid" width="20" height="20" loading="lazy">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>