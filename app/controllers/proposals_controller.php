<?php
class ProposalsController extends AppController {
	var $name = 'Proposals';
	var $uses = array('Proposal'); // don't use any model : array()

	var $helpers = array('Html', 'Ajax');
	var $components = array('RequestHandler');

	/**
	 * Front Page
	 */
	function index() {

	}

	/**
	 * Search
	 */
	function search() {
		if (empty($this->data)) {
			$this->redirect(array('action' => 'index'));
		}
		$search = $this->data['Proposal']['search'];
		if (is_numeric($search)) {
			$id = $search;
		}
		else {
			$pattern = "/(?:&|\?)(?:id\=)([0-9]*)/";
			$match = NULL;
			if (preg_match($pattern, $search, $match)) {
				$id = $match[1];
			}
		}


		if (isset($id)) {
			$this->redirect(array('action' => 'view', $id));
		}
		else {
			$this->viewPath = 'errors';
			$this->render('error404');
		}
	}

	/**
	 * View
	 */
	function view($id = NULL) {
    if (!$id) {
    	$this->redirect(array('action' => 'index'));
    }

		// Try to load the proposal
		// or else return a 404
    $this->Proposal->id = $id;
    if ($proposal = $this->Proposal->getProposal($id, FALSE)) {
			$this->data = $proposal;
			$this->set('proposal', $proposal['Proposal']);
		}
		else {
			$this->cakeError('error404');
		}
  }

	/**
	 * Random
	 */
	function random() {
		$proposal = $this->Proposal->random();
		$this->redirect(array('action' => 'view', $proposal['Proposal']['id']));
	}

	/**
	 * Preview
	 */
  function preview($id = NULL, $type = 'pulltab') {
    $this->layout = 'preview';

    $proposal = $this->Proposal->getProposal($id);
    $this->set('proposal', $proposal['Proposal']);

    //render the view based on type
    $this->render('preview-'.$type);
  }

	/**
	 * PDF
	 */
  function pdf($id = NULL, $type = NULL) {
		App::import('Vendor', 'dompdf', array('file' => 'dompdf' . DS . 'dompdf_config.inc.php'));
		$this->autoRender = false;
    $this->layout = 'preview';

		//debug ($this->params['form']);

		if (!$type) {
			// Capture the submit button name to determine type of sheet to create
			// http://www.mainelydesign.com/blog/view/...
			// getting-name-submit-button-clicked-after-post-cakephp
			if(isset($this->params['form']['generatePulltab'])) {
				$type = 'pulltab';
			}
			elseif (isset($this->params['form']['generateFourup'])) {
				$type = 'fourup';
			}
			else {
				$type = 'pulltab'; // default option
			}
		}

    if (!empty($this->data) && isset($this->data['Proposal']['id']) ) {
      $this->Proposal->id = $id;
    	$proposal = $this->Proposal->read();
    	// Merge the data with the saved proposal
    	$proposal['Proposal'] = array_merge($proposal['Proposal'], $this->data['Proposal']);
    }
    elseif($id) {
      $this->Proposal->id = $id;
    	$proposal = $this->Proposal->read();
    }

    // Encode a few entities for the PDF
    $proposal['Proposal']['pulltabShort'] = htmlentities($proposal['Proposal']['pulltabShort']);
    $proposal['Proposal']['pulltabDescription'] = htmlentities($proposal['Proposal']['pulltabDescription']);
    $proposal['Proposal']['fourupDescription'] = htmlentities($proposal['Proposal']['fourupDescription']);


    $this->set('proposal', $proposal['Proposal']);

		// Render the view to a variable.
		$output = $this->render('preview-'.$type);
		$dompdf = new DOMPDF();
		$dompdf->load_html($output);
		$dompdf->set_base_path(ROOT . '/app/webroot');

		$dompdf->render();
		$dompdf->stream("donorschoose-$type.pdf");
		exit;
  }

  function qrcode() {
  	App::import('Vendor', 'phpqrcode', array('file' => 'qrlib.php'));
  	if (isset($_GET['q'])) {
  		// stream to the browser
  		$this->header("Content-Type: image/png");
  		QRcode::png($_GET['q'], FALSE, QR_ECLEVEL_L, 5, 0);
  	}
  	else {
  		QRcode::png('empty', FALSE, QR_ECLEVEL_L, 5, 0);
  	}
  }
}