<?php
class Crud_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('contact2',$data);
        return true;
	}
	function display_records()
  {
    $query=$this->db->get("contact2");
    return $query->result();
  }
  

  function displayrecordsById($id)
	{
	$query=$this->db->query("select * from contact2 where id='".$id."'");
	return $query->result();
	}
	/*Update*/
	function update_records($name,$email,$subject,$id)
	{
	$query=$this->db->query("update contact2 SET name='$name',email='$email',subject='$subject' where id='".$id."'");
	}
	function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("contact2");
    return true;
  }
	
}