<?php

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'BaseServiceClient.php');

class AlhalqaItemService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url,$ps_table,$ps_mode,$pn_id=null) {
		parent::__construct($ps_base_url,"alhalqaServices/AlhalqaItem");

		$this->setRequestMethod($ps_mode);
		$this->setTable($ps_table);
		$this->addGetParameter("id",$pn_id);
	}
	# ----------------------------------------------
}
