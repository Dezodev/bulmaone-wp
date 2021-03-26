<?php

$templates = ['archive.twig', 'index.twig'];

$context = Timber::context();

$context['title'] = get_the_archive_title();
$context['description'] = get_the_archive_description();
$context['posts'] = new Timber\PostQuery();

Timber::render( $templates, $context );