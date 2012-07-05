<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {



    public function index()
    {
        $this->load->view('frontviews/front');
    }

    
    public function runsite($site = NULL)
    {
            if($site == null)
            {
                $this->index();
                return;
            }

        
            $this->load->model('Site_expert');
            
            $thisSite = $this->Site_expert->getSiteName($site);
            
            if($thisSite == null)
            {
                $this->load->view('frontviews/siteNotFound');
                return;
            }
            
            $data['segment'] = $site;
            $data['sitename'] = $thisSite;
            
            $this->load->view('frontviews/home', $data);
    }

}