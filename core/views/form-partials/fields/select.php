<?php defined('ABSPATH') or die;
	/* @var PixcoreFormField $field */
	/* @var PixcoreForm $form */
	/* @var mixed $default */
	/* @var string $name */
	/* @var string $idname */
	/* @var string $label */
	/* @var string $desc */

	// [!!] the counter field needs to be able to work inside other fields; if
	// the field is in another field it will have a null label

	$selected = $form->autovalue($name, $default);

	$attrs = array
		(
			'id' => $idname,
			'name' => $name,
		);
?>

<select <?php echo $field->htmlattributes() ?>>
	<?php foreach ($this->getmeta('options', array()) as $key => $label): ?>
		<option <?php if ($key == $selected): ?>selected<?php endif; ?>
				value="<?php echo $key ?>">
			<?php echo $label ?>
		</option>
	<?php endforeach; ?>
</select>
