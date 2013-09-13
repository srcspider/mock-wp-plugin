<?php defined('ABSPATH') or die;
	/* @var MockprjFormField $field */
	/* @var MockprjForm $form */
	/* @var mixed $default */
	/* @var string $name */
	/* @var string $idname */
	/* @var string $label */
	/* @var string $desc */
?>

<tr valign="top">
	<th scope="row">
		<?php echo $label ?>
	</th>
	<td>
		<fieldset>

			<legend class="screen-reader-text">
				<span><?php echo $label ?></span>
			</legend>

			<?php foreach ($field->getmeta('options', array()) as $fieldname => $conf): ?>
				<?php echo $form->field($fieldname, $conf)->render() ?>
				<br/>
			<?php endforeach; ?>

			<?php if ($field->hasmeta('note')): ?>
				<small>
					<em>(<?php echo $field->getmeta('note') ?>)</em>
				</small>
			<?php endif; ?>

		</fieldset>
	</td>
</tr>