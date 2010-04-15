<?php echo form_open('users/login');?>

	<ul>
		<li>
			<label>Email:</label>
			<?php echo form_input('login_email');?>
		</li>
		<li>
			<label>Password:</label>
			<?php echo form_password('login_password');?>
		</li>
	</ul>

	<div class="buttons">
		<button type="submit" class="login_submit">
			Login
		</button>

		<a href="<?php echo site_url('users/forgot_password'); ?>" class="forgot_password">
			Forgot password?
		</a>
	</div>

<?php echo form_close();?>