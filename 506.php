<?php
$error_code="506";
$error_message="Variant also varies";
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
                          A variant for the requested entity is itself a negotiable resource.
			</li>
                        <li>
                          Access not possible.
                        </li>
			<li>
				This page became very popular very quickly, and it's causing problems.
			</li>
			<li>
				Whatever the case, <b>we've been alerted of the problem and are working to fix it.</b>
			</li>
		</ul>

		<?php include ("includes/error-footer.inc.php");?>

	</article>

</div>
</body>
</html>