<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="b.css">
    <title>Anasayfa</title>
</head>
<body >
  <div class="main al-center jf-center bor-radius">
<div class="adverts-content mt-4 bg m-4 " >
    <?php if(isset($products)):?>
 <?php  foreach($products as $product):?>
    
                     <div class="col-2 pl-2 pr-2">
                            <div class="advert ">
                            <?php
                             echo "Name:".$product['Name'].'<br>';
                             echo "Price:".$product['Price'].'<br>';
                             echo "Stock:".$product['Stock'].'<br>';
                              ?>
                               </div>
                </div>
            <?php endforeach;?>
            <?php endif;?>        
  
  </div> 

  <div class="button1 pl-3">
    <form action="" method="get">
    <input type="hidden" value="1" name="get_products" >
    <input type="submit" value="View" >
    </form>
  
  </div>
 
</div>

 </div>   
</body>
</html>