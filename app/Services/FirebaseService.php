<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class FirebaseService
{
    protected $database;
    protected $messaging;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
        $this->database = $factory->createDatabase();
        $this->messaging = $factory->createMessaging();
    }

    public function storeData($path, array $data)
    {
        return $this->database->getReference($path)->push($data);
    }

    public function sendNotification($deviceToken, $title, $body)
    {
        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification(Notification::create($title, $body));

        return $this->messaging->send($message);
    }
}
