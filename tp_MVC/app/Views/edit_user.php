<h1>Modifier</h1>

<form action="index.php?controller=user&action=edit&id=<?= $user["id"] ?>" method="POST">

Nom

<input type="text" name="nom" value="<?= $user["nom"] ?>" required>

<br><br>

Email

<input type="email" name="email" value="<?= $user["email"] ?>" required>

<br><br>

<button type="submit">Modifier</button>

</form>