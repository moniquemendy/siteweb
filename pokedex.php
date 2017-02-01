<?php

require_once '_include/authenticate-user.php';

?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>BattleGo</title>
  </head>

  <body>
    <header>
      <h1>BattleGo</h1>

      <p>
        Bonjour, <?php echo $user['name'] ?> !
      </p>
    </header>

    <hr />

    <nav>
      <ul>
        <li><a href="pokedex.php?my_token=<?php echo $user['token']; ?>">Pokedex</a></li>
        <li><a href="logout.php?my_token=<?php echo $user['token']; ?>">Se déconnecter</a></li>
      </ul>
    </nav>

    <hr />

    <article>
      <h2>Pokedex</h2>

      <!-- Ici, il faut faire un SELECT avec SQL pour obtenir la liste des pokemons (dans une variable $pokemons).
      Puis, il faut faire une boucle for afin d'afficher leurs parametres et un lien pour chacun, dynamiquement. -->

      <table>
        <tr>
          <td>image de Boo</td>
          <td>nom de Boo</td>
          <td>description de Boo</td>
          <td>dresseur de Boo</td>
          <td><a href="pokemon.php?my_token=<?php echo $user['token']; ?>&pokemon_id=1">Detail</a></td>
        </tr>

        <tr>
          <td>image de Mokumokuren</td>
          <td>nom de Mokumokuren</td>
          <td>description de Mokumokuren</td>
          <td>dresseur de Mokumokuren</td>
          <td><a href="pokemon.php?my_token=<?php echo $user['token']; ?>&pokemon_id=2">Detail</a></td>
        </tr>
      </table>
    </article>
  </body>
</html>
