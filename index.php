<?php

require_once ('class.php');

class Post
{
    private $title;
    private $category; 
    private $tag;

    public function __construct($title, Category $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category->getMyCategory();
    }

    public function getTag(){
        return $this->tag;
    }

}


$post1 = new Post('Titolo 1', new Attualita(), "tag 1");
$post2 = new Post('Titolo 2', new Sport(), "tag 2");
$post3 = new Post('Titolo 3', new Gossip(), "tag 3");
$post4 = new Post('Titolo 4', new Storia(), "tag 4");

echo $post1->getCategory();
echo $post2->getTitle();
echo $post3->getTag();