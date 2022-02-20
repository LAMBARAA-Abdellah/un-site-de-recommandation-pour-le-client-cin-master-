<!-- $stmt = $con->prepare("insert into table columns (name, email) values (:name, :email)");
$stmt->execute(["name" => $name, "email" => $email]); -->
<?php
if (isset($_POST['id'])) {


    $exitEmployer = new EmployerController();
    $employer = $exitEmployer->getOneEmployer();
}
if (isset($_POST['submit'])) {


    $exitEmployer = new EmployerController();
    $employer = $exitEmployer->updateEmployer();
}
?>

<div>
    <h1>Modifier empolyer</h1>
    <a href="<?php echo BASE_URL; ?>">
        <i>Home</i>
    </a>
    <form method='post'>
        <label>nom</label>
        <input type="text" name="nom" value="<?php echo $employer->nom; ?>">
        <input type="hidden" name="id" value="<?php echo $employer->id; ?>">
        <label>Prenom</label>

        <input type="text" name="prenom" value="<?php echo $employer->prenom; ?>">

        <button type=" submit" name="submit">Modifier</button>
    </form>
</div>