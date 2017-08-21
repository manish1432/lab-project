<?php

class Main_model extends CI_Model
{
  //demo method to test model function
  function test_main()
	{
		echo "<h1>This is Test_Main Model function</h1>";
	}
  //--------------------------------------------------------
  // function to insert data
  function insert_data($data)
	{
    //$this is for search in this project
		$this->db->insert("tbl_user", $data);
	}
  //-------------------------------------------------------------
  function fetch_data()
  {
    //1111111111111111111111111111
    $query = $this->db->get("tbl_user");
    //////select * from tbl_user
    return $query;
    //-------------------------------------------------------------------------
    //222222222222222222222222222
    //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id ASC");
    //return $query;
    //--------------------------------------------------------------------------
    //33333333333333333333333333
    //$this->db->select("id, first_name, last_name");
    //$this->db->from("tbl_user");
    //$query = $this->db->get();
    //return $query;
  }

 function delete_data($id)
{
  $this->db->where("id", $id);
  $this->db->delete("tbl_user");
}

function fetch_single_data($id)
{
  $this->db->where("id", $id);
  $query = $this->db->get("tbl_user");
  return $query;

}

}

 ?>
