<?php 

class Movie {
    public $id;
    public $title;
    public $director;
    public $weft;
    public $published;
    public $genre;    
    public $views;
    public $popularity;
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
        $this->popularity = $popularity;
        $this->resolution = $resolution;
    }

    public function popularity($number) 
    {
        if(!is_numeric($number) || $number < 1000) return $this->popularity = 'unpopular';
        elseif (!is_numeric($number) || $number > 10000) return $this->popularity = 'popular';
    }

}
$toTheLake = new Movie(1, 'To the Lake', 'Pavel Kostomarov', 'Il vincitore ai Golden Eagle Kostomarov dirige questa inquietante serie fantastica emozionante, spaventosa e stranamente affascinante', 2020, 'Fantasy', 10100);
var_dump($toTheLake);
echo $toTheLake->popularity($toTheLake->views);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>
<body>
    
</body>
</html>