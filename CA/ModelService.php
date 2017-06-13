<?php

namespace CA;

class ModelService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url,$ps_table){
		parent::__construct($ps_base_url,"model");

		$this->setRequestMethod("GET");
		$this->setTable($ps_table);
	}
	# ----------------------------------------------
}