<?php 

class Movie {
    public $id;
    public $title;
    public $director;
    public $weft;
    public $published;
    public $genre;    
    public $views;
    public $resolution;

    public function __construct($id, $title, $director, $weft, $published, $genre, $views = null, $popularity = '', $resolution = '4k') 
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->weft = $weft;
        $this->published = $published;
        $this->genre = $genre;
        $this->views = $views;
        $this->resolution = $resolution;
    }

    public function popularity($number) 
    {
        if(!is_numeric($number) || $number < 1000) return $this->popularity = 'unpopular';
        elseif (!is_numeric($number) || $number > 10000) return $this->popularity = 'popular';
    }

}