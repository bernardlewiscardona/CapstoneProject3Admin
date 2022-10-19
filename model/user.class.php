<?php
require_once("database.php");
class users{
    private $user_id;
    private $lastname;
    private $firstname;
    private $email;
    private $contactNumber;
    private $username;
    private $password;
    protected $dbCon;

    public function __construct($user_id = 0, $lastname= '', $firstname = '', $email='',$contactNumber = '', $username='',$password='')
    {
        $this-> user_id = $user_id;
        $this-> lastname = $lastname;
        $this-> firstname = $firstname;
        $this-> email = $email;
        $this-> contactNumber = $contactNumber;
        $this-> username= $username;
        $this-> password = $password;

        $this->dbCon = new PDO(
            DB_TYPE.
            ":host=".DB_HOST.
            ";dbname=".DB_NAME,
            DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }

    public function setUserID($user_id){
        $this-> user_id= $user_id;
    }
    public function getItemID(){
        return $this-> user_id;
    }
    public function setLastName($lastname){
        $this-> lastname = $lastname;
    }
    public function getLastName(){
        return $this-> lastname;
    }
    public function setFirstName($firstname){
        $this-> firstname = $firstname;
    }
    public function getFirstName(){
        return $this-> firstname;
    }
    public function setEmail($email){
        $this-> email = $email;
    }
    public function getEmail(){
        return $this-> email;
    }
    public function setContactNumber($contactNumber){
        $this-> contactNumber = $contactNumber;
    }
    public function getContactNumber(){
        return $this-> contactNumber;
    }
    public function setUserName($username){
        $this-> username = $username;
    }
    public function getUserName(){
        return $this-> username;
    }
    public function setPassword($password){
        $this-> password = $password;
    }
    public function getPassword(){
        return $this-> password;
    }
    public function addNewUser(){
        try{
        $results = $this->dbCon->prepare("INSERT INTO users(Lastname,Firstname,Email,Contact_Number,UserName,Password) VALUES (?,?,?,?,?,?)");
        $results->execute([$this->lastname,$this->firstname,$this->email,$this->contactNumber,$this->username,$this->password]);
        }
        catch (Exception $error){
            return $error->getMessage();
        }
    }
    public function getAllUsers(){
        try{
            $results = $this->dbCon->prepare("SELECT * FROM users");
            $results->execute();
            return $results->fetchAll();
            }
            catch (Exception $error){
                return $error->getMessage();
            }
    }
    public function getUserByID(){
        try {
            $results= $this->dbCon->prepare("SELECT * FROM users WHERE User_ID=?");
            $results->execute([$this->user_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function deleteUser(){
        try {
            $results = $this->dbCon->prepare("DELETE FROM users WHERE User_ID=?");
            $results->execute([$this->user_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function updateUser(){
        try {
            $results = $this->dbCon->prepare("UPDATE users SET Lastname=?,Firstname=?,Email=?,Contact_Number=?,UserName=?,Password=? WHERE User_ID =?");
            $results->execute([$this->lastname,$this->firstname,$this->email,$this->contactNumber,$this->username,$this->password,$this->user_id]);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}






?>