<?php
/**
  * Queue Configuration file
  *
  * save the file to app/Config/queue.php
  */
$config = array(
	'Queue' => array(
		'log' => true, //logs every task run in a log file.
		'limit' => 1, //limit how many queues can run at a time. (default 1).
		'allowedTypes' => array( //restrict what type of command can be queued.
			1, //model
			2, //shell
			3, //url
			4, //php_cmd
			5, //shell_cmd
		),
		'archiveAfterExecute' => true, //will archive the task once finished executing for quicker queues
		'cache' => '+5 minute', //how long to cache cpu usage and list. (false disables cache)
		'cores' => '8', //number of cpu cores to correctly gauge current CPU load.
	)
);
