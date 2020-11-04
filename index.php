<?php

class User{
  
        public $name;
        public $username;
        public $email;

      function set_name($name){
        $this->name = $name;
      }
      function get_name(){
        return $this->name;
      }
      function set_username($username){
        $this->username = $username;
      }
      function get_username(){
        return $this->username;
      } 
      function set_email($email){
        $this->email = $email;
      }
      function get_email(){
        return $this->email;
      }

      function add_friend($name){
        echo $name." Added a Friend <br>";
      }
      function post_status($name){
        echo $name." Posted a Status <br>";
      }
    }

    $output = new User();

    $output->set_name("Lailynette");
    $output->set_email("llnyttburton08@gmail.com");
    $output->set_username("Lei1008");

    echo "Name: " . $output->get_name() . "<br>";
    echo "Username: " . $output->get_username() . "<br>";
    echo "Email: " . $output->get_email() . "<br>";

    $output->add_friend("<br>Lailynette");
    $output->post_status("<br>Lailynette");