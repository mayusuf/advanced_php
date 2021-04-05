<?php

interface TableInterface{

	public function save(array $data);
}

interface LogInterface{

	public function log($message);
}


class Table implements TableInterface, LogInterface, Countable{

	public function save(array $data){

		echo "foo";
		echo "\n";
	}

	public function log($message){

		echo $message."\n";
	}

	public function count(){

		return 10;
	}
}

echo ((new Table)->save([]));
echo ((new Table)->log('interface log message '));
echo ((new Table)->count());