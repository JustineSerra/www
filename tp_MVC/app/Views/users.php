<h1>Liste des utilisateurs</h1>

<a href="index.php?controller=user&action=create">
Ajouter
</a>

<hr>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Actions</th>
</tr>

<?php foreach($users as $user): ?>

<tr>

<td><?= $user["id"] ?></td>

<td><?= $user["nom"] ?></td>

<td><?= $user["email"] ?></td>

<td>

<a href="index.php?controller=user&action=edit&id=<?= $user["id"] ?>">
Modifier
</a>

|

<a href="index.php?controller=user&action=delete&id=<?= $user["id"] ?>">
Supprimer
</a>

</td>

</tr>

<?php endforeach;?>

</table>