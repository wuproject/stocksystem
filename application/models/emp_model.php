<?php
class Emp_model extends CI_Model {
    public function __construct()
    {
    // Call the CI_Model constructor
        parent::__construct();
    }

    public function insemp(){
			$sql = "INSERT INTO staff (St_id,St_firstname,St_lastname,St_address,St_Email,St_mobile,St_position,St_username,St_password)
							VALUES ('".$_POST["ID"]."','".$_POST["fnamename"]."','".$_POST["lname"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["position"]."','".$_POST["username"]."',
							'".$_POST["password"]."')";

            /*$sql = "INSERT INTO staff (St_id,St_firstname,St_lastname,St_address,St_Email,St_mobile,St_position,St_username,St_password)
                      VALUES (".$this->db->staff($St_id).", ".$this->db->staff($St_firstname).", ".$this->db->staff($St_lastname).", ".$this->db->staff($St_address).", ".$this->db->staff($St_Email).", ".$this->db->staff($St_mobile).",
                       ".$this->db->staff($St_position).", ".$this->db->staff($St_username).", ".$this->db->staff($St_password).")";

              $this->db->query($sql);

              echo $this->db->affected_rows();*/

echo $sql;
        $query = $this->db->query($sql);



        //foreach($query->result() as $row){
                //set session
                //$_SESSION['username'] = $row->username;
                //$_SESSION['login'] = 1;
                $this->session->set_userdata('St_id');
                $this->session->set_userdata('St_firstname');
                $this->session->set_userdata('St_lastname');
                $this->session->set_userdata('St_address');
								$this->session->set_userdata('St_Email');
								$this->session->set_userdata('St_mobile');
								$this->session->set_userdata('St_position');
								$this->session->set_userdata('St_mobile');
								$this->session->set_userdata('St_mobile');



                $this->session->set_flashdata('msg_type', 'success');


            }

    /*public function showemploy()
    {

      //$query = $this->db->query("SELECT * FROM staff");
      $sql = "SELECT * FROM staff (St_id,St_firstname,St_lastname,St_address,St_Email,St_mobile,St_position,St_username,St_password)
              VALUES ('".$_POST["ID"]."','".$_POST["fnamename"]."','".$_POST["lname"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["position"]."','".$_POST["username"]."',
              '".$_POST["password"]."')";

      foreach ($query->result_array() as $row)
{
        echo $row['admin_id']."<br>";
        echo $row['admin_name']."<br>";
        echo $row['admin_adddate']."<br>";
}
}*/

public function getall()
{
  $sql = "SELECT * FROM staff(St_id,St_firstname,St_lastname,St_address,St_Email,St_mobile,St_position,St_username,St_password)" ;
  $query = $this->db->query($sql)
                    ->result();
  print_r($query);
}
}

?>
