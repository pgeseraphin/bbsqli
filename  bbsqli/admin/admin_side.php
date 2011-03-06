<div id="sidebar">
	<ul class="sideNav">
    	<li><a href="test_unprotect.php?id=1" <?php if($active==1) echo " class=active"; ?>>Sans protection</a></li>
    	<li><a href="test_escape.php?id=1" <?php if($active==2) echo " class=active"; ?>>Escape</a></li>
    	<li><a href="test_escape_quote.php?id=1" <?php if($active==3) echo " class=active"; ?>>Escape + Guillemet</a></li>
    	<li><a href="test_escape_quote_intval.php?id=1" <?php if($active==4) echo " class=active"; ?>>Escape + Guill. + Intval</a></li>
    	<li><a href="test_limit.php?id=0" <?php if($active==5) echo " class=active"; ?>>LIMIT</a></li>
    	<li><a href="test_limit_quote_intval.php?id=0" <?php if($active==6) echo " class=active"; ?>>LIMIT + Guillemet + intval</a></li>
    	<li><a href="test_limit_is_numeric.php?id=0" <?php if($active==7) echo " class=active"; ?>>LIMIT + is_numeric</a></li>                    	
    </ul>
    <!-- // .sideNav -->
</div>    
<!-- // #sidebar -->