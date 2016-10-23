<!Doctype html>
<html>
<head>

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

</head>

<body>
    <div id=" container">
        <h1 id="header"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <div id="menubar">
        <ul>
            <li <?php if(is_home()) echo "class=\"current_page_item\""; ?>><a href="/">Startseite</a></li>
            <?php wp_list_pages('title_li='); ?>
        </ul>
    </div>

    <div id="main">

<!-- Ende header.php -->
