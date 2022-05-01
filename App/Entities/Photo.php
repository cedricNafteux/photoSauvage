<?php
namespace App\Entities;

use JsonSerializable;

class Photo implements JsonSerializable {

/* ---------- PROPRIETES ---------- */
    private ?int $id_photo;
    private string $title_photo;
    private string $name_file;
    private string $post_at;
    private int $id_user;
    private string $pseudo;
    private int $nbr_like;

/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $title='', string $name='', int $id_user=0){
        $this->id_photo = null;
        $this->title_photo = $title;
        $this->name_file = $name;
        $this->post_at = '';
        $this->id_user = $id_user;
        $this->pseudo = '';
        $this->nbr_like = 0;
    }

/* ---------- GETTERS ---------- */
    public function getId_photo(){return $this->id_photo;}
    public function getTitle_photo(){return $this->title_photo;}
    public function getName_file(){return $this->name_file;}
    public function getPost_at(){return $this->post_at;}
    public function getId_user(){return $this->id_user;}
    public function getPseudo(){return $this->pseudo;}
    public function getNbr_like(){return $this->nbr_like;}

/* ---------- METHODES ---------- */    
    public function updateNbrLike(int $valLike){
        $this->nbr_like += $valLike;
    }

    public function jsonSerialize() : mixed{
        return get_object_vars($this);
    }
}
