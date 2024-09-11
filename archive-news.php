<?php  
// This should be placed at the very beginning of the file, before any HTML or other output
$terms = get_terms(array(
    'taxonomy'   => 'news_category',
    'hide_empty' => true,  // Fetch only categories with posts
));

// Check if the terms retrieval was successful and not empty
if (!is_wp_error($terms) && !empty($terms)) {
    $first_term = $terms[0];  // Get the first term
    $first_term_link = get_term_link($first_term);  // Get the link for the first term

    // Check for errors in retrieving the term link and perform the redirection
    if (!is_wp_error($first_term_link)) {
        wp_redirect(esc_url($first_term_link));  // Safely redirect to the first term link
        exit;  // Stop further execution of the script
    } else {
        // If there's an error retrieving the term link, redirect to the home page
        wp_redirect(esc_url(get_home_url()));
        exit;  // Ensure script termination after redirection
    }
} else {
    // If there are no terms or an error occurred, also redirect to the home page
    wp_redirect(esc_url(get_home_url()));
    exit;  // Ensure script termination after redirection
}