<?php

class EmployerController
{

    public function getAllEmployer()
    {
        $animals = Employer::getAll();
        return $animals;
    }
    public function getOneEmployer()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $employe = Employer::getEmployer($data);
            return $employe;
        }
    }
    public function addEmploye()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nom' => $_POST['nom'],
                'prenom ' => $_POST['prenom'],
            );
            $result = Employer::add($_POST);
            if ($result == 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }
    public function updateEmployer()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom ' => $_POST['prenom'],
            );
            $result = Employer::update($_POST);
            if ($result == 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }
    public function deleteEmployer()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Employer::delete($data);
            if ($result == 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }
}
