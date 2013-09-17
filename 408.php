<?php
$error_code="408";
$error_message="Request time-out";
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
                          The server closed the network connection because the browser didn't finish the request within the specified time.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>