<?php

namespace Owaslo\Textit;

use Illuminate\Support\Arr;
use Owaslo\Textit\Exceptions\CouldNotSendNotification;
use Illuminate\Notifications\Notification;

class TextitChannel
{
    /**
     * Login to API endpoint.
     *
     * @var string
     */
    protected $user;

    /**
     * Password to API endpoint.
     *
     * @var string
     */
    protected $password;

    /**
     * API endpoint base url.
     *
     * @var string
     */
    protected $baseurl;



    public function __construct(array $config = [])
    {
        $this->user = Arr::get($config, 'user');
        $this->password = Arr::get($config, 'password');
        $this->baseurl = Arr::get($config, 'baseurl');
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \Owaslo\Textit\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {

        $textitMessage = $notification->toTextit($notifiable);

        if (!$textitMessage instanceof TextitMessage) {
            return;
        }

        $url = "$this->baseurl/?id=$this->user&pw=$this->password&to=$textitMessage->to&text=$textitMessage->text";

        // $ret = file($url);

        // $response = explode(":", $ret[0]);

        // if (trim($response[0]) != "OK") {
        //     throw CouldNotSendNotification::serviceRespondedWithAnError($response[1]);
        // }

        // return $response[1];

        return "Test function";
        //$response = [a call to the api of your notification send]

        //        if ($response->error) { // replace this by the code need to check for errors
        //            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
        //        }
    }
}
