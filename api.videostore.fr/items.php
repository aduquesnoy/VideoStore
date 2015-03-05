<?php

    public class Items {
    
        private $id;
        private $name;
        private $content;
        private $jacquette;
        private $type;
        
        function __construct($_id, $_name, $_content, $_jacquette, $_type) {
            
            $this->id = $_id;
            $this->name = $_name;
            $this->content = $_content;
            $this->jacquette = $_jacquette;
            $this->type = $_type;
            
        }
        
// ----------------- GETTERS ----------------- //        
        
        public function getId () {
            return $this->id
        }
        public function getName () {
            return $this->name
        }
        public function getContent () {
            return $this->content
        }
        public function getJacquette () {
            return $this->jacquette
        }
        public function getType () {
            return $this->type
        }
           
// ----------------- SETTERS ----------------- //        
        
        public function setName ($_name) { 
            $this->nom = $_nom; 
        }
        public function setPrenom ($_content) {
            $this->prenom = $_prenom; 
        }
        public function setJacquette ($p_jacquette) {
            $this->jacquette = $_jacquette;
        }
        public function setType ($p_type) {
            $this->type = $_type;
        }
        
    }

?>