<?php

namespace CA;

class AlhalqaCommunityService extends BaseServiceClient {
	# ----------------------------------------------
	public function __construct($ps_base_url, $ps_call) {
		parent::__construct($ps_base_url,"alhalqaServices/AlhalqaCommunity");

		$this->setRequestMethod('POST');
		$this->setTable($ps_call);
	}
	# ----------------------------------------------
}