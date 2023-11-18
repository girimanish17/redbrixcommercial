<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model
{
   function search_intro($key){
     $q = $this->db->query("SELECT * FROM users where ( login_id LIKE '%".$key."%' or full_name LIKE '%".$key."%' ) AND status = '0' ");
     $result = $q->result_array();
     return $result;    
    }
		
	 /*---GET SINGLE RECORD---*/
    function getsingle($table, $where)
    {
        $q = $this->db->get_where($table, $where);
        return $q->row();
    }
	
	 /*<!--INSERT RECORD FROM SINGLE TABLE-->*/
    function insertData($table, $dataInsert)
    {
        $this->db->insert($table, $dataInsert);
        return $this->db->insert_id();
    }
	
	 /*<!--UPDATE RECORD FROM SINGLE TABLE-->*/
    function updateData($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
        return;
    }
	 /*<!--DELETE RECORD FROM SINGLE TABLE-->*/
    function deleteData($table, $where)
    {
        //$this->db->delete('mytable', array('id' => $id));
        $this->db->delete($table, $where);
        return;
    }
	
	 /*<!--GET ALL RECORD FROM SINGLE TABLE WITHOUT CONDITION-->*/
    function getAllrecord($table)
    {
        $this->db->select('*');
        $q = $this->db->get($table);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	function getAllrecordorder($table)
    {
        $this->db->select('*');
		$this->db->order_by('bank_name');
        $q = $this->db->get($table);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	/*<!--GET ALL RECORD FROM SINGLE TABLE WITHOUT CONDITION-->*/
    function getAllrecordnew($table,$fields)
    {
        $this->db->select($fields);
        $q = $this->db->get($table);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	  /*---GET MULTIPLE RECORD---*/
    function getAllwhere($table, $where)
    {
        $this->db->select('*');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function getAllwherenew($table, $where,$fields)
    {
        $this->db->select($fields);
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	function getAllwhereneworder($table, $where,$fields)
    {
        $this->db->select($fields);
		$this->db->order_by('id_green_date','DESC');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	function getAllwhereneworderace($table, $where,$fields)
    {
        $this->db->select($fields);
		$this->db->order_by('registration_date','DESC');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function getAllwhereorder($table, $where,$order)
    {
        $this->db->select('sum(amount) as amount,amount_date');
		$this->db->order_by('id',$order);
		$this->db->group_by('amount_date');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function getAllwheresum($table, $where)
    {
        $this->db->select_sum('amount');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function getAllwheresum_name($table, $where,$name)
    {
        $this->db->select_sum($name);
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function updatedownline($id)
    {
        $this->db->set('down_member', '`down_member` +1', FALSE);
		$this->db->where('user_id !=', $id);
		$this->db->where('id_green','1');
		$this->db->update('users');
        
    }
	
	function updatedclubline($upper_id)
    {
        $this->db->set('club_member', '`club_member` +1', FALSE);
		$this->db->where('user_id', $upper_id);
		$this->db->update('users');
        
    }
	
	function getalldownline($user_id,$fields)
    {
        $this->db->select($fields);
		$this->db->from('users');
		$search="FIND_IN_SET ('".$user_id."',upper_ids)";
		$this->db->where($search);
		$this->db->where('id_green','1');
		$this->db->order_by('user_id','DESC');		
		$query=$this->db->get();
		return $query->result();
        
    }
	function getalldownlineuser($user_id,$fields)
    {
        $this->db->select($fields);
		$this->db->from('users');
		$search="FIND_IN_SET ('".$user_id."',upper_ids)";
		$this->db->where($search);		
		$this->db->order_by('user_id','DESC');		
		$query=$this->db->get();
		return $query->result();
        
    }
	
	function getAllwherepayoutsin($table, $where,$order)
    {
        $this->db->select('sum(amount) as amount_in,DATE(entry_date) as entry_date');
		$this->db->order_by('id',$order);
		$this->db->group_by('DATE(entry_date)');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function getAllwherepayoutsout($table, $where,$order)
    {
        $this->db->select('sum(amount) as amount_out,amount_date');
		$this->db->order_by('id',$order);
		$this->db->group_by('amount_date');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function getAllwheredisrtibutr($table, $where)
    {
        $this->db->select('sum(amount) as amount,amount_date');		
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
		
	function getusedpins($user_id)
    {
        $this->db->select('p.sending_date,p.pin,p.used_id,p.used_date,u.full_name,u.login_id');
		$this->db->where('p.is_used_send','2');
		$this->db->where('p.send_id',$user_id);
		//$this->db->join('pins as p','p.pin=ap.pin');
		$this->db->join('users as u','u.user_id=p.used_id');
        $q = $this->db->get_where('pins as p');
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function gettransferpins($user_id)
    {
        $this->db->select('tp.*,u.full_name,u.login_id');
		$this->db->where('tp.user_id',$user_id);		
		$this->db->join('users as u','u.user_id=tp.transfer_to_id');
        $q = $this->db->get_where('transfer_pins as tp');
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }
	
	function transfer_report_in($from,$to,$user_id)
	{
		$this->db->select('p.*,u.login_id,u.full_name');	
		$this->db->from('points_in as p');		
		$this->db->where('p.user_id',$user_id);				
		$this->db->join('users as u','u.user_id = p.who_transfer');
		if($from!='')
		{			
			$this->db->where('DATE(p.transfer_date) >=',$from);
		}
		if($to!='')
		{				
			$this->db->where('DATE(p.transfer_date) <=',$to);
		}			
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
	
	function transfer_report_out($from,$to,$user_id)
	{
		$this->db->select('p.*,u.login_id,u.full_name');	
		$this->db->from('points_out as p');		
		$this->db->where('p.user_id',$user_id);				
		$this->db->join('users as u','u.user_id = p.who_transfer');
		if($from!='')
		{			
			$this->db->where('DATE(p.transfer_date) >=',$from);
		}
		if($to!='')
		{				
			$this->db->where('DATE(p.transfer_date) <=',$to);
		}			
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
	
	function getdatass()
	{
		$this->db->select('SUM(ui.amount) as amount,ui.user_id');	
		$this->db->from('user_income as ui');		
		$this->db->group_by(array('ui.user_id'));		
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
	
	function getdatass_user($uid)
	{
		$this->db->select('SUM(ui.request_amount) as amount');	
		$this->db->from('withdrawal_request as ui');
		$this->db->where('ui.user_id',$uid);		
		$this->db->group_by(array('ui.user_id'));		
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
	
	function getnonworkingd($uid,$for,$last_date)
	{
		$this->db->select('SUM(ui.amount) as amount,ui.level');	
		$this->db->from('user_income as ui');
		$this->db->where('ui.user_id',$uid);
		$this->db->where('ui.income_for',$for);
		$this->db->where('ui.amount_date',$last_date);		
		$this->db->group_by(array('ui.level'));		
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
	
	function get_all_users_closing()
	{
		$this->db->select('user_id');	
		$this->db->from('user_income as ui');		
		$this->db->group_by(array('ui.user_id'));		
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
	
	function withdrawal_report($from,$to,$user_id)
	{
		$this->db->select('w.*');	
		$this->db->from('withdrawal_request as w');		
		$this->db->where('w.user_id',$user_id);
		if($from!='')
		{			
			$this->db->where('DATE(w.request_date) >=',$from);
		}
		if($to!='')
		{				
			$this->db->where('DATE(w.request_date) <=',$to);
		}			
		$q = $this->db->get();
		if ($q->num_rows() > 0)
		{
		  return $q->result_array();
		}    
	}
    	
}