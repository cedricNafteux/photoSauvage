<h1>Vos photos</h1>
<div class="row flex">

<table class="table">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Nom du fichier</th>
            <th scope="col">Date</th>
            <th scope="col">Nombre de like</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($photos as $photo) {
        echo <<<TR
        <tr>
            <th scope="row">{$photo->getTitle_photo()}</th>
            <td>{$photo->getName_file()}</td>
            <td>{$photo->getPost_at()}</td>
            <td>{$photo->getNbr_like()}</td>
            <td></td>
        </tr>
        TR;

    }
     ?>
    </tbody>
</table>
</div>
        
