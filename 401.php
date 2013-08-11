<?php
$error_code="401";
$error_message="Access denied, Unauthorized";
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
				Perhaps there was a typo in your login credentials.
			</li>
			<li>
				Or you're attempting to view the contents of a folder for which directory listing is disabled.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php");?>

	</article>

</div>
</body>
</html>