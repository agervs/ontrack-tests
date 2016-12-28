<?php

	// set survey
	$survey = 'https://goo.gl/forms/LtkEdqPgBZNAvYIv2';
?>



<div class="background_container">
	<div class="holder">
		<img class="logo" src="/img/logo_white.png">
	</div>
	<div class="holder">
		<div class="text-content top_padded">
			<h2 class="tagline">Why wonder during IVF? Know what to expect. Know you're OnTrack™.</h2>
			<p>Without OnTrack™, 15 out of 100 people will make a scheduling or medication mistake during their IVF treatment. The OnTrack™ service puts you back in control and let's you know you're doing everything right.</p>
			<div class="button" id="button1">Learn More</div>
		</div>
		<div class="image-content">
			<img src="/img/macbook_iphone.png">
		</div>
	</div>
</div>
<div class="background_container light_back">
	<div class="holder">
		<div class="image-content left">
			<img src="/img/tilted_iphone.png">
		</div>
		<div class="text-content right">
			<ul class="features">
				<li>
					<img src="/img/multi_platform.png">
					<p>OnTrack™ is a cloud-based web application for helping women engaged in fertility treatment manage their treatment better.</p>
				</li>
				<li>
					<img src="/img/med_management.png">
					<p>OnTrack™ keeps track of your medication supply and tells you when you need to get more based on your pharmacy’s hours.</p>
				</li>
				<li>
					<img src="/img/checklist.png">
					<p>OnTrack™ is your personal guide through the IVF treatment process.</p>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="background_container foot_back">
	<div class="holder bottom_call_to_action">
		<h2 class="tagline">Why wonder during IVF? Know what to expect. Know you're OnTrack™.</h2>
		<div class="button center" id="button2">Learn More</div>
	</div>
</div>
<div class="background_container black_back foot_back">
	<div class="footer">
		<p>&copy; OnTrack LLC, 2016</p>
	</div>
</div>








<script>


	// first button
	$('#button1').click(function(){
		// get redir from php varible
		var r = '<?php echo $survey; ?>';
		// get the id from the php varible
		var id = '<?php echo $user_id ?>';
		// build the action data
		var d1 = {
			'button'	: '1'
		};
		//send it, with redir to go to survey
		sendAction(id, d1, null, r);
	});

	// second button
	$('#button2').click(function(){
		// get redir from php varible
		var r = '<?php echo $survey; ?>';
		// get the id from the php varible
		var id = '<?php echo $user_id ?>';
		// build the action data
		var d1 = {
			'button'	: '2'
		};
		//send it, with redir to go to survey
		sendAction(id, d1, null, r);
	});


</script>