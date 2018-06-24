<?php
	$facebook = get_field('facebook', 'option');
	$instagram = get_field('instagram', 'option');
	$youtube = get_field('youtube', 'option');
	$spotify = get_field('spotify', 'option');
	$soundcloud = get_field('soundcloud', 'option');
	if($facebook || $instagram || $youtube || $spotify || $soundcloud):
?>
<div class="social-links">
	<?php if ($facebook): ?>
		<a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
	<?php endif; ?>
	<?php if ($instagram): ?>
		<a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a>
	<?php endif; ?>
	<?php if ($youtube): ?>
		<a href="<?php echo $youtube ?>"><i class="fa fa-youtube"></i></a>
	<?php endif; ?>
	<?php if ($spotify): ?>
		<a href="<?php echo $spotify ?>"><i class="fa fa-spotify"></i></a>
	<?php endif; ?>
	<?php if ($soundcloud): ?>
		<a href="<?php echo $soundcloud ?>"><i class="fa fa-soundcloud"></i></a>
	<?php endif; ?>
</div>
<?php endif; ?>