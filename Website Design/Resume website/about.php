<html>
<header><title>About John</title></header>
    <head>
    <style>
        
.home {
    top:0;
    left:0;
    position:absolute;
    background-color: Black;
    border: none;
    color: white;
    padding: 12px 30px;
    font-size: 16px;
    cursor: pointer;
    font-size: 20px;
}
        
.home:hover {
    background-color: #ff6600;
}

.mySlides {
height:350px;
border-radius: 50%;
}
        
.line{
height:7px;
width:100%;
background-color:black;
}
   
        .fiance{
            float:left;
            margin-left: 30px;
            font-size: 30px;
        }
        
        .cool{
            float:right;
            margin-right: 30px;
            font-size: 30px;
        }
        
</style>
</head>
<body>
<a href="index.php">
    <button class="home" style="width:100%"><i class="fa fa-download"></i> Home</button>
    </a>
    
    <br>
    <br>
    <br>

    <p class="fiance"><b>"Will always beat me in Mario Kart"</b><br><br><i>-My Fiance</i></p>
    <p class="cool"><b>"The most hard working and best overall <br> person I know"</b><br><br><i>-The Internet</i></p>
    
    
<center><div class="w3-content w3-section" style="max-width:300px">
  <img class="mySlides" src="hike.jpg" style="width:100%">
  <img class="mySlides" src="engage.jpg" style="width:100%">
  <img class="mySlides" src="nap.jpg" style="width:100%">
  <img class="mySlides" src="sevvy.jpg" style="width:100%">
    </div></center>
    
    <br>
    
    <div class="line"></div>
    
    <p><font size="5"><center>My name is John Buckley III, and I am a graduate of the University of Tennessee at martin with a BS in Computer Science.
                          <br>I'm currently engaged to a beautiful woman named Annie. My hobbies include: Gaming, Camping, and Backpacking.
                          <br>I am an Eagle Scout, a member of the National Eagle Scout Association (NESA), and a member of the Association for
                          <br>Computing Machinery (ACM). As with most computer scientists, I fell in love with computers and the software and hardware 
                          <br>that composed them at a young age. It wasn't until my junior year in high school that I got my first taste of programming
                          <br>and I decided then that I wanted to have a career in computer science. I still love everything about computers and 
                          <br>programming as much today as I did then.
        </center></font></p>
    
    <br>
    
    <div class="line"></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3500); // Change image every 2 seconds
}
</script>

    
</body>
</html>