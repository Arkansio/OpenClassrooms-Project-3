<?php
class Post
{
    public $id;
    public $title;
    public $content;
    public $date;
    public function Post($id, $title, $content, $date) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }
}
?>