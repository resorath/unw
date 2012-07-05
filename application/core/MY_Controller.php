<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    function __construct()
    {
        global $website;
        parent::__construct();
        $website = $this->uri->segment(1);
    }
}