<?php

global $wpdb;

$attachments = $wpdb->get_results("
    SELECT p.ID, pp.post_title
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->posts} pp ON p.post_parent = pp.ID
    LEFT JOIN {$wpdb->postmeta} pm ON pm.post_id = p.ID 
    AND pm.meta_key = '_wp_attachment_image_alt' 

    WHERE p.post_type = 'attachment' 
    AND p.post_parent != 0 
    AND pm.meta_value IS NULL

    ORDER BY pp.post_date DESC
    LIMIT 1000
");
 
foreach($attachments as $attachment) {
    add_post_meta( $attachment->ID, '_wp_attachment_image_alt', get_bloginfo('site_name') . ' - '. $attachment->post_title );
}
