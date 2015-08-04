<?php

namespace Codecourse\Mail;

class Mailer
{
    protected $view;

    protected $mailer;

    public function __construct($view, $mailer)
    {
        $this->view = $view;
        $this->mailer = $mailer;
    }

    public function send($template, $data, $callback)
    {
        $message = new Message($this->mailer);

        $this->view->appendData($data);

        $message->body($this->view->render($template));

        // The call_user_func function is used to call a passed callback.
        call_user_func($callback, $message);

        $this->mailer->send();
        die();
    }
}