<?php
$error_code="413";
$error_message="Request entity too large";
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
                          The <!--#echo var="REDIRECT_REQUEST_METHOD" --> method does not allow the data transmitted, or the data volume exceeds the capacity limit.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>