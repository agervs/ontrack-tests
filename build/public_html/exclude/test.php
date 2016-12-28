<?php

	/* ROOT SETTINGS */ require($_SERVER['DOCUMENT_ROOT'].'/root_settings.php');

	/* WHICH DATABASES DO WE NEED */
	$db2use = array(
		'db_main'		=> FALSE
	);

	/* GET KEYS TO SITE */ require(PATH_TO_KEYS);

	if(isset($_COOKIE['ontrack_webtest_exclude']) && $_COOKIE['ontrack_webtest_exclude'] === 'exclude_me'){
		echo '<p>Cookie is set. You will be excluded.</p>';
	}else{
		echo '<p>Cookie is NOT set. You WILL NOT be excluded.</p>';
	}

	echo '
		<p><a href="/exclude/test.php">Test your cookie.</a></p>
		<p><a href="/exclude/set.php">Set your cookie.</a></p>
		<p><a href="/exclude/delete.php">Delete your cookie.</a></p>
	';

?>