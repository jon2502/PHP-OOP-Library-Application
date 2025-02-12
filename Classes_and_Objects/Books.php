<?php

class Books {
    public $title;
    public $author;
    public $series;
    public $cover_image;
    public $synopsis;
    public $genres;
    public $isbn;
    public $published_year;
    public $isAvailable;

    function __construct($title, $author, $series, $cover_image, $synopsis, $genres, $isbn, $published_year, $isAvailable){
        $this->title = $title;
        $this->author = $author;
        $this->series = $series;
        $this->cover_image = $cover_image;
        $this->synopsis = $synopsis;
        $this->genres = $genres;
        $this->isbn = $isbn;
        $this->published_year = $published_year;
        $this->isAvailable = $isAvailable;
    }

    function Validatestate(){

    }

    function generateBookList(){
        
    }

    function generateBookInfo(){

    }

}