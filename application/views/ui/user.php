<html lang="en">

<head>
    <title>INVENTORY MANAGEMENT</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/welcome.css">
</head>

<body>
    <div id="content">
        <h1> This is an User view </h1>

 

        <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("form");?>'">Reserve field</button>
         
         <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("login/logout");?>'">Logout</button>
        
        <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("user/viewProfile");?>'">My Profile</button>
        
        <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("Cricket");?>'">Cricket Score</button>
        
          <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("Volleyball");?>'">Volleyball Score</button>

        
        <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("Fixture");?>'">Fixture </button>
            
            <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url("Athletics");?>'">Athletics</button>

        

    </div>

</body>

</html>
