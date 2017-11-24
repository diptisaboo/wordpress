<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_parent_css')):

    function chld_thm_cfg_parent_css() {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array('unite-bootstrap', 'unite-icons'));
    }

endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);



add_shortcode('film', 'get_films');

function get_films($atts, $content) {


    $query = new WP_Query(array(
        'post_type' => 'films',
        'posts_per_page' => 5,
        'order' => 'ASC',
        'orderby' => 'title',
    ));


    if ($query->have_posts()) {
        $html = "";
        while ($query->have_posts()) : $query->the_post();
            $html .= '<a href=' . get_permalink() . ' > ' . get_the_title() . '</a></br>';
        endwhile;
    }

    return html_entity_decode($html);
}

// Display content on page using hook
function films_content_filter($content) {

    if (is_page(13)) {
        $query = new WP_Query(array(
            'post_type' => 'films',
            'posts_per_page' => '',
            'order' => 'ASC',
            'orderby' => 'title',
        ));

        if ($query->have_posts()) {
            $html = "";
            $genre = "";
            while ($query->have_posts()) : $query->the_post();
                global $post;
                $html .= '<div class ="col-sm-4"><b><a href=' . get_permalink() . ' > ' . get_the_title() . '</a></b>';
                $ticket_price = get_field('ticket_price', $post->ID, '');
                $release_date = get_field('release_date', $post->ID, '');
                $html .= "<p>Ticket Price: " . $ticket_price . " </p>";
                $html .= "<p>Release date: " . $release_date . '</p>';
                $genre = wp_get_post_terms($post->ID, 'genre');
                $country = wp_get_post_terms($post->ID, 'country');

                $html .= '<b>Genre:</b> ';
                foreach ($genre as $k => $v) {
                    $html .= $v->name . '  ';
                }
                $html .= '</br>';
                $html .= '<b>Country:</b> ';
                foreach ($country as $k => $v) {
                    $html .= $v->name . '  ';
                }
                $html .= '</br>';
                $html .= '</div>';
            endwhile;
        }
        return $html;
    }
}

add_filter('the_content', 'films_content_filter');
// END ENQUEUE PARENT ACTION
