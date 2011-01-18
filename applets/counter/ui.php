<div class="vbx-applet">
	<div class="vbx-full-pane">
		<h3>Date</h3>
		<fieldset class="vbx-input-container">
			<input type="text" name="date" class="medium" value="<?php echo AppletInstance::getValue('date',date('m/d/Y')); ?>" />
		</fieldset>
		<h3>If before</h3>
		<p>Use %days% to substitute the number days until the event.</p>
		<fieldset class="vbx-input-container">
			<textarea name="before" class="medium"><?php echo AppletInstance::getValue('before'); ?></textarea>
		</fieldset>
		<h3>If today</h3>
		<fieldset class="vbx-input-container">
			<textarea name="now" class="medium"><?php echo AppletInstance::getValue('now'); ?></textarea>
		</fieldset>
		<h3>If after</h3>
		<p>Use %days% to substitute the number of days since the event.</p>
		<fieldset class="vbx-input-container">
			<textarea name="after" class="medium"><?php echo AppletInstance::getValue('after'); ?></textarea>
		</fieldset>
	</div>
	<h2>Next</h2>
	<p>After responding, continue to the next applet</p>
	<div class="vbx-full-pane">
		<?php echo AppletUI::DropZone('next'); ?>
	</div><!-- .vbx-full-pane -->
</div><!-- .vbx-applet -->
