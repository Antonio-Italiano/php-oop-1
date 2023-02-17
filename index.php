<?php 

class Movie {
    public $title;
    public $director;
    public $weft;
    public $published;
    public $genre;    
    public $resolution;

    public function __construct($title, $director, $weft, $published, $genre, $resolution = '4k') 
    {
        $this->title = $title;
        $this->director = $director;
        $this->weft = $weft;
        $this->published = $published;
        $this->genre = $genre;
        $this->resolution = $resolution;

    }
}

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