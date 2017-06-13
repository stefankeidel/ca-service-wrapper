<?php

namespace CA;

class SearchService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url,$ps_table,$ps_query){
		parent::__construct($ps_base_url,"find");

		$this->setRequestMethod("GET");
		$this->setTable($ps_table);
		$this->addGetParameter("q",$ps_query);
	}
	# ----------------------------------------------
}