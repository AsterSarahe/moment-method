<!DOCTYPE html>
<head>
<title>Moment MethodÂ®</title>
</head>

<html> 
<body>
    <h2>Moment MethodÂ®</h2>
	
	<?php
	// The file test.xml contains an XML document with a root element
	// and at least an element /[root]/title.

	if (file_exists('moment-method.xml')) {
		$xml = simplexml_load_file('moment-method.xml');

		print_r($xml);
	} else {
		exit('Failed to open Moment MethodÂ®');
	}
	?>
</body>
 
</html>

