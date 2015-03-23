<?php
/**
 * @package WordPress
 * @subpackage Matthew
 * Template Name: Admin Panel 
 */
?>

<?php 
	
function options_array() {
	
	# First Key is Options Name
	# Second Option -> Fields 
	
	$options = array(
	'logo' => array(
			'type' => 'text',
			'label' => 'Logo Url',
			'url' => 'logo_url'
		),
	'favicon' => array(
			'type' => 'text',
			'label' => 'Favicon Url',
			'url' => 'favicon_url'
		),
	'comments' => array(
			'type' => 'switch',
			'label' => 'Allow Comments',
			'url' => 'logo_url'
		)
	);
	return $options;
}

?>

<style>
.option_box {
border: 1px solid #eee;
padding: 10px; 
margin-bottom: 10px;
text-align: center;
}
</style>

<div style="width: 600px; margin: 30px auto;">
	<h1>Getting Lazy</h1>
	<?php $options_array = options_array(); ?>
	
	<?php var_dump($options_array); ?>
	
	<br><br>

	<?php foreach( $options_array as $option ) : ?>	
		<div class="option_box">
			<?php if($option[type] == 'text') : ?>
				<label><?php echo $option[label] ?></label>
				<input type="text" name="<?php echo $option[url] ?>" />
			<?php endif ?>
			<?php if($option[type] == 'switch') : ?>
				<label><?php echo $option[label] ?></label>
				<select name="<?php echo $option[url] ?>">
					<option value="yes" >Yes</option>
					<option value="no" >No</option>
				</select>
			<?php endif ?>
		</div>
	<?php endforeach ?> 
</div>