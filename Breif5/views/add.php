<!-- $stmt = $con->prepare("insert into table columns (name, email) values (:name, :email)");
$stmt->execute(["name" => $name, "email" => $email]); -->
<?php
if (isset($_POST['submit'])) {
    // var_dump($_POST);

    $newEmployer = new EmployerController();
    $newEmployer->addEmploye();
}
?>

<div>
    <h1>Ajouter empolyer</h1>
    <a href="<?php echo BASE_URL; ?>">
        <i>Home</i>
    </a>
    <form method='post'>
        <label>nom</label>
        <input type="text" name="nom">
        <label>Prenom</label>
        <input type="text" name="prenom">
        <button type="submit" name="submit">submit</button>
    </form>

</div>