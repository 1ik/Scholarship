<?php

class Information_model extends CI_Model
{
    function getInfo()
    {
        $this->db->select('*');
        $q = $this->db->get('information');
        
        
        if($q->num_rows()>0)
        {
            foreach($q->result() as $row)
            {
                $data[]=$row; 
            }
            return $data;
        }
    }
    
    function getMinimunCGPAInfo()
    {
        $this->db->select('*');
        $q = $this->db->get('minumum_cgpa');
        
        
        if($q->num_rows()>0)
        {
            foreach($q->result() as $row)
            {
                $data[]=$row; 
            }
            return $data;
        }
    }
    
    function getPerformanceInfo()
    {
        $this->db->select('*');
        $q = $this->db->get('performance_table');
        
        
        if($q->num_rows()>0)
        {
            foreach($q->result() as $row)
            {
                $data[]=$row; 
            }
            return $data;
        }
    }
}
