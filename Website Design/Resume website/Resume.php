<html>
<header><title>John's Resume</title></header>
    <head>
    <style>
.home {
    float: left;
    background-color: Black;
    border: none;
    color: white;
    padding: 12px 30px;
    font-size: 16px;
    cursor: pointer;
    font-size: 20px;
}
        
.download {
    float: right;
    background-color: Black;
    border: none;
    color: white;
    padding: 12px 30px;
    font-size: 16px;
    cursor: pointer;
    font-size: 20px;
}

.download:hover {
    background-color: #ff6600;
}
        
.home:hover {
    background-color: #ff6600;
}
</style>
    </head>
<body>
    <a href="Resume.pdf" download="John_Buckley">
    <button class="download" style="width:50%"><i class="fa fa-download"></i> Download</button>
    </a>
    
    <a href="index.php">
    <button class="home" style="width:50%"><i class="fa fa-download"></i> Home</button>
    </a>
<div>
    <object data="Resume.pdf" type="application/pdf" width="100%" height="100%" position="relative">
        alt : <a href="test.pdf">test.pdf</a>
    </object>
</div>
</body>
</html>