<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="index.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php
        if($connected){  
            echo '<li class="nav-item active">
              <a class="nav-link" href="index.php?entity=photo&action=create">Poster une image<span class="sr-only">(current)</span></a>
            </li>';
            echo '<li class="nav-item">
            <a class="nav-link" href="index.php?entity=photo&action=listperso">Voir vos photos<span class="sr-only">(current)</span></a>
          </li>';
          echo '<li class="nav-item">
          <a class="nav-link" href="index.php?entity=map&action=loc">vous localiser<span class="sr-only">(current)</span></a>
        </li>';
        }
        ?>
    </ul>
  </div>
</nav>