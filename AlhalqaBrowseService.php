<?php

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'BaseServiceClient.php');

class AlhalqaBrowseService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url,$ps_table,$ps_mode) {
		parent::__construct($ps_base_url, "alhalqaServices/AlhalqaBrowse");

		$this->setRequestMethod($ps_mode);
		$this->setTable($ps_table);
	}
	# ----------------------------------------------
}
