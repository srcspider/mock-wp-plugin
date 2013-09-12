<?php
	$config = include pixcore::pluginpath().'plugin-config'.EXT;

	// invoke processor
	$processor = pixcore::processor($config);
	$status = $processor->status();
	$errors = $processor->errors();
?>

<style>
	
	/*
		THIS IS JUST FOR THE EXAMPLE
		Please do not place styles like this.
	*/

	.field-error {
		color: red  !important;
	}
	input[type="number"].field-error {
		border-color: lightcoral !important;
	}

</style>

<div class="wrap">

	<div id="icon-options-general" class="icon32"><br></div>

	<h2>Mock WP Plugin</h2>

	<?php if ($status['state'] == 'nominal'): ?>

		<?php if ( ! empty($errors)): ?>
			<br/>
			<p class="update-nag">
				<strong>Unable to save settings.</strong>
				Please check the fields for errors and typos.
			</p>
		<?php endif; ?>

		<?php echo $f = pixcore::form($config, $processor) ?>

			<h3 style="display: none">General Settings</h3>

			<table class="form-table">

				<?php echo $f->field('article_settings_sample')
					->setmeta('note', 'These settings may be overridden for individual articles.')
					->render() ?>

				<?php echo $f->field('other_comment_settings')
					->render() ?>

			</table>

			<h3>Advanced Settings</h3>

			<?php /* # sample block ?>

				<?php # HowTo: show all entries defined in the configuration ?>
				<?php echo $f->fieldtemplate
					(
						$coretemplatepath.'linear'.EXT,
						array('fields' => array_keys($config['fields']))
					) ?>

			<?php //*/# end sample block ?>

			<button type="submit" class="button button-primary">
				Save Changes
			</button>

		<?php echo $f->endform() ?>

	<?php elseif ($status['state'] == 'error'): ?>

		<h3>Critical Error</h3>

		<p><?php echo $status['message'] ?></p>

	<?php endif; ?>

</div>