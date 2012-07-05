<?php

    class Site_expert extends CI_Model {
    
        function __construct()
        {
            parent::__construct();
        }
    
        function getSiteName($sitename)
        {
            $query = @$this->db->get_where('sites', array('name'=>$sitename), 1);
            $row = @$query->row();
            return @$row->fullname;
        }
    
    }
    
?>