<?php
    class Users{
        private $id_compte;
        private $mail_compte;
        private $tel_compte;
        private $adresse_compte;
        private $id_droit;
        // CONSTRUCTEUR
        public function __construct($id, $mail, $tel, $adresse)
        {
            $this -> id_compte = $id;
            $this -> mail_compte = $mail;
            $this -> adresse_compte = $adresse;
        }
        // GETTER
        public function getIdCompte():int{
            return $this -> id_compte;
        }
        public function getMailCompte():string{
            return $this -> mail_compte;
        }
        public function getTelCompte():string{
            return $this -> tel_compte;
        }
        public function getAdresseCompte():string{
            return $this -> adresse_compte;
        }

        // SETTER
        public function setIdCompte($id):void{
            $this -> id_compte = $id;
        }
        public function setMailCompte($mail):void{
            $this -> mail_compte = $mail;
        }
        public function setTelCompte($tel):void{
            $this -> tel_compte = $tel;
        }
        public function setAdresseCompte($adresse):void{
            $this -> adresse_compte = $adresse;
        }

        public getUserByMail($bdd){
            
        }

    }
?>