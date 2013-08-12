<?php
$error_code="414";
$error_message="Requested URL is Too Large";
include ("includes/document-header.inc.php");
?>

<body>
<div id="main" role="main">

	<article>
		<h1>
			Error <?php echo $error_code?> 
			<em><span>&mdash;</span> <?php echo $error_message?></em>
		</h1>
		<h3>Sorry</h3>

		<ul>
			<li>
				The requested URL's length exceeds the capacity limit for this server. Sounds crazy, but it's true.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php");?>

	</article>

</div>
</body>
</html>