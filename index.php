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
        echo $name ." Added a friend <br>";
      }
      function post_status($name){
        echo $name ." Posted a status <br>";
      }
    }

    $example = new User();
    $example->set_name("Lailynette");
    $example->set_email("llnyttburton08@gmail.com");
    $example->set_username("Lei1008");

    echo "Name: " . $example->get_name() . "<br>";
    echo "Username: " . $example->get_username() . "<br>";
    echo "Email: " . $example->get_email() . "<br>";

    $example->add_friend("<br>Lailynette");
    $example->post_status("<br>Lailynette");