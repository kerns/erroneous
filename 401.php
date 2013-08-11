<?php
$error_code="401";
$error_message="Access denied, Unauthorized";
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
				This server could not verify that you are authorized to access the document requested. 
			</li>
			<li>
				Maybe you failed to offer the required credentials (e.g., a valid username or password).
			</li>
			<li>
				It could also be your browser doesn't understand how to supply the required credentials.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>