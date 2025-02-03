<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>

<body>
    <h1>Welcome to the Pokedex!</h1>
    <?php foreach ($pokemonData as $pokemon): ?>
        <li>
            <a href="/pokemon?id=<?= $pokemon->id; ?>">
                <?= $pokemon->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
</body>

</html>