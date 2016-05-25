<?php
namespace App\myclass;

class Test{
	public function test(){
		echo __DIR__;
	}
	public function __invoke(){
		echo 'ttttttttttttt';
		echo dirname(__DIR__);
		echo '//<br/>';
		$path = pathinfo(__DIR__);
		var_dump($path);
	}
}