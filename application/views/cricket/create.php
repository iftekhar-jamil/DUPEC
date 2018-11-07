<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
 <head>
  <title><?php echo $title; ?></title>
 </head>
 <body>
  <form action="<?php echo $action;?>" method="post">
   
    <p>Win : <input type="text" name="win" value="<?php echo isset($match[0]['win']) ? $match[0]['win']: '';?>" required/></p>
    
    <p>Lose : <input type="text" name="lose" value="<?php echo isset($match[0]['lose']) ? $match[0]['lose']: '';?>" required/></p>
    
    <p>Man of the match : <input type="text" name="man" value="<?php echo isset($match[0]['man']) ? $match[0]['man']: '';?>" required/></p>
    
    <input type="hidden" name="id" value="<?php echo isset($match[0]['id']) ? $match[0]['id']: '';?>"/>
    
    <p><input type="submit" name="submit" value="<?php echo $button;?>"/></p>
  </form>
 </body>
</html>