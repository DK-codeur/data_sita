<?php

    class Employe {
        public $id;
        public $nom;
        public $prenoms;
        public $genre;
        public $naissance;
        public $telephone;
        public $email;
        public $residence;

        function __construct($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT * FROM employe WHERE employe_id = ?');
            $req->execute([$id]);
            $data = $req->fetch();

            $this->id         = $id;
            $this->nom        = $data['nom'];
            $this->prenoms    = $data['prenoms'];
            $this->genre      = $data['genre'];
            $this->naissance  = $data['naissance'];
            $this->telephone  = $data['telephone'];
            $this->email      = $data['email'];
            $this->residence  = $data['residence'];
        }

     

        //get all student
        static function getAllEmploye() {
            global $db;
            $req = $db->prepare('SELECT * FROM employes');
            $req->execute([]);
            return $req->fetchAll();
        }


         //get latest student
         static function getLatestEmploye() {
            global $db;
            $req = $db->prepare('SELECT * FROM employes
                                 ORDER BY id_employe DESC
                                 LIMIT 5
                                ');
            $req->execute([]);
            return $req->fetchAll();
        }

        //verify student id
        static function verifEmployeId($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT * FROM students WHERE id_student = ?');
            $req->execute([$id]);
            return $req->fetch();
        }

          //count all student
          static function countAllEmploye() {
            global $db;

            $req = $db->prepare('SELECT count(*) AS total_employe FROM employes');
            $req->execute([]);
            return $req->fetch();
        }

         //count all MEN
         static function countAllMen() {
            global $db;

            $req = $db->prepare('SELECT count(*) AS total_men 
                                 FROM employes
                                 WHERE genre="M"
                                ');
            $req->execute([]);
            return $req->fetch();
        }

        
         //count all Wommen
         static function countAllWomen() {
            global $db;

            $req = $db->prepare('SELECT count(*) AS total_women 
                                 FROM employes
                                 WHERE genre="F"
                                ');
            $req->execute([]);
            return $req->fetch();
        }


         //Effectif like Niveau
         static function effectifLikeNiveau($likeClasse) {
            global $db;
            $likeClasse = str_secure($likeClasse);
            $req = $db->prepare('SELECT stds.*, cl.nom AS classe, com.nom AS commune 
                                 FROM students stds
                                 INNER JOIN classe cl ON cl.id_classe = stds.id_student
                                 INNER JOIN commune com ON com.id_commune = stds.id_student
                                 WHERE classe LIKE ?%
                                 ORDER BY stds.nom ASC
                                ');
            $req->execute([$likeClasse]);
            return $req->fetchAll();
        }

        //insert student
        static function insertEmploye($nom, $prenoms, $genre, $naissance, $telephone, $email, $residence) {
            global $db;
            $req = $db->prepare('INSERT INTO `employes`(`nom`, `prenoms`, `genre`, `naissance`, `telephone`, `email`, `residence`)
                                    VALUES(?,?,?,?,?,?,?)
                                ');
            $req->execute([$nom, $prenoms, $genre, $naissance, $telephone, $email, $residence]);
        }


        //--------------------------------------------------------


        //(select * from students) R: bse a classe name i unique in classe table also for commune
        static function getAllStudentR() {
            global $db;
            $req = $db->prepare('SELECT * FROM students ORDER BY nom ASC');

            $req->execute([]);
            return $req->fetchAll();
        }


        // getLatestStudent R
        static function getLatestStudentR() {
            global $db;
            $req = $db->prepare('SELECT * 
                                 FROM students
                                 ORDER BY id_student DESC
                                 LIMIT 5
                               ');
            $req->execute([]);
            return $req->fetchAll();
        }


        //getstudentbyid R
        static function getStudentByIdR($id) {
            global $db;
            $id = str_secure($id);

            $req = $db->prepare('SELECT * 
                                 FROM students 
                                 WHERE id_student = ?
                                ');
            $req-> execute([$id]);
            return $req->fetch();
        }

        //Effectif like Niveau R
        static function effectifLikeNiveauR($likeClasse) {
            global $db;
            $likeClasse = str_secure($likeClasse);
            $req = $db->prepare('SELECT * 
                                 FROM students 
                                 WHERE id_classe LIKE ?
                                 ORDER BY nom ASC
                                ');
            $req->execute([$likeClasse.'%']);
            return $req->fetchAll();
        }

        //countEffectifLikeNiveau R
        static function CountEffectifLikeNiveauR($likeClasse) {
            global $db;
            $likeClasse = str_secure($likeClasse);
            $req = $db->prepare('SELECT count(*) as niveau 
                                 FROM students  
                                 WHERE id_classe LIKE ?
                                ');
            $req->execute([$likeClasse.'%']);
            return $req->fetch();
        }
        
                
    }