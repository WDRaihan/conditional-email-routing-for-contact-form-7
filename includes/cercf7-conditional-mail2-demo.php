<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add the editor tab
add_filter( 'wpcf7_editor_panels', 'cercf7_add_editor_panel' );

function cercf7_add_editor_panel( $panels ) {
	$panels['cercf7-mail-2-panel'] = array(
		'title'    => __( 'Conditional Mail 2 (Pro)', 'cercf7' ),
		'callback' => 'cercf7_render_editor_panel',
	);
	return $panels;
}
function cercf7_render_editor_panel( $post ) {
	?>
	<div class="cercf7-pro-box">
		<a target="_blank" class="button" style="background: #20b620;color: #fff;border-color: #20b620;padding: 3px 30px;" href="https://atplugins.com/products/conditional-email-routing-for-contact-form-7/">Buy MailRoute Pro</a>
	</div>
	<div class="cercf7-rountings cercf7-mail2-rountings">
		<h2><?php _e( 'Conditional Mail 2 Rules', 'cercf7-pro' ); ?></h2>
		<p><?php _e( 'Define rules to override the auto-responder (Mail 2) based on user input.', 'cercf7-pro' ); ?></p>

		<div class="cercf7-field-checkbox" style="margin: 20px 0; padding: 15px; background: #f8f9fa; border-left: 4px solid #0073aa;">
			<input type="checkbox" value="1">
			<label style="font-weight: 700; font-size: 1.1em; color: #1d2327;">
				<?php _e( 'Enable Conditional Mail 2', 'cercf7-pro' ); ?>
			</label>
			<p class="description" style="margin-top: 5px;">
				<?php _e( 'Check this to enable conditional overrides for the Mail 2 (Auto-responder) feature.', 'cercf7-pro' ); ?>
			</p>
		</div>
		<div class="cercf7-field-checkbox" style="margin: 15px 0;">
			<input type="checkbox" id="cercf7_mail2_skip_default" value="">
			<label for="cercf7_mail2_skip_default" style="font-weight: 600; color: #d63638;">
				<?php _e( 'Skip default Mail 2 if no conditions match', 'cercf7-pro' ); ?>
			</label>
			<p class="description" style="margin-top: 5px;">
				<?php _e( 'If checked, Mail 2 will only be sent if one of the rules below is met. If no rules match, no email will be sent, even if "Use Mail (2)" is checked in the Mail tab.', 'cercf7-pro' ); ?>
			</p>
		</div>

		<div id="cercf7-rules-container" style="margin-top: 25px;">
			<?php cercf7_render_rule_card(); ?>
		</div>

		<div style="margin-top: 20px;">
			<button type="button" class="button cercf7_add_role" id="cercf7-add-rule" style="background: #02bd02; color: #fff; border-color: #02bd02; font-weight: 500;">
				<?php _e( '+ Add New Rule', 'cercf7-pro' ); ?>
			</button>
		</div>
	</div>
	<?php
}

function cercf7_render_rule_card() {
	?>
	<div class="cercf7-rule-card">
		<a href="#" class="cercf7-remove-rule"><?php _e( 'Remove', 'cercf7-pro' ); ?></a>
		<h3><?php _e( 'Rule #', 'cercf7-pro' ); ?><span>1</span></h3>
		<div class="cercf7-grid">
			<div>
				<label class="cercf7-label"><?php _e( 'If Field Name', 'cercf7-pro' ); ?></label>
				<select name="" class="cercf7-full-width">
					<option value=""><?php _e( '-Select form field-', 'cercf7-pro' ); ?></option>
				</select>
			</div>
			<div>
				<label class="cercf7-label"><?php _e( 'Operator', 'cercf7-pro' ); ?></label>
				<select name="" class="cercf7-full-width">
					<option value="equals"><?php _e( 'Equals', 'cercf7-pro' ); ?></option>
					<option value="not_equals"><?php _e( 'Not Equals', 'cercf7-pro' ); ?></option>
					<option value="contains"><?php _e( 'Contains', 'cercf7-pro' ); ?></option>
				</select>
			</div>
			<div>
				<label class="cercf7-label"><?php _e( 'Value', 'cercf7-pro' ); ?></label>
				<input type="text" class="cercf7-full-width">
			</div>
		</div>
		<hr>
		<div style="margin-bottom: 15px;">
			<label class="cercf7-label"><?php _e( 'Override Subject', 'cercf7-pro' ); ?></label>
			<input type="text" name="" value="" class="cercf7-full-width">
		</div>
		<div style="margin-bottom: 15px;">
			<label class="cercf7-label"><?php _e( 'Override Message Body', 'cercf7-pro' ); ?></label>
			<textarea name="" rows="5" class="cercf7-full-width"></textarea>
		</div>
	</div>
	<?php
}
