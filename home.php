<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<style>
* {
    margin: 0;
    padding: 0%;
    box-sizing: border-box;

}

body {
    height: 100vh;
    width: 100%;
   
    background-image: url("backone.jpg"); /*center/cover no-repeat;*/
    
}

.h1{
    margin-top: 0px;
    text-color:#00ccff
}
.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
}


.navbar li {
    display: inline;
    margin-right: 20px;
    float:right;
    
}

/* Style the anchor tags (links) */
.navbar a {
    text-decoration: none;
    color:#00ccff/* Change the link color to your preference */
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    padding: 10px;
    font-size:25px;
    
}
 .name{
    float:left;
    color:#00ccff;
}
.homepara{
    color:#fff;
    text-align:center;
    font-size:20px;
    margin-top: 0px;

}
.info{
    color:#00ccff
    
}


</style>
<body>
    <div class="img">
<img src="homepic.webp">
</div>
<header>
        <nav class="navbar">
            <a href="#" class="logo">
                <h2 class="name">CodEvents</h2>
            </a>
            <ul class="links">
            
                <li><a href="account.html">account</a></li>
                
                <li><a href="practice-set.html">practice</a></li>
                <li><a href="contest.html">Contest</a></li>
                <li><a href="home.php">Home</a></li>
            </ul>
</nav>
    </header>
    
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <br>
     
     <div class="homepara">

<p><b>Welcome to CodEvents</b></p>

<p>You will get all the details about the competitive programming platforms at one place </p>
</div>
    
<br>
<br>


<div class="info">
    <p>FOR ANY QUERY : <a href="mailto:prajapatineha589@gmail.com">email here</a></p>
    <p>CONTACT US : 022-4880-333</p>
</div> 
</footer>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>