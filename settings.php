<?php
  require_once("partials/header1.php");
?>
    <div class="row first firstRow">
        <div class="col-md-6">
            		<!-- Form for updating profile information, changing password, and managing notifications -->
		<form>
			<h2>Profile Information</h2>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" class="form-control mb-3">

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" class="form-control mb-3">

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" class="form-control mb-3">

			<h2>Password</h2>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" class="form-control mb-3">

			<label for="confirm-password">Confirm Password:</label>
			<input type="password" id="confirm-password" name="confirm-password" class="form-control mb-3">

			<h2>Notifications</h2>
			
			<input type="checkbox" id="email_notifications" name="email_notifications" value="email_notifications">
                <label for="email_notifications">Email Notifications</label><br>
                <input type="checkbox" id="sms_notifications" name="sms_notifications" value="sms_notifications">
                <label for="sms_notifications">SMS Notifications</label><br>

			<input type="submit" value="Update" class="btn btn-primary btn-lg">
		</form>
        </div>
        <div class="col-md-6">
            		<!-- Form for updating payment information -->
		
			<h2>Payment Information</h2>
			<form>
				<label for="card-number">Card Number:</label>
				<input type="text" id="card-number" name="card-number" class="form-control mb-3">

				<label for="expiration-date">Expiration Date:</label>
				<input type="date" id="expiration-date" name="expiration-date" class="form-control mb-3">

				<label for="cvv">CVV:</label>
				<input type="text" id="cvv" name="cvv" class="form-control mb-3">

				<input type="submit" value="Update" class="btn btn-primary btn-lg">
			</form>
		
        </div>
    </div>
    <div class="row second">
        <div class="col-md-6">
            		<!-- Options for enabling two-factor authentication or changing security questions -->
		
			<h2>Security</h2>
			<label for="two-factor-authentication">Enable Two-Factor Authentication:</label>
			<input type="checkbox" id="two-factor-authentication" name="two-factor-authentication">

			<label for="security-questions">Security Questions:</label>
			<select id="security-questions" name="security-questions" class="form-control mb-3">
				<option value="What is your mother's maiden name?">--Select a question--</option>
        <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
				<option value="What is your favorite color?">What is your favorite color?</option>
				<option value="What was the name of your first pet?">What was the name of your first pet?</option>
			</select>

			<label for="security-answer">Security Answer:</label>
			<input type="text" id="security-answer" name="security-answer" class="form-control mb-3">

			<input type="submit" class="btn btn-primary btn-lg">
        </div>
    </div>
  
  
    <?php
      require_once("partials/footer.php");
    ?>