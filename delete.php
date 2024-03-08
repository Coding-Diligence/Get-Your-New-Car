<?
//     DELETE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $query = "DELETE FROM cars WHERE id = :id ";
        $response = $bdd->prepare($query);
        $response->execute([
            ':id' => $_POST['id'],
        ]);

        header('location:index.php');
        exit();
    
    // var_dump($_POST);die();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momento</title>
</head>
<body>
    <a class='btn red' href='' onclick="let result = confirm('Voulez-vous supprimer'); 
    if (result) { event.preventDefault(); document.getElementById('delete-<?= $data['id']?>').submit(); }" 
    title='Delete'>Delete</a>
        <form id='delete-<?= $data['id']?>' method='post' action='' hidden>
            <input type='hidden' name='id' value='<?= $data['id'] ?>'>
            <input type='hidden' name='task' value='carDelete'>
        </form>
</body>
</html>