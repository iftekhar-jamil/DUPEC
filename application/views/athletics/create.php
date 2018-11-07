<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
 <head>
  <title><?php echo $title; ?></title>
 </head>
 <body>
  <form action="<?php echo $action;?>" method="post">
    Sportname : <input type="text" name="sportname" value="<?php echo isset($athleticsmatches[0]['sportname']) ? $athleticsmatches[0]['sportname']: '';?>" required/>
    rank1 : <input type="text" name="rank1" value="<?php echo isset($athleticsmatches[0]['rank1']) ? $athleticsmatches[0]['rank1']: '';?>" required/>
    rank2 : <input type="text" name="rank2" value="<?php echo isset($athleticsmatches[0]['rank2']) ? $athleticsmatches[0]['rank2']: '';?>" required/>
    rank3 : <input type="text" name="rank3" value="<?php echo isset($athleticsmatches[0]['rank3']) ? $athleticsmatches[0]['rank3']: '';?>" required/>
    <input type="hidden" name="id" value="<?php echo isset($athleticsmatchess[0]['id']) ? $athleticsmatches[0]['id']: '';?>"/>
    <input class="btn btn-success" type="submit" name="submit" value="<?php echo $button;?>"/></p>
  </form>
 </body>
</html>