<?php	    		
if ($_POST["submit"]) {					
	if (!$_POST['name']) {
		$error="<br />Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br />Please enter your email address";
	}
	if (!$_POST['comment']) {
		$error.="<br />Please enter a comment";
	}				
		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error.="<br />Please enter a valid email address";
		}
		if ($error) {
			$result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
		} else {
			if (mail("jin032@yahoo.com", "Comment from website!", "Name: ". $_POST['name']."
				Email: ".$_POST['email']."
				Comment: ".$_POST['comment'])) {
				$result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
		}	
        }
    }
    ?>

<!doctype html>
<html>
<head>
<title> comment</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<style>
.emailform{

	border: 1px solid green;
	border-radius: 10px;
	margin-top: 20px;
}

	form{

		padding-bottom: 20px;
	}

	.slider{

    width: 100%;
    height: 400px;
    overflow: hidden;
    margin: 40px auto;
}

.slider img{

    width: 100%;
    height: 400px;
    display: none;
}

</style>
</head>
<body>

	    <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="" class="navbar-brand">Saddam Akram-Portfolio</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>
      </div>
      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="">Page 1</a></li>
              <li><a href="comment.php">Comment</a></li>
              <li><a href="">Page 3</a></li>
              <li><a href="">Page 4</a></li>

          </ul>
      </div>



    </div>
  </div>

    <div class="slider">

    <img id="1" src="style/aboutus.jpg" border="0" alt="web" />

</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 emailform">
				<h1> Drop a line for me.. </h1>
				<?php 
				echo $result; 
				?>
				<p class="lead">Please get in touch! I'll get back to you as soon as a can- </p>
				<form method="post">
					<div class="form-group">
						<label for="name">Your Name:</label>
						<input type="text" name="name" class="form-control" placeholder="your name" value="<?php echo $_POST['name']; ?>" />

					</div>
					
					<div class="form-group">
						<label for="email">Your Email:</label>
						<input type="email" name="email" class="form-control" placeholder="your email" value="<?php echo $_POST['email']; ?>" />

					</div>
					<div class="form-group">
						<label for="comment">Your Comment:</label>
						<textarea name="comment" class="form-control" placeholder="your comment"<?php echo $_POST['comment']; ?>></textarea>

					</div>

					<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit" />



				</form>
			</div>
		</div>
	</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>

</html>