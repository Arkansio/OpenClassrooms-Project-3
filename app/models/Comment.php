<?php
class Comment
{
    public $id;
    public $postID;
    public $name;
    public $content;
    public $date;
    function __construct($id, $postID, $name, $content, $date) {
        $this->id = $id;
        $this->postID = $postID;
        $this->name = $name;
        $this->content = $content;
        $this->date = $date;
    }
}
?>