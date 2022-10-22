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
class payment{
    private $payment_id;
    private $payment_method;
    private $createdAt;
    protected $dbCon;

    public function __construct($payment_id = 0, $payment_method= '', $createdAt= '')
    {
        $this-> payment_id = $payment_id;
        $this-> payment_method = $payment_method;
        $this-> createdAt = $createdAt;

        $this->dbCon = new PDO(
            DB_TYPE.
            ":host=".DB_HOST.
            ";dbname=".DB_NAME,
            DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }
    public function setPaymentID($payment_id){
        $this-> payment_id= $payment_id;
    }
    public function getPaymentID(){
        return $this-> payment_id;
    }
    public function setPaymentMethod($payment_method){
        $this-> payment_method = $payment_method;
    }
    public function getPaymentMethod(){
        return $this-> payment_method;
    }
    public function setCreatedAt($createdAt){
        $this-> createdAt= $createdAt;
    }
    public function getCreatedAt(){
        return $this-> createdAt;
    }
    public function addNewPayment(){
        try{
        $results = $this->dbCon->prepare("INSERT INTO payment (Payment_Method,Created_At) VALUES (?,?)");
        $results->execute([$this->payment_method,$this->createdAt]);
        }
        catch (Exception $error){
            return $error->getMessage();
        }
    }
    public function getAllPayment(){
        try{
            $results = $this->dbCon->prepare("SELECT * FROM payment");
            $results->execute();
            return $results->fetchAll();
            }
            catch (Exception $error){
                return $error->getMessage();
            }
    }
    public function getPaymentByID(){
        try {
            $results= $this->dbCon->prepare("SELECT * FROM payment WHERE Payment_ID=?");
            $results->execute([$this->payment_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function deletePayment(){
        try {
            $results = $this->dbCon->prepare("DELETE FROM payment WHERE Payment_ID=?");
            $results->execute([$this->payment_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function updatePayment(){
        try {
            $results = $this->dbCon->prepare("UPDATE payment SET Payment_Method=?,Created_At=? WHERE Payment_ID =?");
            $results->execute([$this->payment_method,$this->createdAt,$this->payment_id]);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
class client{
    private $client_id;
    private $lastname;
    private $firstname;
    private $email;
    private $contactNumber;
    private $username;
    private $password;
    private $company;
    private $position;
    protected $dbCon;

    public function __construct($client_id = 0, $lastname= '', $firstname = '', $email='',$contactNumber = '', $username='',$password='',$company='', $position='')
    {
        $this-> client_id = $client_id;
        $this-> lastname = $lastname;
        $this-> firstname = $firstname;
        $this-> email = $email;
        $this-> contactNumber = $contactNumber;
        $this-> username= $username;
        $this-> password = $password;
        $this-> company = $company;
        $this-> position = $position;
        $this->dbCon = new PDO(
            DB_TYPE.
            ":host=".DB_HOST.
            ";dbname=".DB_NAME,
            DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }
    public function setClientID($client_id){
        $this-> client_id= $client_id;
    }
    public function getClientID(){
        return $this-> client_id;
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
    public function setCompany($company){
        $this-> company = $company;
    }
    public function getCompany(){
        return $this-> company;
    }
    public function setPosition($position){
        $this-> position = $position;
    }
    public function getPosition(){
        return $this-> position;
    }
    public function addNewClient(){
        try{
        $results = $this->dbCon->prepare("INSERT INTO client(Lastname,Firstname,Email,Contact_Number,UserName,Password,Company, Position) VALUES (?,?,?,?,?,?,?,?)");
        $results->execute([$this->lastname,$this->firstname,$this->email,$this->contactNumber,$this->username,$this->password,$this->company,$this->position]);
        }
        catch (Exception $error){
            return $error->getMessage();
        }
    }
    public function getAllClient(){
        try{
            $results = $this->dbCon->prepare("SELECT * FROM client");
            $results->execute();
            return $results->fetchAll();
            }
            catch (Exception $error){
                return $error->getMessage();
            }
    }
    public function getClientByID(){
        try {
            $results= $this->dbCon->prepare("SELECT * FROM users WHERE User_ID=?");
            $results->execute([$this->user_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function deleteClient(){
        try {
            $results = $this->dbCon->prepare("DELETE FROM client WHERE Client_ID=?");
            $results->execute([$this->client_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function updateClient(){
        try {
            $results = $this->dbCon->prepare("UPDATE client SET Lastname=?,Firstname=?,Email=?,Contact_Number=?,UserName=?,Password=?,Company=?, Position=? WHERE Client_ID =?");
            $results->execute([$this->lastname,$this->firstname,$this->email,$this->contactNumber,$this->username,$this->password,$this->company,$this->position,$this->client_id]);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
class book{
    private $booking_id;
    private $user_id;
    private $client_id;
    private $qrcode;
    private $plan;
    private $platenumber;
    private $description;
    private $image;
    private $createdAt;
    private $payment_id;
    protected $dbCon;

    public function __construct($booking_id = 0, $user_id= '', $client_id= '', $qrcode= '',$plan= '',$platenumber= '', $description= '', $image= '', $createdAt='', $payment_id='' )
    {
        $this-> booking_id= $booking_id;
        $this-> client_id = $client_id;
        $this-> user_id= $user_id;
        $this-> qrcode= $qrcode;
        $this-> qrcode= $plan;
        $this-> platenumber= $platenumber;
        $this-> description= $description;
        $this-> image= $image;
        $this-> createdAt= $createdAt;
        $this-> payment_id= $payment_id;
        
        $this->dbCon = new PDO(
            DB_TYPE.
            ":host=".DB_HOST.
            ";dbname=".DB_NAME,
            DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }
    public function setBookingID($booking_id){
        $this-> booking_id = $booking_id;
    }
    public function getBookingID(){
        return $this-> booking_id;
    }
    public function setUserID($user_id){
        $this-> user_id = $user_id;
    }
    public function getUserID(){
        return $this-> user_id;
    }
    public function setClientID($client_id){
        $this-> client_id= $client_id;
    }
    public function getClientID(){
        return $this-> client_id;
    }
    public function setQrCode($qrcode){
        $this-> qrcode= $qrcode;
    }
    public function getQrCode(){
        return $this-> qrcode;
    }
    public function setPlan($plan){
        $this-> plan = $plan;
    }
    public function getPlan(){
        return $this-> plan;
    }
    public function setPlateNumber($platenumber){
        $this-> platenumber = $platenumber;
    }
    public function getPlateNumber(){
        return $this-> platenumber;
    }
    public function setDescription($description){
        $this-> description = $description;
    }
    public function getDescription(){
        return $this-> description;
    }
    public function setCompany($company){
        $this-> company = $company;
    }
    public function getCompany(){
        return $this-> company;
    }
    public function setImage($image){
        $this-> image = $image;
    }
    public function getImage(){
        return $this-> image;
    }
    public function setCreatedAt($createdAt){
        $this-> createdAt = $createdAt;
    }
    public function getCreatedAt(){
        return $this-> createdAt;
    }
    public function setPaymentID($payment_id){
        $this-> payment_id = $payment_id;
    }
    public function getPaymentID(){
        return $this-> payment_id;
    }
    public function addNewBook(){
        try{
        $results = $this->dbCon->prepare("INSERT INTO booking(Lastname,Firstname,Email,Contact_Number,UserName,Password,Company, Position) VALUES (?,?,?,?,?,?,?,?)");
        $results->execute([$this->lastname,$this->firstname,$this->email,$this->contactNumber,$this->username,$this->password,$this->company,$this->position]);
        }
        catch (Exception $error){
            return $error->getMessage();
        }
    }
    public function getAllBooks(){
        try{
            $results = $this->dbCon->prepare("SELECT booking.Booking_ID as BookID,users.Lastname as userLastName, users.Firstname as userFirstname,users.Email as userEmail, booking.PlateNumber as PlateNumber, booking.DescriptionCar as Description, booking.Plan as Plan
            FROM ((booking
            INNER JOIN users ON booking.User_ID = users.User_ID)
            INNER JOIN client ON booking.Client_ID = client.Client_ID)");
            $results->execute();
            return $results->fetchAll();
            }
            catch (Exception $error){
                return $error->getMessage();
            }
    }
    public function getBookByID(){
        try {
            $results= $this->dbCon->prepare("SELECT booking.Booking_ID as BookID,users.Lastname as userLastName, users.Email as userEmail, users.Firstname as userFirstname, client.Lastname as clientLastName, client.Firstname as clientFirstName, booking.PlateNumber as PlateNumber, booking.DescriptionCar as Description, booking.Plan as Plan, users.Contact_Number as ContactNumber, payment.Payment_Method as PaymentMethod, booking.Slot_Code as Slot
            FROM (((booking
            INNER JOIN users ON booking.User_ID = users.User_ID)
            INNER JOIN client ON booking.Client_ID = client.Client_ID)
            INNER JOIN payment ON booking.Payment_ID = payment.Payment_ID)
            WHERE booking.Booking_ID= ?;");
            $results->execute([$this->booking_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function deleteBook(){
        try {
            $results = $this->dbCon->prepare("DELETE FROM booking WHERE Booking_ID=?");
            $results->execute([$this->booking_id]);
            return $results->fetchAll();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function updateBook(){
        try {
            $results = $this->dbCon->prepare("UPDATE client SET Lastname=?,Firstname=?,Email=?,Contact_Number=?,UserName=?,Password=?,Company=?, Position=? WHERE Client_ID =?");
            $results->execute([$this->lastname,$this->firstname,$this->email,$this->contactNumber,$this->username,$this->password,$this->company,$this->position,$this->client_id]);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
    public function getRecentBook(){
        try{
            $results = $this->dbCon->prepare("SELECT booking.Booking_ID as BookID,users.Lastname as userLastName, users.Firstname as userFirstname,users.Email as userEmail, booking.PlateNumber as PlateNumber, booking.DescriptionCar as Description, booking.Plan as Plan
            FROM ((booking
            INNER JOIN users ON booking.User_ID = users.User_ID)
            INNER JOIN client ON booking.Client_ID = client.Client_ID)");
            $results->execute();
            return $results->fetchAll();
            }
            catch (Exception $error){
                return $error->getMessage();
            }
    }

}
?>


