<?php
class Biodata {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function tampilkan() {
        return "
        Hi, my name is {$this->firstname} {$this->lastname}<br>
        Phone Number: {$this->phone}<br>
        Address: {$this->address}
        ";
    }
}
?>