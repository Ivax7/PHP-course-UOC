<?php

class Post 
{
  public $title;
  
  public $author;

  public $published;

  public function __construct($title, $author,  $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}


$posts = [
  new Post('My First Post', 'Brandon Sanderson', true),
  new Post('My Second Post', 'Eichiro Oda', true),
  new Post('My Third Post', 'Gege Akutami', true),
  new Post('My Fourth Post', 'James Clear', false),
];

// $unpublishedPosts = array_filter($posts, function($posts) {
//   return !$posts->published;

// });


// $modified = array_map(function ($posts) {

//   return (array) $posts;

// }, $posts);


// $titles = array_map(function ($posts) {
//   return $posts->title;

// }, $posts);


// var_dump($titles);

$author = array_column($posts, 'author', 'title');
var_dump($author);