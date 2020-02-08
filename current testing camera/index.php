<!-- 
ID
title 
name
gender
contact number
organization 
email
event 


-->

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<style>
nav {
    background-color:#4c46c2;
}
body{
    font-family: Raleway;
}
.brand-logo{
    font-weight: bold;
}



 /* label underline focus color */


</style>
<body>
    
    <nav class="nav-wrapper">        
        <div class="container">
            <a href="#" class="brand-logo">Event</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-links">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </nav>
    <ul class="sidenav" id="mobile-links">
        <li style="background-color:rgb(74, 119, 179); padding-top: 20%;"><a href="#">HEADER</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Register</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
   
    <div class="container" style="padding-top: 2.5%;">
    <form method="POST" action="insert.php" >
    <div class="row ">
    <div class="input-field col s6 ">
          <input id="last_name" type="text" class="validate" >
          <label for="last_name">Last Name</label>
    </div>
    <div class="input-field col s6 ">
          <input id="first_name" type="text" class="validate" >
          <label for="first_name">First Name</label>
    </div>
    </div>

    </form>
    

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    </script>
</body>
</html>