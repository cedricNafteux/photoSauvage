<header >

    <head>
        <div class="row">
            <div class="col-8">
                <h1 class="text-center ">Photo sauvage</h1>
            </div>
            <div class="col-4">
                <?php
                if(!$connected) {
                    echo '<br><a href="index.php?entity=user&action=connect" class="btn btn-primary btn-sm"><i class="fa fa-sign-in-alt"></i> Se connecter</a>';
                    echo '<a href="index.php?entity=user&action=create" class="btn btn-secondary btn-sm">Créer un compte</a>';
                } else {
                    echo '<h5>Bonjour '.$_SESSION['pseudo'].'</h5>';
                    echo '<a href="index.php?entity=user&action=disconnect" class="btn btn-primary">Déconnexion</a><br>';
                }
                ?>
            </div>
        </div>
    </head>







</header>