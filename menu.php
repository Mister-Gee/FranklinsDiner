<?php 
    define("TITLE","MENU | Franklin's Fine Diner");
    include("includes/header.php");
?>
<div id="menu-items">
<h1>Franklin's Philosophy of Fine Dining</h1>
<p> Like our team, our menu is very small — but dang, does it ever pack a punch!</p>
<p><i>Click any menu item to learn more about it</i></p>
<hr>
<?php
foreach($menuItems as $dish => $items) {
?>
<ul>
<li> <a href ="dish.php?item=<?php echo $dish; ?>"> <?php echo $items['title'];?> </a> <sup>$</sup><?php echo $items['price']; ?> </li>



</ul>
<?php
}?>
</div>
<?php 
    include("includes/footer.php");
?>
