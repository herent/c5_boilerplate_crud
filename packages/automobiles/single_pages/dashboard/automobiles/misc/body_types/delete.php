<?php defined('C5_EXECUTE') or die(_("Access Denied."));

$dh = Loader::helper('concrete/dashboard');
$ih = Loader::helper('concrete/interface');
$disabled = isset($disabled) && $disabled;
?>

<?php echo $dh->getDashboardPaneHeaderWrapper('Delete Body Type', false, 'span6 offset3', false); ?>

	<div class="ccm-pane-body">
		<?php if (!$disabled): ?>
		<h3>Are you sure you wish to permanently delete the following body type?</h3>
		<?php endif ?>
	
		<table class="form-table">
			<tr>
				<td class="right">Name:</td>
				<td><?php echo htmlentities($name); ?></td>
			</tr>
		</table>
	</div>
	
	<div class="ccm-pane-footer">
		<form method="post" action="<?php echo $this->action('body_types_delete', (int)$id); ?>" style="margin: 0;">
			<?php echo $token; ?>
			<?php echo $disabled ? '' : $ih->submit('Delete', false, 'right', 'error'); ?>
			<?php echo $ih->button('Cancel', $this->action('body_types_list'), 'left'); ?>
		</form>
	</div>

<?php echo $dh->getDashboardPaneFooterWrapper(); ?>
