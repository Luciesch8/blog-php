<?php 

class Crud{


    public function __construct(){

        $this->databases = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');

    }

    public function validateInscriptionUser(String $admin, String $name, String $lastname, String $email,  String $pseudo, String $password) //inscription
    {
        $stat = $this->databases->prepare('INSERT INTO user (`admin`, `lastname`, `name`, `pseudo`, `email`, `password`) VALUES (:admin, :lastname, :name, :pseudo, :email, :password)');
        $stat->execute(array('admin' => $admin, ':lastname' => $lastname ,':name' => $name, ':email' => $email, ':pseudo' => $pseudo, ':password' => $password));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;

    }

    public function checkLogin(String $email, String $password)
    {
        $stat = $this->databases->prepare('SELECT email, password FROM user WHERE email = :email AND password = :password');
        $stat->execute(array(':email' => $email, ':password' => $password));
        $data = $stat->fetch(PDO::FETCH_ASSOC);
        return $data;

    }

    public function user(String $email)
    {
        $stat = $this->databases->prepare('SELECT * FROM user WHERE email = :email');
        $stat->execute(array(':email' => $email));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    //start topics


    public function getAllTopics()
    {
        $stat = $this->databases->prepare('SELECT * FROM topic');
        $stat->execute();
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function addTopic(String $name)
    {
        $stat = $this->databases->prepare('INSERT INTO topic (`name`) VALUES (:name)');
        $stat->execute(array(':name' => $name));
        $data = $stat->fetch(PDO::FETCH_ASSOC);
        return $data;

    }

    public function getOneTopic($name){
        $stat = $this->databases->prepare('SELECT * FROM topic WHERE name = :name');
        $stat->execute(array(':name'=> $name));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function deleteTopic($id_topic)
    {
        $stat = $this->databases->prepare('DELETE FROM topic WHERE id_topic = :id_topic'); //DELETE FROM `topic` WHERE `id_topic` = 10
        $stat->execute(array(':id_topic' => $id_topic));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    //end topics

    //start user


    public function getAllUser()
    {
        $stat = $this->databases->prepare('SELECT * FROM user');
        $stat->execute();
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function deleteUser($id)
    {
        $stat = $this->databases->prepare('DELETE FROM user WHERE id = :id'); //DELETE FROM `topic` WHERE `id_topic` = 10
        $stat->execute(array(':id' => $id));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    


    //end user

    //start article

        public function addArticle(String $id_user, String $id_topic, String $title, String $content)
        {
            $stat = $this->databases->prepare('INSERT INTO articles (`id_user`, id_topic, title, content) VALUES (:id_user, :id_topic, :title, :content)');
            $stat->execute(array(':id_user' => $id_user, ':id_topic' => $id_topic, ':title' => $title, ':content' => $content));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getAllArticle() // tout les articles
        {
            $stat = $this->databases->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 6 ');
            $stat->execute();
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getAllMyArticle($id_user) // tout mes articles
        {
            $stat = $this->databases->prepare('SELECT * FROM articles WHERE id_user = :id_user');
            $stat->execute(array(':id_user' => $id_user));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function deleteArticle($id)
        {
            $stat = $this->databases->prepare('DELETE FROM articles WHERE id = :id'); //DELETE FROM `topic` WHERE `id_topic` = 10
            $stat->execute(array(':id' => $id));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getOneArticle($id) // un seul article
        {
            $stat = $this->databases->prepare('SELECT * FROM articles WHERE id = :id');
            $stat->execute(array(':id' => $id));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function aleatoireArticle() // article aleatoire
        {
            $stat = $this->databases->prepare('SELECT * FROM articles ORDER BY RAND( ) LIMIT 6');
            $stat->execute();
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }


        // public function getAllArticleUsers() // tout les articles de la personne connecter
        // {
        //     $stat = $this->databases->prepare('SELECT * FROM article WHERE email = :email');
        //     $stat->execute(array('email' => $email));
        //     $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        //     return $data;
        // }

        // public function getAllArticleTopics() // tout les articles selon le theme choisi
        // {
        //     $stat = $this->databases->prepare('');
        //     $stat->execute(array('email' => $email));
        //     $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        //     return $data;
        // }
    
    
    //end article
}


?>