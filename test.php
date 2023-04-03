https://github.com/SamVisual/Display-meta-box-in-frontend.git
<?php 
    $custom_meta_key = 'custom_meta_key';
    $field_label = 'Feld-Label';
    $post_id = get_the_ID();
    $default_value = '';

    $meta_value = get_post_meta( $post_id, $custom_meta_key, true );
    $output = $meta_value ? $meta_value : $default_value;
?>
<p><?php echo esc_html( $field_label ); ?>: <?php echo esc_html( $output ); ?></p>
