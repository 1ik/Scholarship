<?php
class News_model extends CI_Model
{
    function getLastNews()
    {
        
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->limit(2);
        $q = $this->db->get('news');
        
        
        if($q->num_rows()>0)
        {
            foreach($q->result() as $row)
            {
                $data[]=$row; 
            }
            return $data;
        }
    }
    function getAllNews()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $q = $this->db->get('news');
        
        
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
