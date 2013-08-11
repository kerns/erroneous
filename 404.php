<?php
$error_code="404";
$error_message="File Not Found";
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
				This page might have been removed or relocated during an update.
			</li>
			<li>
				Or, there could be a typo in the location bar of your browser.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

</div>
</body>
</html>