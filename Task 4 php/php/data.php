<html>
<title>data</title>
<head><link rel="stylesheet" href="./css/bootstrap.min.css">
	<meta http-equiv="refresh" content="4;URL='index.html'">
	</head>
<body>
	<?php

if($_COOKIE["user"]=="1"){
	$conn->close();

$cookie_name = "user";
$cookie_value = "2";
setcookie($cookie_name, $cookie_value, time() + 300, "/"); 

$cookie_name = "id";
$cookie_value = $last_id;
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); 

}

?>






	<div class="container">   
	<fieldset>
<!-- Form Name -->
<legend>Join Us Today!</legend>
	<div class="alert alert-success" role="alert" id="success_message"><big>Successfuly uploaded <i class="glyphicon glyphicon-thumbs-up"></i><br>  We will get back to you shortly.</div>

</fieldset>
</div>
<script type="text/javascript">
	     $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});




</script>
</body>
</html>