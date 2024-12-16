<?php

/**
 * Change the Focus Keyword Limit
 */
add_filter( 'rank_math/focus_keyword/maxtags', function() {
    return 10; // Number of Focus Keywords. 
});

/**
 * Add <meta name="keywords" content="focus keywords">.
 */
add_filter( 'rank_math/frontend/show_keywords', '__return_true');

/**
 * Allow changing the meta keywords from the default Focus Keywords.
 *
 * @param string $keywords Keywords.
 */
add_filter( 'rank_math/frontend/keywords', function( $keywords ) {
 return $keywords;
});