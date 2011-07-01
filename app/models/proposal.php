<?php

class Proposal extends AppModel {
	var $name = 'Proposal';
	var $actsAs = array();
  public $useDbConfig = 'default';
  //var $useTable = false;

	function getProposal($id = NULL, $cache = TRUE) {
		$proposal = new Proposal;
		$proposal->id = $id;

		$data = $proposal->read();

		if ($cache && $data) {
			return $data;
		}
	 	else {
	 		App::import('ConnectionManager');
	 		App::import('Vendor', 'bitly', array('file' => 'bitly'.DS.'bitly.php'));

			$api = ConnectionManager::getDataSource('donorschoose');

	 		// Load it from the DonorsChoose Database
	 		$data = $api->read($proposal);
	 		$data = $data[0];
			$bitly = new bitly();
      $data['Proposal']['shortURL'] =
      			$bitly->shorten_url($data['Proposal']['proposalURL']);

      // Add the text for printing
      $data['Proposal']['pulltabShort'] = $data['Proposal']['title'];
      $data['Proposal']['pulltabDescription'] =
          trim(strip_tags($data['Proposal']['fulfillmentTrailer'])) . ' ' . trim(strip_tags($data['Proposal']['shortDescription']));
	 		 $data['Proposal']['fourupDescription'] = trim(strip_tags($data['Proposal']['fulfillmentTrailer']));

	 		//save it to our database
	 		$this->save($data);
	 	}

		return $data;
	}

	function random() {
		App::import('ConnectionManager');
		$api = ConnectionManager::getDataSource('donorschoose');

		$proposal = new Proposal;

		$proposals = $api->read($proposal);
		$rand = array_rand($proposals);
		return $proposals[$rand];

	}


}