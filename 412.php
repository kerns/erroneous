<?php
$error_code="412";
$error_message="Precondition failed";
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
                          The precondition on the request for the URL failed positive evaluation.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>