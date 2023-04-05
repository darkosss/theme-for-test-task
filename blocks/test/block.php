<?php
/**
 * Darko's Test Block
 */

// $data - expose to render template
$data = array(
	'test_block_title' => get_field( 'test_block_title' )
);

// Dynamic block ID
$block_id = 'test-' . $block['id'];

// Block editor custom ID
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}
// Block classes
$classes = [ 'block-test' ];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['class_name'] ) );
}
if ( ! empty( $block['align_text'] ) ) {
	$classes[] = 'has-text-align-'.$block['align_text'];
}
if ( ! empty( $block['backgroundColor'] ) ) {
	$classes[] = 'has-background';
	$classes[] = 'has-' . $block['backgroundColor'] . '-background-color';
}
if ( ! empty( $block['style']['color']['background'] ) ) {
    $classes[] = 'has-background';
    $block_style = 'background-color:'. $block['style']['color']['background'] . ';';
}
if ( ! empty( $block['textColor'] ) ) {
	$classes[] = 'has-text-color';
	$classes[] = 'has-' . $block['textColor'] . '-color';
}
/** 
 * Pass the block data into the template part
 */ 
get_template_part(
	'blocks/test/template',
	null,
	array(
		'block'     	=> $block,
		'is_preview' 	=> $is_preview,
		'post_id'    	=> $post_id,
		'data'			=> $data,
        'block_id'		=> $block_id,
		'block_style'	=> $block_style,
		'classes'		=> $classes
	)
);