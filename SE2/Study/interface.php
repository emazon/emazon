<?php

	interface Logger {

		public function execute($message);
	}

	class LogIntoFile implements Logger {

		public function execute($message)
		{
			var_dump('Logg into file '.$message);
		}
	}

	class LogIntoDatabase implements Logger {

		public function execute($message)
		{
			var_dump('Logg into DB '.$message);
		}
	}

	class UserController {

		protected $logger;

		public function __construct(Logger $logger)
		{
			$this->logger = $logger;
		}

		public function show(){
			$user = 'John Doe';
			$this->logger->execute($user);
		}
	}

	$controller = new UserController(new LogIntoDatabase);
	$controller -> show();