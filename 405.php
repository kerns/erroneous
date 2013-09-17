<?php
$error_code="405";
$error_message="Method not allowed";
include ("includes/document-header.inc.php");
?>

<body>
<div id="main" role="main">

	<article>
		<h1>
			Error <?php echo $error_code ?> 
			<em><span>&mdash;</span> <?php echo $error_message ?></em>
		</h1>
		<h3>Hey! What are you doing ?.</h3>
		<ul>
			<li>
                          The <!--#echo var="REDIRECT_REQUEST_METHOD" --> method is not allowed for the requested URL.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php") ?>

	</article>

	

</div>
</body>
</html>