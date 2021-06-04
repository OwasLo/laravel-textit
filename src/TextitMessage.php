<?php

namespace Owaslo\Textit;

use Illuminate\Support\Arr;

class TextitMessage
{
    /**
     * Message Receiver.
     *
     * @var string
     */
    public $to;

    /**
     * Message content.
     *
     * @var string
     */
    public $text;


    /**
     * Create a new Textit message instance.
     *
     * @return void
     */
    public function __construct(string $to, string $text)
    {
        $this->to = $to;
        $this->text = urlencode($text);
    }
}
