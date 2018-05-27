<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>John E. Buckley III</title>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <!--  Mobile viewport scale | Disable user zooming as the layout is optimised -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <style>
      /* Global Styles, not needed */
      ::selection,body{color:#fff;background:black}body,h1,h2,h3,h4,h5{font-weight:300}a,body{color:#fff}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;text-align:center}::selection{text-shadow:none}html{font-size:16px}body{font-size:1rem;font-family:'Open Sans',sans-serif;overflow-y:scroll}nav{margin-bottom:20px}nav li{padding:10px 20px;background:black}nav li:hover{background:black}#nav2{width:400px}#nav3{width:650px}
       /* END Global Styles, not needed */
    </style>


    <style>
    .container {
      width: 100%;
      height: 90vh;
        position: relative;
    }
    .container .other-content {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      text-align: center;
      z-index: 2;
      padding: 30px;
      font-size: 50px;
      color: #ff6600;
    }
    .container .slide {
      z-index: 1;
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
      height: 90vh;
      transition: opacity 1s ease-in-out;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      opacity: 0;
    }
    .container .slide.show {
      opacity: 1;
    }
        
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #111;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ff6600;
}
    </style>
</head>
<body>
    
    <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li style="float:right"><a href="Resume.php">Resumé</a></li>
  <li style="float:right"><a href="projects.php">Projects</a></li>
  <li style="float:right"><a href="contact.php">Contact</a></li>
  <li style="float:right"><a href="about.php">About</a></li>
</ul>

    <div class="container">
    	<div class="other-content">John E. Buckley III</div>

    	<div class="slide show" style="background-image: url('game.jpg');"></div>
    	<div class="slide" style="background-image: url('rob2.jpg');"></div>
    	<div class="slide" style="background-image: url('friend.PNG');"></div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script>
    function cycleBackgrounds() {
    	var index = 0;
    	$imageEls = $('.container .slide'); // Get the images to be cycled.
    	setInterval(function () {
    		// Get the next index.  If at end, restart to the beginning.
    		index = index + 1 < $imageEls.length ? index + 1 : 0;
    		// Show the next image.
    		$imageEls.eq(index).addClass('show');
    		// Hide the previous image.
    		$imageEls.eq(index - 1).removeClass('show');
    	}, 5000);
    };
    // Document Ready.
    $(function () {
    	cycleBackgrounds();
    });
    </script>
    
</body>
</html>