<?php session_start() ?>
<div class="container-fluid">
	<form action="" id="signup-frm">
		<div class="form-group">
			<input type="text" name="first_name" required="" class="form-control-plaintext" placeholder="First name: ">
		</div>
		<div class="form-group">
			 
			<input type="text" name="last_name" required="" class="form-control-plaintext" placeholder="Last name: ">
		</div>
		<div class="form-group">
			 
			<input type="text" name="mobile" required="" class="form-control-plaintext" placeholder="Contact: ">
		</div>
		<div class="form-group">
			 
			<textarea cols="30" rows="3" name="address" required="" type="text" class="form-control-plaintext" placeholder="Address: "></textarea>
		</div>
		<div class="form-group">
			 
			<input type="email" name="email" required="" class="form-control-plaintext" placeholder="Email: ">
		</div>
		<div class="form-group">
			 
			<input type="password" name="password" required="" class="form-control-plaintext" placeholder="Password: ">
		</div>
		<button class="btn btn-primary btn-xl js-scroll-trigger">Create</button>
	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		$('#signup-frm button[type="submit"]').attr('disabled',true).html('Saving...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');
				}
			}
		})
	})
</script>