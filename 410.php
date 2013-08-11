<?php
$error_code="410";
$error_message="Resource Gone";
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
				There used to be a page here, but no forwarding address is known.
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php");?>

	</article>

</div>
</body>
</html>