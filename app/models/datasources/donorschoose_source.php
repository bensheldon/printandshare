<?php
/**
 * DonorsChoose Datasource
 *
 * http://developer.donorschoose.org/documentation
 *
 */
App::import('Core', 'HttpSocket');
class DonorsChooseSource extends DataSource {
	protected $_schema = array(
		'proposals' => array(
			'id' => array(
				'type' => 'integer',
				'null' => true,
				'key' => 'primary',
				'length' => 11,
			),
			'title' => array(
				'type' => 'string',
				'null' => true,
				'key' => 'primary',
				'length' => 140
			),
			'totalPrice' => array(
				'type' => 'string',
				'null' => true,
				'key' => 'primary',
				'length' => 140
			),
			'teacherName' => array(
				'type' => 'string',
				'null' => true,
				'key' => 'primary',
				'length' => 140
			),
			'shortDescription' => array(
				'type' => 'string',
				'null' => true,
				'key' => 'primary',
				'length' => 140
			),
			'synopsis' => array(
				'type' => 'string',
				'null' => true,
				'key' => 'primary',
				'length' => 140
			),

		)
	);
	public function __construct($config) {
		$this->connection = new HttpSocket();
		parent::__construct($config);
	}

	public function read($proposal, $queryData = array()) {

	  $url = 'http://api.donorschoose.org/';
		$url .= "common/json_feed.html";

		// Was a proposal ID passed?
		if (isset($proposal->id) && is_numeric($proposal->id)) {
			$query = array(
				'APIKey' => $this->config['APIKey'],
				'showSynopsis' => 'true',
				'id' => $proposal->id,
			);
		}
		// Else return the most most recent proposals
		// Choose 200, concise ones
		else {
			$query = array(
				'APIKey' => $this->config['APIKey'],
				//'showSynopsis' => 'true',
				'concise' => 'true',
				'max' => '200',
			);
		}

		$response = json_decode($this->connection->get($url, $query), true);
		//debug($response);
		if ($response) {
			$proposals = array();
			foreach($response['proposals'] as $proposal) {
				$proposals[] = array('Proposal' => $proposal);
			}
		  return $proposals;
		}
		else {
		  return NULL;
		}
	}

	public function describe($model) {
		return $this->_schema['proposal'];
	}

	function listSources() {
		return array('proposals');
	}
}
?>
