<?php

namespace App\Controllers;

use App\Models\PhotoModel;
use App\Models\CommentModel;
use \Mpdf\Mpdf;
use Dompdf\Dompdf;

class PhotoController extends Controller {

    public function create() {
        $this->render('Photo/formCreate');
    }

    public function new() {
        $model = new PhotoModel();
        $model->newPhoto();
        $this->render('Photo/formCreate');
    }

    public function list() {
        $model = new PhotoModel();
        $photos = $model->listPhoto();
        $param = ['photos' => $photos];
        $this->render('Photo/list', $param);
    }

    public function show() 
    {
        $idPhoto = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $model = new PhotoModel();
        $photo = $model->getPhotoById($idPhoto);


        $model = new CommentModel();
        $comments = $model->listComment($idPhoto);

        $param = [
            'photo' => $photo,
            'comments' => $comments
        ];
        $this->render('Photo/show', $param);

    }

    public function like() {

        // a faire : traitement
        $model = new PhotoModel();
        $photo = $model->traitLike();

        $rep = ['nbrLike' => $photo->getNbr_like()];
        
        // réponse vers le navigateur
        header('Content-type: application/json');
        echo json_encode($rep);
    }


    public function createpdf(){
    // $mpdf = new Dompdf();
    // $mpdf->WriteHTML('<h1>Hello world!</h1>');
    // $mpdf->Output();



    // instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>hello world</h1>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
    }

    public function listperso() {
        $model = new PhotoModel();
        $photos = $model->getPhotosByIdUser($_SESSION['idUser']);
        $param = ['photos' => $photos];
        $this->render('Photo/listPerso', $param);
    }

    public function listphotopdf() {
        $model = new PhotoModel();
        $photos = $model->getPhotosByIdUser($_SESSION['idUser']);
        $param = ['photos' => $photos];
        $this->renderHtml('Photo/listPerso', $param);
    }
}