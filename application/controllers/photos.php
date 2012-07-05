<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photos extends MY_Controller {

    public function index($param = null)
    {
        global $website;
        
        echo($website . "!" . $param . "!");
        $this->load->view('frontviews/photos');
    }

}