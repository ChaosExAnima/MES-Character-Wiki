<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
	<title><?php echo basename( __DIR__ ); ?> - Mind's Eye Society Wiki</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="http://wiki.mindseyesociety.org/load.php?debug=true&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cskins.vector&amp;only=styles&amp;skin=vector&amp;*" />
	<link rel="stylesheet" href="style.css" />
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-<?php echo basename( __DIR__ ); ?> skin-vector action-view vector-animateLayout">
	<div id="content" class="mw-body">
		<h1 id="firstHeading" class="firstHeading"><span dir="auto"><?php echo basename( __DIR__ ); ?></span></h1>
		<div id="bodyContent">
			<div id="siteSub">From Mind&#039;s Eye Society Wiki</div>
			<div id="contentSub"></div>
			<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr">
				<?php
					if ( file_exists( 'character.md' ) ) {
						require( 'lib/wiky.inc.php' );
						$parser = new wiky();
						$input  = file_get_contents( 'character.md' );
						echo $parser->parse( $input );

					} else if ( file_exists( 'character.html' ) ) {
						include 'character.html';
					} else {
						echo '<p class="error">Error: No file yet!</p>';
						echo '<p>Please make character.md or character.html.</p>';
					}
				?>
			</div><!-- /bodycontent -->
		</div>
	</div>
	<div id="mw-head" class="noprint"></div>
	<div id="mw-panel" class="noprint"></div>
	<div id="footer"></div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>