
<div class="container">


<div class="row">

	<h2>
		Form
	</h2>
	<small>All fields are mandatory</small>
	<p>
		<?php echo validation_errors(); ?>
	</p>
	<br/>
	<br/>

	<form class="form" action="<?php echo site_url('welcome/form_submit') ?>" method="POST">
		
		<div class="form-group">
			<input type="text" class="form-control" value="<?php echo set_value('firstname'); ?>" name="firstname" placeholder="First Name" required/>
			<small class="info"> alphabets only, max 20 chars</small>
			
		</div>

		<div class="form-group">
			<input type="text" class="form-control"  value="<?php echo set_value('lastname'); ?>"  name="lastname" placeholder="Last Name" required/>
			<small> alphabets only, max 20 chars </small>
		</div>

		<div class="form-group">
			<input type="email" class="form-control"  value="<?php echo set_value('email'); ?>"  name="email" placeholder="Email" required/>
			<small>Valid Email</small>
		</div>

		<div class="form-group">
			<input type="password" class="form-control"  value="<?php echo set_value('password'); ?>"  name="password" placeholder="Password" required/>
			<small>Password</small>
		</div>

		<div class="form-group">
			<input type="password" class="form-control" name="confirm"  value="<?php echo set_value('confirm'); ?>"  placeholder="Confirm Password" required/>
			<small>Confirm Password</small>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="code"  value="<?php echo set_value('code'); ?>"  placeholder="Code" required/>
			<small>Numbers only, exact 10</small>
			<p>
				
			</p>
		</div>

		<div class="form-group">
			<input type="text" class="form-control"  value="<?php echo set_value('mobile'); ?>"  name="mobile" placeholder="Mobile Number" required/>
			<small>10 digits, Indian numbers only</small>
		</div>

		<div class="form-group">
			<input type="text" class="form-control"  value="<?php echo set_value('website'); ?>"  name="website" placeholder="Website" required/>
			<small>Valid web address</small>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="address"  value="<?php echo set_value('address'); ?>"  placeholder="IP Address" required/>
			<small>Valid IP address</small>

		</div>

		<div class="form-group">
			<textarea type="text"  class="form-control" name="comment" placeholder="Comment" required><?php echo set_value('comment'); ?></textarea>
			<small>Max : 200 chars, Min : 50 chars</small>

		</div>

		<div class="form-group">
			<input type="submit" value="Submit" class="btn btn-success" />
		</div>


	</form>

</div>

	
</div>
