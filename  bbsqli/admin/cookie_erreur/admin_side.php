<div id="sidebar">
	<ul class="sideNav">
    	<li><a href="test_unprotect.php" <?php if($active==1) echo " class=active"; ?>>Sans protection</a></li>
    	<li><a href="test_escape.php" <?php if($active==2) echo " class=active"; ?>>Escape</a></li>
    	<li><a href="test_escape_quote.php" <?php if($active==3) echo " class=active"; ?>>Escape + Guillemet</a></li>
    	<li><a href="test_escape_quote_intval.php" <?php if($active==4) echo " class=active"; ?>>Escape + Guill. + Intval</a></li>
    	</ul>
    <!-- // .sideNav -->
</div>    
<!-- // #sidebar -->