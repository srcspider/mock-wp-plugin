<?php
	$templatepath = pixcore::pluginpath().'views/form-partials/';
	$coretemplatepath = pixcore::corepath().'views/form-partials/';
	$config = include pixcore::pluginpath().'plugin-config'.EXT;

	// invoke processor
//	$processor = pixcore::processor();
//	$status = $processor->post_check();

	$status = array('show_form' => true); // @debug hardcoded test value
?>

<?php if ($status['show_form']): ?>

	<div class="wrap">

		<div id="icon-options-general" class="icon32"><br></div>

		<h2>Sample Plugin</h2>

		<?php
			$f = pixcore::form($config);
//			$f->register_errors($processor->errors());
			$f->addtemplatepath($coretemplatepath.'fields');
			$f->addtemplatepath($templatepath.'fields');
		?>

		<?php echo $f->startform() ?>

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

	</div>

<?php endif; ?>
