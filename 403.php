<?php
$error_code="403";
$error_message="Forbidden";
include ("includes/document-header.inc.php");
?>

<body>
<div id="main" role="main">

	<article>
		<h1>
			Error <?php echo $error_code?> 
			<em><span>&mdash;</span> <?php echo $error_message?></em>
		</h1>
		<h3>Sorry, something is wrong.</h3>
		<ul>
			<li>
				The server understood the request, but is refusing to fulfill it.
			</li>
			<li>
				This is likely an issue of not having permission to visit this location.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php");?>

	</article>

</div>
</body>
</html>