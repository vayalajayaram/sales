<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "leads";
 
    // object properties
    public $id;
    public $name;
    public $description;
    public $email;
    public $phone;
    public $status;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}

// create product
function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                name=:name, email=:email, description=:description, phone=:phone,status=:status, created=:created";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->phone=htmlspecialchars(strip_tags($this->phone));
	$this->status=htmlspecialchars(strip_tags($this->status));
    $this->created=htmlspecialchars(strip_tags($this->created));
 
    // bind values
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":phone", $this->phone);
	$stmt->bindParam(":status", $this->status);
    $stmt->bindParam(":created", $this->created);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}