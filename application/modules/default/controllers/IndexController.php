<?php

class IndexController extends Zend_Controller_Action
{
	/**
	 * The index action stub.  Functionalty is handled via JavaScript/AJAX
	 */
    public function indexAction()
    {
    }

	/**
	 * Show a lab in the index view
	 */
	public function showlabAction() {
		$this->_helper->layout->disableLayout();
		$lab = array(
			"code"=>$this->_request->getParam("code"),
			"name"=>$this->_request->getParam("name")
		);
		$this->view->lab = $lab;

        if (APPLICATION_ENV == "production") {
            $this->view->lab_url = "http://lab.palo-verde.us/";
        } else {
            $this->view->lab_url = "http://dev.pvlabs.us/";
        }
	}
}