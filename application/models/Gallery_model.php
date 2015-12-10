<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function all()
	{
		$result = $this->db->get('gallery');
		return $result;
	}

	public function find($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('gallery');
		return $row;
	}

	public function create($data)
	{
		try{
			$this->db->insert('gallery', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function update($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('gallery', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function delete($id)
	{
		try {
			$this->db->where('id',$id)->delete('gallery');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}

}