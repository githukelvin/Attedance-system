<?php
class crud
 {          

            // private database  object
        private  $db;
        // constructor to initialize private variable to the database connection\

        function __construct($conn){
            $this->db=$conn;
        }

      //*function to insert a new record into the attendee database */
      public  function  insertAttendees($fname,$lname,$dob,$number,$email,$pass,$avatar,$category){

            try {
                // define sql statement to be excuted
                $sql = "INSERT INTO attendee(firstname,lastname,dateofbirth,phone_number,Email_address,PASS,Avatar,Category) VALUES (:fname,:lname,:dob,:nmber,:email,:pass,:avatar,:category)";
                // prepare the sql statement for exuction
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':nmber',$number);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':pass',$pass);
                $stmt->bindparam(':avatar',$avatar);
                $stmt->bindparam(':category',$category);


                $stmt->execute();
                return true;

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;

            }
      }
      // FUNCTION OF UPDATING ATTENDEE
      public function updateAttendee($id,$fname,$lname,$dob,$number,$email,$pass,$avatar,$category ){
        try{
            $sql = " UPDATE `attendee` SET `firstname`=':fname',`lastname`=':lname',
            `phone_number`=':nmber',`dateofbirth`=':dob',`Email_address`=':email'
            ,`PASS`=':pass',`Avatar`=':avatar',`Category`=':category' WHERE Attendee_id = :id";
              $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':nmber',$number);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':pass',$pass);
            $stmt->bindparam(':avatar',$avatar);
            $stmt->bindparam(':category',$category);

    $stmt->execute();
    return true;
    }  catch(PDOException $e){
          echo $e->getMessage();
          return false;

      }
      }
      public function getID($id){
        $sql = "SELECT * FROM `attendee` a inner join category s on a.Category = s.category_id WHERE Attendee_id = :id";
        $stmt= $this->db->prepare($sql);

        $stmt->bindparam(':id',$id);
       


         $stmt->execute();
         $result = $stmt->fetch();
        return $result;
      }
// this  function below  is for  querying results from a database  i mean viewing databse records 

      public function getAttendees(){

        $sql = "SELECT * FROM `attendee` a inner join category s on a.Category = s.category_id;";
        $result = $this->db->query($sql);
        return $result;

      }
      public function getcategory(){

        $sql = "SELECT * FROM `category`;";
        $cart = $this->db->query($sql);
        return $cart;

      }
   
}

?>