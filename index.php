<?php	    		
if ($_POST["submit"]) {	        									
	if (!$_POST['name']) {	            				
		$error="<br />Please enter your name";	            			
	}						
		if (!$_POST['email']) {	            				
			$error.="<br />Please enter your email address";	            			
		}						if (!$_POST['comment']) {	            				
			$error.="<br />Please enter a comment";	            			
		}				
		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
			{	    			    		
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saddam-Portfolio</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <style type="text/css">
    .emailForm {	
    	border:1px solid grey;	    
    	border-radius:10px;	    
    	margin-top:20px;	
    	}	 
    	form {	    
    		padding-bottom:20px;			
    	}

    body{

      background-color: #4C827C;
    }
    .nav{
      float: right;
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
  <body onload="Slider();">

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
              <li><a href="">Page 2</a></li>
              <li><a href="">Page 3</a></li>
              <li><a href="">Page 4</a></li>

          </ul>
      </div>



    </div>
  </div>

    <div class="slider">

    <img id="1" src="pic/1.png" border="0" alt="web" />
    <img id="2" src="pic/2.png" border="0" alt="technical" />
    <img id="3" src="pic/3.jpg" border="0" alt="loud" />
    <img id="4" src="pic/4.png" border="0" alt="smile" />
    <img id="5" src="pic/5.jpg" border="0" alt="see" />
    <img id="6" src="pic/6.jpg" border="0" alt="hiring" />
    <img id="6" src="pic/7.jpg" border="0" alt="design" />

</div>

    <div class="container">

      <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Launch modal</button>
      <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">My pic!</h4>

              </div>
              <div class="modal-body">
                  <img src="images/images.jpg" />
                  this pic is not mine......
                  if you want to see my pic then please contect with me....
                  phone no.03007446216
                  Email:jin032@yahoo.com
                  if urgent then call me....otherwise email is the best way to reach me.....
                  <div class="container">
                   <div class="row">
                    <div class="col-md-6 col-md-offset-3 emailForm">	
                    	<h1>My email form</h1>	
				 <?php echo $result; ?>	 
				 <p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>
				  <form method="post">
				  	<div class="form-group">
				   <label for="name">Your Name:</label>
				   	<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
				   </div>
				    <div class="form-group">
				     <label for="email">Your Email:</label>
				     	<input type="email" name="email" class="form-control" placeholder="Your Email"  value="<?php echo $_POST['email']; ?>" />
				     	 </div>	
				     	 <div class="form-group">
				     	  <label for="comment">Your Comment:</label>	
				     	  <textarea class="form-control" name="comment">
				     	  	<?php echo $_POST['comment']; ?>
				     	  </textarea>
</div>
 <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
</form>
</div>
</div>
</div>	! 

              </div>
              <div class="footer">Saddam Akram</div>


            </div>
          </div>
      </div>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

function Slider(){

    $(".slider #1").show("fade",500);
    $(".slider #1").delay(6000).hide("slide",{direction:'left'}, 1000);
    var sc= $(".slider img").size();

    var count=7;
    setInterval(function(){

        $(".slider #"+count).show("slide",{direction:'right'}, 500);
        $(".slider #"+count).delay(6000).hide("slide",{direction:'left'}, 1000);

        if (count==sc){
            count=1;
        }else{

            count =count+1;
        }
    },7500);

}


</script>
  </body>
</html>