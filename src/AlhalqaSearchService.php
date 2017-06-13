<?php

namespace CA;

class AlhalqaSearchService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url,$ps_table,$ps_query){
		parent::__construct($ps_base_url,"alhalqaServices/AlhalqaFind");

		$this->setRequestMethod("GET");
		$this->setTable($ps_table);
		$this->addGetParameter("q",$ps_query);
	}
	# ----------------------------------------------
}