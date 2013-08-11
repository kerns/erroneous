<?php
$error_code="403";
$error_message="Forbidden";
include ("includes/document-header.inc.php");
?>

<body>
<div id="main" role="main">

	<article>
		<h1>
			Error <?php echo $error_code ?> 
			<em><span>&mdash;</span> <?php echo $error_message ?></em>
		</h1>
		<h3>Sorry, something is wrong.</h3>
		<ul>
			<li>
				It seems like the server understood your request, but is refusing to fulfill it.
			</li>
			<li>
				It could be you're attempting to view the contents of a folder for which directory listing has been disabled.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

</div>
</body>
</html>