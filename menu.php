<?php
print'
<ul>
				<li><a href="Index.php?menu=1">Home</a></li>
				<li><a href="Index.php?menu=2">About</a></li>
				<li><a href="Index.php?menu=3">Gallery</a></li>
				<li><a href="Index.php?menu=4">News</a></li>
                <li><a href="Index.php?menu=5">Become a misfit</a></li>';
			if (!isset($_SESSION["user"]["valid"]) || $_SESSION["user"]["valid"] == false) {
			print'
			<li><a href="Index.php?menu=6">Register</a></li>
			<li><a href="Index.php?menu=7">Sign In</a></li>';
		}
		else if ($_SESSION["user"]["valid"] == true) {
			print '
			<li><a href="Index.php?menu=8">Admin</a></li>
			<li><a href="Signout.php">Sign Out</a></li>';
		}
		 print'
    </ul>';
    
?>