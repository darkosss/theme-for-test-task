<?php
/**
 * Block Name: Darko's Test Block
 *
 * Description: Displays the test block.
 */

// The block attributes
$block = $args['block'];

// The block data
$data = $args['data'];

// The block ID
$block_id = $args['block_id'];

// The Image

// The block styles and classes
$block_style = $args['block_style'];
$classes = $args['classes']
?>

<!-- front-end template -->
<?php
printf(
    '<section class="%s"%s style="'.$block_style.'">',
    esc_attr( join( ' ', $classes ) ),
    ! empty( $block['anchor'] ) ? ' id="' . esc_attr( sanitize_title( $block['anchor'] ) ) . '"' : '',
);

if ( $data['test_block_title']) {
    echo "<h1>" . $data['test_block_title'] . "</h1>";
}

if( have_rows('test_list_items') ):
    echo "<ul>";

    while ( have_rows('test_list_items') ) : the_row();
		// Using get_sub_field to get the data from repeater
        $item_image = get_sub_field('test_list_item_image');
        $item_title = get_sub_field('test_list_item_title');
        $item_content = get_sub_field('test_list_item_content');
        $item_link = get_sub_field('test_list_item_button_link');
        echo '<li class="test-list-item"><span class="list-item-content">';
            if ( $item_image ) {
                echo "<img src='$item_image'/>";
            }
            if ( $item_title ) {
                echo "<h3 class='test-item-title'>" . $item_title . "</h3>";
            }
            if ( $item_content ) {
                echo "<p>" . $item_content . "</p>";
            }
            // Using the Link Array return type for button
            if( $item_link ) {
                $link_url = $item_link['url'];
                $link_title = $item_link['title'];
                $link_target = $item_link['target'] ? $item_link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php };

        echo '</span></li>';

    endwhile;

    echo "</ul>";

endif;
