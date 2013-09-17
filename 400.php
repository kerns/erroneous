<?php
$error_code="400";
$error_message="Bad request";
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
                          Your browser (or proxy) sent a request that this server could not understand.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>