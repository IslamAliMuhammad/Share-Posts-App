<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function findUserByEmail($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');

            $this->db->bind(':email', $email);

            $row = $this->db->single();

            return $row;
        }

        public function registerUser($user){
            // prepare sql statement
            $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');

            // bind named parameter in prepared sql statement with value
            $this->db->bind(':name', $user['userName']);
            $this->db->bind(':email', $user['email']);
            $this->db->bind(':password', $user['password']);

            // excute prepared statement
            $isSuccess = $this->db->execute();

            return $isSuccess;
        }

        public function login($email, $password){

        }
    }
?>