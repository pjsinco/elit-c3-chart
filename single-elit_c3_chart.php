<?php  

global $post;

$fields = get_fields( $post->ID );
echo '<pre>'; var_dump($fields); echo '</pre>'; die();


