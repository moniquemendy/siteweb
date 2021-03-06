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
      <h2>Duel</h2>

      <div>
        pokemon du dresseur adverse
      </div>

      <div>
        pokemon du dresseur connecté
      </div>

      <form action="battle-post.php" method="post">
        <!-- Ici, il faut mettre un bouton pour soumettre une attaque vers le pokemon adverse. -->

        <!-- Apres chaque attaque, la page battle-post.php doit enregistrer l'attaque dans la table 'attacks',
        et ensuite rediriger sur la page battle.php pour que l'on puisse continuer le combat. -->

        <!-- Le combat s'arrete quand un des 2 pokemons a 0 ou un nombre negatif de points de vie. -->

        <!-- Remarque : Pour compter le nombre de point de vie d'un pokemon, il faut faire une requete SQL avec la fonction sum() -->
      </form>
    </article>
  </body>
</html>
