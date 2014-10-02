<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Construction extends MY_Controller {
	
    function __construct()
    {
        parent::__construct();
        $this->css = array();
        $this->js  = array();
        $this->header = "construction/header";
        $this->footer = "construction/footer";
    }

    public function index()
    {
        $this->loadView('construction/index');
    }
}