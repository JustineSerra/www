<?php

require_once __DIR__ . "/../repositories/UserRepository.php";

class UserController
{
    private $repo;

    public function __construct()
    {
        $this->repo = new UserRepository();
    }

    public function index()
    {
        $users = $this->repo->getAll();
        include __DIR__ . "/../views/users.php";
    }

    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $this->repo->create($_POST["nom"],$_POST["email"]);
            header("Location:index.php");
            exit;
        }

        include __DIR__ . "/../views/create_user.php";
    }

    public function edit()
    {
        $id=$_GET["id"];

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $this->repo->update(
                $id,
                $_POST["nom"],
                $_POST["email"]
            );

            header("Location:index.php");
            exit;
        }

        $user=$this->repo->getById($id);

        include __DIR__ . "/../views/edit_user.php";
    }

    public function delete()
    {
       $id= $_GET["id"] ?? null;

       if($id) {
        $this->repo->delete($id);
       }

        header("Location:index.php");
        exit;
    }
}