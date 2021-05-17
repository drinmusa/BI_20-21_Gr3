<?php

    class Hotel{
        private $ID;
        private $name;
        private $address;
      

        function __construct(){
        }
        
        // Methods
        function set_ID($ID) {
            $this->ID = $ID;
        }
        function get_ID() {
            return $this->ID;
        }

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }

        // Methods
        function set_address($email) {
            $this->email = $email;
        }
        function get_address() {
            return $this->address;
        }
        
    }
  

    
class Client extends Hotel{
  
 private $name;
 private $room;

 function set_name($name) {
    $this->name = $name;
}
function get_name() {
    return $this->name;
}
 // Methods
 function set_room($room) {
    $this->room = $room;
}
function get_room() {
    return $room->room;
}
    
}

?>