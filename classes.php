<?php

class Creation{

    private $id_creation;
    private $nom;
    private $description;
    private $taille;
    private $tps_creation;
    private $surface_tissu;
    private $categorie;
    private $chemin_img;
    private $tags;

    public function __construct(int $id_creation, string $nom, string $description, string $taille, int $tps_creation, string $surface_tissu, Categorie $categorie, SplFileInfo $chemin_img, array $tags) {
        $this->id_creation = $id_creation;
        $this->nom = $nom;
        $this->description = $description;
        $this->taille = $taille;
        $this->tps_creation = $tps_creation;
        $this->surface_tissu = $surface_tissu;
        $this->categorie = $categorie;
        $this->chemin_img = $chemin_img;
        $this->tags = $tags;
    }

    public function getIdCreation():int{
        return $this->id_creation;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getDescription():string{
        return $this->description;
    }
    public function getTaille():string{
        return $this->taille;
    }
    public function getTpsCreation():int{
        return $this->tps_creation;
    }
    public function getSurfaceTissu():string{
        return $this->surface_tissu;
    }
    public function getCategorie():Categorie{
        return $this->categorie;
    }
    public function getChemin():SplFileInfo{
        return $this->chemin_img;
    }
    public function getTags():array{
        return $this->tags;
    }
}

class Categorie
{
    private $id_categorie;
    private $nom;

    public function __construct(int $id_categorie, string $nom)
    {
        $this->id_categorie=$id_categorie;
        $this->nom=$nom;
    }

    public function getIdCategorie():int
    {
        return $this->id_categorie;
    }

    public function getNom():string
    {
        return $this->nom;
    }
}

class Tag
{
    private $id_tag;
    private $nom;

    public function __construct(int $id_tag, string $nom)
    {
        $this->id_tag=$id_tag;
        $this->nom=$nom;
    }

    public function getIdTag():int
    {
        return $this->id_tag;
    }
    
    public function getNom():string
    {
        return $this->nom;
    }
}

class Tissu
{
    private $id_tissu;
    private $nom;

    public function __construct(int $id_tissu, string $nom)
    {
        $this->id_tissu=$id_tissu;
        $this->nom=$nom;
    }

    public function getIdTissu():int
    {
        return $this->id_tissu;
    }
    
    public function getNom():string
    {
        return $this->nom;
    }
}

class Offre
{
    private $id_offre;
    private $prix;

    public function __construct(int $id_offre, int $prix)
    {
        $this->id_offre=$id_offre;
        $this->prix=$prix;
    }

    public function getIdOffre():int
    {
        return $this->id_offre;
    }
    
    public function getPrix():int
    {
        return $this->prix;
    }
}

class Article
{
    private int $id_article;
    private string $titre;
    private string $date_pub;
    private SplFileInfo $chemin_img;
    private SplFileInfo $chemin_page;

    public function __construct(int $id_article, string $titre, string $date_pub, SplFileInfo $chemin_img, SplFileInfo $chemin_page)
    {
        $this->id_article=$id_article;
        $this->titre=$titre;
        $this->date_pub=$date_pub;
        $this->chemin_img=$chemin_img;
        $this->chemin_page=$chemin_page;
    }

    public function getIdArticle(): int
    {
        return $this->id_article;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getDatePub(): string
    {
        return $this->date_pub;
    }
    public function getCheminImg(): SplFileInfo
    {
        return $this->chemin_img;
    }
    public function getCheminPage(): SplFileInfo
    {
        return $this->chemin_page;
    }
}