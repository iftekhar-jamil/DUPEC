<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
 <head>
  <title><?php echo $title; ?></title>
 </head>
 <body>
  <form action="<?php echo $action;?>" method="post">
    <p>Sportname : <input type="text" placeholder="sportsname" name="sportname" value="<?php echo isset($fixture[0]['sportname']) ? $fixture[0]['sportname']: '';?>" required/></p>
    <p>team1 : <input type="text" placeholder="Team1" name="team1" value="<?php echo isset($fixture[0]['team1']) ? $fixture[0]['team1']: '';?>" required/></p>
    <p>team2 : <input type="text" placeholder="Team2" name="team2" value="<?php echo isset($fixture[0]['team2']) ? $fixture[0]['team2']: '';?>" required/></p>
    <p>date : <input type="date" name="date" value="<?php echo isset($fixture[0]['date']) ? $fixture[0]['date']: '';?>" required/></p>
    <p>time : <input type="time" name="time" value="<?php echo isset($fixture[0]['time']) ? $fixture[0]['time']: '';?>" required/></p>
    <input type="hidden" name="id" value="<?php echo isset($fixture[0]['id']) ? $fixture[0]['id']: '';?>"/>
    <p><input class="btn btn-success" type="submit" name="submit" value="<?php echo $button;?>"/></p>
  </form>
 </body>
</html>