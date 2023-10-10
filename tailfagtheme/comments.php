<?php
$comments_args = array(
	'avatar_size' => 64, // Avatar dimensions
	'style'       => 'div', // Avatar style (can be 'div', 'circle'...)
);
wp_list_comments($comments_args);
?>
