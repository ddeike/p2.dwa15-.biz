<?php
class practice_controller extends base_controller {

	public function test1() {

		echo APP_PATH."<br>";
		echo DOC_ROOT."<br>";
		

		$imageObj = new Image('http://placekitten.com/1000/1000')

		$imageObj->resize(200,200);

		$imageObj->display();
	}

	public function test2() {

		# Static
		echo Time::now();


	}

}