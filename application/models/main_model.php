<?php
class Main_model extends CI_Model {
	
	public function get_student_info($conditions, $table, $fields , $or_conditions = array()){
		if(!isset($conditions) || !isset($table) || !isset($fields) )
                {
			return null;
		}
		$this->db->select($fields);
		$this->db->from($table);
		$this->db->where($conditions);
                if(count($or_conditions)!=0){
                    $this->db->or_where($or_conditions);
                }
		$query = $this->db->get();
		return $query;
	}
	
	public function update_info($id, $table_name, $data){
            
		if(!isset($id) || !isset($table_name) || !isset($data))
                {
			return false;
		}
		$this->db->where('id', $id);
		$this->db->update($table_name, $data); 
		return true;
	}
	
	public function createnewstudent($tablename,$data){
		$this->db->insert($tablename,$data);
	}
	
	
	
	
	public function gettest(){
		return 'good result';
	}
        
        public function insert_warning_table($id)
        {
            echo 'submit signup here '.$id;
            //die();
                $data = array
                (
                'uid' => '' ,
                'id' => $id ,
                'hit' => '0',
                'remark'=>''    
                );

                $this->db->insert('warning', $data); 
        }
        
        public function getTokenRange()
        {
            $this->db->select('*');
            $q = $this->db->get('token');
        
        
            if($q->num_rows()>0)
            {
                foreach($q->result() as $row)
                {
                    $data[]=$row; 
                }
                return $data;
            }
        }
        
        public function send_image_url($id)
        {
            $this->db->select('image_url');
            $this->db->where('id',$id);
            $q = $this->db->get('primary');
        
        
            if($q->num_rows()>0)
            {
                foreach($q->result() as $row)
                {
                    $data[]=$row; 
                }
                return $data;
            }
        }
        
        public function send_scholarship_information($id)
        {
            $this->db->select('*');
            $this->db->where('id',$id);
            $q = $this->db->get('scholar_amount');
        
        
            if($q->num_rows()>0)
            {
                foreach($q->result() as $row)
                {
                    $data[]=$row; 
                }
                return $data;
            }
        }
        
        
        function delete($id, $tablename){
            $this->db->delete($tablename, array('id' => $id));
        }
	
	
}
 