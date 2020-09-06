<?php 
    define("TITLE","MENU ITEMS| Franklin's Fine Diner");
    	
	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
        return $output;
    }
    include("includes/header.php");
    if (isset($_GET['item'])) {   
      $menuItem = strip_bad_chars($_GET['item']);  
       $dish = $menuItems[$menuItem];
         
    }
    function suggestedTip($a,$b) {
        $totalTip = ($a * $b);
        echo $totalTip;
    
    }
?>
<hr>   
   <div id="dish">     
      <h1><?php echo $dish['title']; ?> <span class="price"> <sup>$</sup> <?php echo $dish['price'];?></span><h1> 
      <p><?php echo $dish["blurb"]; ?></p>
		<br>
        <p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>  
        
        <p> <b>Suggested Tip: <sup>$<sup> <b><?php suggestedTip($dish['price'], 0.2); ?> </b></p>
        
    <hr>    
</div>       
        
        
<?php 
    include("includes/footer.php");
?>
  