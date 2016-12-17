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
                $this->session->set_userdata('St_id',$row->St_id);
                $this->session->set_userdata('St_firstname',$row->St_firstname);
                $this->session->set_userdata('St_lastname',$row->St_lastname);
                $this->session->set_userdata('St_address',$row->St_address);
								$this->session->set_userdata('St_Email',$row->St_Email);
								$this->session->set_userdata('St_mobile',$row->St_mobile);
								$this->session->set_userdata('St_position',$row->St_position);
								$this->session->set_userdata('St_username',$row->St_username);
								$this->session->set_userdata('St_password',$row->St_password);



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

/*public function getall() โชว์สินค้า
{
  $sql = "SELECT * FROM staff(St_id,St_firstname,St_lastname,St_address,St_Email,St_mobile,St_position,St_username,St_password)" ;
  $query = $this->db->query($sql)
                    ->result();
  print_r($query);
}*/

public function inspro(){
  $sql = "INSERT INTO product (P_id,Cpn_name,P_sort,P_name,P_price,P_quantity,P_cost,P_inventory)
          VALUES ('".$_POST["product_id"]."','".$_POST["comp_name"]."','".$_POST["category"]."','".$_POST["product_name"]."','".$_POST["pice"]."','".$_POST["num"]."','".$_POST["cost"]."',
          '".$_POST["inventories"]."')";



echo $sql;
    $query = $this->db->query($sql);



    //foreach($query->result() as $row){
            //set session
            //$_SESSION['username'] = $row->username;
            //$_SESSION['login'] = 1;
            $this->session->set_userdata('P_id',$row->P_id);
            $this->session->set_userdata('Cpn_name',$row->Cpn_name);
            $this->session->set_userdata('P_cost',$row->P_cost);
            $this->session->set_userdata('P_quantity',$row->P_quantity);
            $this->session->set_userdata('P_sort',$row->P_sort);
            $this->session->set_userdata('P_name',$row->P_name);
            $this->session->set_userdata('P_price',$row->P_price);
            $this->session->set_userdata('P_inventory',$row->P_inventory);



            $this->session->set_flashdata('msg_type', 'success');


        }

}

?>
