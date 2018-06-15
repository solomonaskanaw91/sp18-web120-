<?php include "finial-config.php"?>
<?php include "includes/header1.php"?>
<title>$title</title>
<main>
<aside>
<div class="col-md-one-half">
<div class="second-column-content">
<div class="form-container">
									<!-- START HTML FORM -->
	<form action="contact.php" method="post">

    <div class="input-container">
        <label for="name">Your Name</label>
        <input type="text" name="Name" id="name" title="Name is required" required />
    </div>

    <div class="input-container">
        <label for="email">Your Email</label>
        <input type="email" name="Email" id="email" title="A valid email is required" required />
    </div>

    <div class="input-container">
        <label for="phone">Your Phone</label>
        <input type="tel" name="phone" id="phone" title="A phone number is optional" />
    </div>

	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div class="input-container">	
	   <label for="comments">Your Comments:</label>
        <textarea name="Comments" id="comments"></textarea>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6Lc2qV4UAAAAANtNxJvSofmWCrn5XanTQ25WB7Ir"></div> 
	<div>
		<!--<input type="submit" value="submit" />-->
        <button type="submit" class="button">Submit Info</button>
	</div>
    </form>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
    </div>
    </div>
    </div>
</aside>
</main>
<?php include "includes/footer.php"?>