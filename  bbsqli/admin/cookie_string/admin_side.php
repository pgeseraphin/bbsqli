<div id="sidebar">
	<ul class="sideNav">
    	<li><a href="test_unprotect.php" <?php if($active==1) echo " class=active"; ?>>Sans protection</a></li>
    	<li><a href="test_escape.php" <?php if($active==2) echo " class=active"; ?>>Escape</a></li>
    	<li><a href="test_escape_quote.php" <?php if($active==3) echo " class=active"; ?>>Escape + Guillemet</a></li>
    	<li><a href="test_order_by_escape.php" <?php if($active==4) echo " class=active"; ?>>ORDER BY + escape</a></li>
    	<li><a href="test_order_by_quote.php" <?php if($active==5) echo " class=active"; ?>>ORDER BY + quote</a></li>
    	<li><a href="test_like_escape.php" <?php if($active==6) echo " class=active"; ?>>LIKE + escape</a></li>
    	<li><a href="test_like_escape_quote.php" <?php if($active==7) echo " class=active"; ?>>LIKE + escape + quote</a></li>                    	
   </ul>
    <!-- // .sideNav -->
</div>    
<!-- // #sidebar -->