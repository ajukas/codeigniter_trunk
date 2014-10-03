<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Mikhail Ajukas
 */
class MY_Controller extends CI_Controller
{
    
    public $data = array();
    public $css  = array();
    public $js   = array();
    public $header = "base/header";
    public $footer = "base/footer";
    public $title = "";
    
    public function __construct()
    {
        parent::__construct();

         //including css
        $this->css["style"] = base_url('assets/css/style.css');

         //including js
        $this->js["general"] = base_url('assets/js/general.js');
    }
    
    public function addData($arrayData=array())
    {
        $this->data = array_merge($this->data, $arrayData);
    }
    
    public function getData()
    {
        return $this->data;
    }

    public function loadView($content='base/home')
    {
        $this->addData(array('title' => $this->title));
        $this->addData(array("css" => $this->css));
        $this->addData(array("js" => $this->js));
        $this->addData(array('header' => $this->header));
        $this->addData(array('content' => $content));
        $this->addData(array('footer' => $this->footer));
        $this->load->view('base/html', $this->data);
    }
    
}
