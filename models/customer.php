<?php
class Customer{
	  public $id;
    public $name;
    public $title;
    public $address;
    public $city;
    public $stateID;
    public $countryID;
    public $postalCode;
    public $email;
    public $isActive;
    public $modifiedBy;
    public $modifiedDate;
    public $createdBy;
    public $createdDate;

    public function __construct($id= '', $name= '' ,$title= '',$address= '', $city= '',$stateID= '',$countryID= '',$postalCode= '',$email= '',$isActive= '',  $modifyID= '',$modifiedDate= '',$createdBy= '', $createdDate= '') {
      $this->id = $id;
      $this->name  = $name;
      $this->title  = $title;
      $this->address  = $address;
      $this->city  = $city;
      $this->stateID  = $stateID;
      $this->countryID  = $countryID;
      $this->postalCode  = $postalCode;
      $this->email  = $email;
      $this->isActive  = $isActive;
      $this->modifyID  = $modifyID;
      $this->modifiedDate  = $modifiedDate;
      $this->createdBy  = $createdBy;
      $this->createdDate  = $createdDate;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM customer where IsActive = 1 ');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Customer($post['CustomerID'], $post['CustomerName'], $post['CustomerTitle'],
        	$post['Address1'],
        	$post['City'],
        	$post['StateID'],
        	$post['CountryID'],
        	$post['PostalCode'],
        	$post['Email'],
        	$post['IsActive'],
        	$post['ModifyBy'],
        	$post['ModifyDate'],
        	$post['CreateBy'],
        	$post['CreateDate']
        	);
      }
      return $list;
    }

    public static function getById($id){
      $list;
      $db = Db::getInstance();
      
      $req = $db->query("SELECT * FROM customer where CustomerID = '$id' ");

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list = new Customer($post['CustomerID'], $post['CustomerName'], $post['CustomerTitle'],
          $post['Address1'],
          $post['City'],
          $post['StateID'],
          $post['CountryID'],
          $post['PostalCode'],
          $post['Email'],
          $post['IsActive'],
          $post['ModifyBy'],
          $post['ModifyDate'],
          $post['CreateBy'],
          $post['CreateDate']
          );
      }
      return $list;

    }

    public static function insert($Customer)
    {
    	$db = Db::getInstance();
		$custTitle = $Customer-> title;
		$custTitle = !empty($Customer-> title) ? "'$custTitle'" : "NULL";
		$custAddress = $Customer-> address;
		$custAddress = !empty($Customer-> address) ? "'$custAddress'" : "NULL";
		$custCity = $Customer-> city;
		$custCity = !empty($Customer-> city) ? "'$custCity'" : "NULL";
		$custPostalCode = $Customer-> postalCode;
		$custPostalCode = !empty($Customer-> postalCode) ? "'$custPostalCode'" : "NULL";
    	$req = $db->exec("INSERT INTO customer ( CustomerName,CustomerTitle,Address1,City,StateID,CountryID,PostalCode, Email,CreateBy,ModifyBy, IsActive) VALUES ('" . $Customer-> name . "'," . $custTitle . "," . $custAddress . "," . $custCity . "," . $Customer-> stateID . ", " . $Customer-> countryID . ", " . $custPostalCode . ", '" . $Customer-> email . "', '" . $Customer-> createdBy . "','". $Customer-> createdBy ."',1)");
		echo '<h1 style="color: green">Customer added!</h1>';
    }

    public static function delete($CustID)
    {
      $db = Db::getInstance();
      $req = $db->exec("UPDATE customer SET IsActive=0 WHERE CustomerID = '$CustID'");
	  echo '<h1 style="color: green">Customer deleted!</h1>';
    }

    public static function update($Customer)
    {
      $db = Db::getInstance();
		$custTitle = $Customer-> title;
		$custTitle = !empty($Customer-> title) ? "'$custTitle'" : "NULL";
		$custAddress = $Customer-> address;
		$custAddress = !empty($Customer-> address) ? "'$custAddress'" : "NULL";
		$custCity = $Customer-> city;
		$custCity = !empty($Customer-> city) ? "'$custCity'" : "NULL";
		$custPostalCode = $Customer-> postalCode;
		$custPostalCode = !empty($Customer-> postalCode) ? "'$custPostalCode'" : "NULL";
      $req = $db->exec("UPDATE customer SET CustomerName='" . $Customer-> name . "',CustomerTitle=" . $custTitle . ",Address1= " . $custAddress . ",City=" . $custCity . ",StateID=" . $Customer-> stateID . ", CountryID=" . $Customer-> countryID . ",PostalCode=" . $custPostalCode . ",Email= '" . $Customer-> email . "',ModifyBy= '" . $Customer-> modifiedBy . "'  WHERE CustomerID = '$Customer->id'");
	  echo '<h1 style="color: green">Customer updated!</h1>';
    }
}
?>