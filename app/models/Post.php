<?php
class Post
{
    public $id;
    public $title;
    public $content;
    public $date;
    function __construct($id, $title, $content, $date) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }
}
?>