<?php

	print 'test.php' . PHP_EOL;
	
	for ($n=0; $n<10; $n++) {
		print $n;
		if (9 !== $n) {
			print ', ';
		}
	}
	
	print 'END test.php' . PHP_EOL . PHP_EOL;

?>