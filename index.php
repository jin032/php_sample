<?php	    		
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
              <li><a href="comment.php">Comment</a></li>
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