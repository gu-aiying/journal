<?php

class Model_Cities extends Model {
	public function get_data() {
		$result = $this->executeQuery("SELECT * FROM cities");
		return $result;
	}
}

?>