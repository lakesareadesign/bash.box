<?php

/**
* The template for displaying the custom fields.
* You can override this file in your active theme.
*
* @package Classifieds
* @subpackage UI Front
* @since Classifieds 2.0
*/

global $post_ID;

$prefix = 'ct_';
$custom_fields = get_option('ct_custom_fields');

if ( !isset( $post->ID ) )
$post->ID = 0;

foreach ( $custom_fields as $custom_field ):

$output = false;

if (is_array($custom_field['object_type'])){
	foreach ( $custom_field['object_type'] as $custom_field_object_type ){
		if ( $custom_field_object_type == 'classifieds' ){
			$output = true; break;
		}
	}
}

if($output){ ?>

	<?php if ( $custom_field['field_type'] == 'text' ): ?>
	<label for="<?php echo ( $prefix . $custom_field['field_id'] ); ?>"><?php echo ( $custom_field['field_title'] ); ?></label>
	<input type="text" name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" value="<?php echo ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true )); ?>" />
	<p class="description"><?php echo ( $custom_field['field_description'] ); ?></p>
	<?php endif; ?>

	<?php if ( $custom_field['field_type'] == 'textarea' ): ?>
	<label for="<?php echo ( $prefix . $custom_field['field_id'] ); ?>"><?php echo ( $custom_field['field_title'] ); ?></label>
	<textarea name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" rows="5" cols="40" ><?php echo ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true )); ?></textarea>
	<p class="description"><?php echo ( $custom_field['field_description'] ); ?></p>
	<?php endif; ?>

	<?php if ( $custom_field['field_type'] == 'radio' ): ?>
	<label for="<?php echo ( $prefix . $custom_field['field_id'] ); ?>"><?php echo ( $custom_field['field_title'] ); ?></label>
	<?php if ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true )): ?>
	<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
	<input type="radio" name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" value="<?php echo ( $field_option ); ?>" <?php if ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true ) == $field_option ) echo ( 'checked="checked"' ); ?> /> <?php echo ( $field_option ); ?><br />
	<?php endforeach; ?>
	<?php else: ?>
	<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
	<input type="radio" name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" value="<?php echo ( $field_option ); ?>" <?php if ( $custom_field['field_default_option'] == $key ) echo ( 'checked="checked"' ); ?> /> <?php echo ( $field_option ); ?><br />
	<?php endforeach; ?>
	<?php endif; ?>
	<p class="description"><?php echo ( $custom_field['field_description'] ); ?></p>
	<?php endif; ?>

	<?php if ( $custom_field['field_type'] == 'checkbox' ): ?>
	<label for="<?php echo ( $prefix . $custom_field['field_id'] ); ?>"><?php echo ( $custom_field['field_title'] ); ?></label>
	<?php if ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true )): ?>
	<?php $field_values = get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true ); ?>
	<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
	<input type="checkbox" name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>][<?php echo ( $key ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" value="<?php echo ( $field_option ); ?>" <?php if ( $field_values[$key] == $field_option ) echo ( 'checked="checked"' ); ?> /> <?php echo ( $field_option ); ?><br />
	<?php endforeach; ?>
	<?php else: ?>
	<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
	<input type="checkbox" name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>][<?php echo ( $key ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" value="<?php echo ( $field_option ); ?>" <?php if ( $custom_field['field_default_option'] == $key ) echo ( 'checked="checked"' ); ?> /> <?php echo ( $field_option ); ?><br />
	<?php endforeach; ?>
	<?php endif; ?>
	<p class="description"><?php echo ( $custom_field['field_description'] ); ?></p>
	<?php endif; ?>

	<?php if ( $custom_field['field_type'] == 'selectbox' ): ?>
	<label for="<?php echo ( $prefix . $custom_field['field_id'] ); ?>"><?php echo ( $custom_field['field_title'] ); ?></label>
	<select name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>">
		<?php if ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true )): ?>
		<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
		<option value="<?php echo ( $field_option ); ?>" <?php if ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true ) == $field_option ) echo ( 'selected="selected"' ); ?> ><?php echo ( $field_option ); ?></option>
		<?php endforeach; ?>
		<?php else: ?>
		<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
		<option value="<?php echo ( $field_option ); ?>" <?php if ( $custom_field['field_default_option'] == $key ) echo ( 'selected="selected"' ); ?> ><?php echo ( $field_option ); ?></option>
		<?php endforeach; ?>
		<?php endif; ?>
	</select>
	<p class="description"><?php echo ( $custom_field['field_description'] ); ?></p>
	<?php endif; ?>

	<?php if ( $custom_field['field_type'] == 'multiselectbox' ): ?>
	<label for="<?php echo ( $prefix . $custom_field['field_id'] ); ?>"><?php echo ( $custom_field['field_title'] ); ?></label>
	<select name="custom_fields[<?php echo ( $prefix . $custom_field['field_id'] ); ?>][]" id="<?php echo ( $prefix . $custom_field['field_id'] ); ?>" multiple="multiple" class="ct-select-multiple">
		<?php if ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true )): ?>
		<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
		<option value="<?php echo ( $field_option ); ?>"
			<?php foreach ( get_post_meta( $post->ID, $prefix . $custom_field['field_id'], true ) as $field_value ): ?>
			<?php if ( $field_value == $field_option ) { echo ( 'selected="selected"' ); break; } ?>
		<?php endforeach; ?> ><?php echo ( $field_option ); ?></option>
		<?php endforeach; ?>
		<?php else: ?>
		<?php foreach ( $custom_field['field_options'] as $key => $field_option ): ?>
		<option value="<?php echo ( $field_option ); ?>" <?php if ( $custom_field['field_default_option'] == $key ) echo ( 'selected="selected"' ); ?> ><?php echo ( $field_option ); ?></option>
		<?php endforeach; ?>
		<?php endif; ?>
	</select>
	<p class="description"><?php echo ( $custom_field['field_description'] ); ?></p>
	<?php endif;
}
?>

<?php endforeach; ?>