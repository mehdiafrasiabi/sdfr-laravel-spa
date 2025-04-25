<?php

namespace App\Notifications\Channels;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {

        $message = $notification->toSms($notifiable);

        $api = new GhasedakApi(config('services.ghasedak.key'));
        $response = $api->Verify(
            $message['mobile'],  // receptor
            $message['template'],  // name of the template which you've created in you account
            $message['parameters']
        );
        if ($response->result->code == 200) {
            return true;
        } else {
            return false;
        }


    }

}
