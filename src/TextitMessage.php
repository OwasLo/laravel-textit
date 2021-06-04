<?php

namespace NotificationChannels\Textit;

use Illuminate\Support\Arr;

class TextitMessage
{
    /**
     * Message Receiver.
     *
     * @var string
     */
    protected $to;

    /**
     * Message content.
     *
     * @var string
     */
    protected $text;


    /**
     * Create a new Textit message instance.
     *
     * @return void
     */
    public function __construct(string $to, string $text)
    {
        $this->to = $to;
        $this->text = $text;
    }
}
