<?php
if (isset($_POST['id'])) {

    $exitEmployer = new EmployerController();
    $employer = $exitEmployer->deleteEmployer();
}
