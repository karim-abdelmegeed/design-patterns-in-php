<?php

interface Subject
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();
}

interface observer
{
    public function update(Subject $subject);
}

class CommentAdded implements Subject
{


    protected $observables = [];

    public $comment;
    public $post_id;

    public function __construct($comment, $post_id)
    {
        $this->comment = $comment;
        $this->post_id = $post_id;
    }

    public function attach(observer $observer)
    {
        $key = spl_object_hash($observer);
        $this->observables[$key] = $observer;
        return $this;
    }

    public function detach(Observer $observer)
    {
        $key = spl_object_hash($observer);
        unset($this->observables[$key]);
    }

    public function notify()
    {
        foreach ($this->observables as $observable) {
            $observable->update($this);
        }
    }
}

class EmailNotifier implements Observer
{
    public function update(Subject $subject)
    {
        echo $subject->comment . ' at ' . $subject->post_id. "\n";
    }
}

class IncrementCommentCount implements Observer
{
    private $count = 1;

    public function update(Subject $subject)
    {
         $this->count++;
         echo $this->count;
    }

}


$post_id=3;
$comment="good job";
$comment=new CommentAdded($comment,$post_id);
$comment->attach(new EmailNotifier())->attach(new IncrementCommentCount());
$comment->notify();
