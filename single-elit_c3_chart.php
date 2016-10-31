<?php  

global $post;

$fields = get_fields( $post->ID );


?>

<div class="chart">
  <?php echo '<pre>'; var_dump($fields); echo '</pre>'; die(); ?>
</div>

