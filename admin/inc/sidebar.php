<?php

if(!isset($_SESSION["uid"]))
{
	header('location:loginn.php');
}

?>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>KhanStore</a>
  <ul>
    <li class="active"><a href="index2.php"><i class="icon icon-home"></i> <span>KhanStore</span></a> </li>

  
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Category</span> <span class="label label-important">2</span></a>
      <ul>
		 <li><a href="categories.php">Add Category</a></li>
        <li><a href="add_category.php">Show Category</a></li>
        
      </ul>
    
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span> <span class="label label-important">2</span></a>
      <ul>
		  
		<li><a href="add_product.php">Add Products</a></li>
        <li><a href="products.php">Show Products</a></li>
       
      </ul>
    
  </ul>
</div>