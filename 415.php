<?php
$error_code="415";
$error_message="Unsupported media type";
include ("includes/document-header.inc.php");
?>

<body>
<div id="main" role="main">

	<article>
		<h1>
			Error <?php echo $error_code ?> 
			<em><span>&mdash;</span> <?php echo $error_message ?></em>
		</h1>
		<h3>Hey! What are you doing ?</h3>
		<ul>
			<li>
                          The server does not support the media type transmitted in the request.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>