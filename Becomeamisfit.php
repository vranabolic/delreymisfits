<?php
print'
		<h1>Become a Misfit</h1>
		<div id="Misfits">
			<form action="send_data.php" id="contact_form" name="contact_form" method="POST">
				<label for="fname">First Name *</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required>

				<label for="lname">Last Name *</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
				
				<label for="email">Your E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

				<label for="country">Country</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>';

?>