<?php defined('ABSPATH') or die;
	/* @var MockprjFormField $field */
	/* @var MockprjForm $form */
	/* @var mixed $default */
	/* @var string $name */
	/* @var string $idname */
	/* @var string $label */
	/* @var string $desc */

	// [!!] the counter field needs to be able to work inside other fields; if
	// the field is in another field it will have a null label

	$value = $form->autovalue($name, $default);

	$attrs = array
		(
			'name' => $name,
			'type' => 'number',
			'id' => $idname,
			'value' => $value,
			'step' => 1,
			'class' => array(),
		);

	$is_inline_field = empty($label);

	if ($field->has_errors()) {
		$error_message = $field->one_error();
		$attrs['class'][] = 'field-error';
		$attrs['title'] = "Error: $error_message";
	}
?>

<?php if ($is_inline_field): ?>
	<?php $attrs['class'][] = 'small-text' ?>
	<input <?php echo $field->htmlattributes($attrs) ?> class="small-text" />
<?php else: # standard field ?>
	<label for="<?php echo $idname ?>">
		<input <?php echo $field->htmlattributes($attrs) ?> />
		<?php echo $label ?>
	</label>
<?php endif; ?>
