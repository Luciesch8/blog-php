<?php 

class Crud{


    public function __construct(){

        $this->databases = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');

    }

    public function validateInscriptionUser(String $admin, String $name, String $lastname, String $email,  String $pseudo, String $password) 
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

    public function updateAccount($lastname, $name, $email, $pseudo, $id)
    {
        $stat = $this->databases->prepare('UPDATE user SET lastname = :lastname, name = :name, email = :email, pseudo = :pseudo WHERE id = :id');
        $stat->execute(array(':lastname' => $lastname, ':name' => $name, ':email' => $email, ':pseudo' => $pseudo, ':id' => $id));
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

    public function getOneTopicId($id){
        $stat = $this->databases->prepare('SELECT * FROM topic WHERE id_topic = :id');
        $stat->execute(array(':id'=> $id));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function deleteTopic($id_topic)
    {
        $stat = $this->databases->prepare('DELETE FROM topic WHERE id_topic = :id_topic');
        $stat->execute(array(':id_topic' => $id_topic));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function updateTopic($name, $id_topic)
    {
        $stat = $this->databases->prepare('UPDATE topic SET name = :name WHERE id_topic = :id_topic');
        $stat->execute(array(':name' => $name, ':id_topic' => $id_topic));
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
        $stat = $this->databases->prepare('DELETE FROM user WHERE id = :id'); 
        $stat->execute(array(':id' => $id));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getOneUser($id){
        $stat = $this->databases->prepare('SELECT * FROM user WHERE id = :id');
        $stat->execute(array(':id'=> $id));
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function updateUser($admin, $lastname, $name, $email, $pseudo, $id)
    {
        $stat = $this->databases->prepare('UPDATE user SET admin = :admin, lastname = :lastname, name = :name, email = :email, pseudo = :pseudo WHERE id = :id');
        $stat->execute(array('admin' => $admin, ':lastname' => $lastname, ':name' => $name, ':email' => $email, ':pseudo' => $pseudo, ':id' => $id));
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

        public function getAllArticle()
        {
            $stat = $this->databases->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 6 ');
            $stat->execute();
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getAllMyArticle($id_user) 
        {
            $stat = $this->databases->prepare('SELECT * FROM articles WHERE id_user = :id_user');
            $stat->execute(array(':id_user' => $id_user));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function deleteArticle($id)
        {
            $stat = $this->databases->prepare('DELETE FROM articles WHERE id = :id');
            $stat->execute(array(':id' => $id));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getOneArticle($id) 
        {
            $stat = $this->databases->prepare('SELECT * FROM articles WHERE id = :id');
            $stat->execute(array(':id' => $id));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function aleatoireArticle() 
        {
            $stat = $this->databases->prepare('SELECT * FROM articles ORDER BY RAND( ) LIMIT 6');
            $stat->execute();
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function updateArticle($id, $id_topic, $title, $content)
        {
            $stat = $this->databases->prepare('UPDATE articles SET id_topic = :id_topic, title = :title, content = :content WHERE id = :id');
            $stat->execute(array('id' => $id, ':id_topic' => $id_topic, ':title' => $title, ':content' => $content));
            $data = $stat->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    
        }
    //end article
}


?>