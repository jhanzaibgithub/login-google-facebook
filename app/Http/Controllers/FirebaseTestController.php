<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;

class FirebaseTestController extends Controller
{
    public function storeToFirebase(FirebaseService $firebase)
    {
        $data = [
            'title' => 'Laravel Firebase Test',
            'body' => 'This data is stored in Firebase Realtime Database.',
            'timestamp' => now()->toDateTimeString(),
        ];

        $firebase->storeData('test/posts', $data);

        return 'Data stored in Firebase!';
    }

    public function sendFirebaseNotification(FirebaseService $firebase)
    {
        $deviceToken = 'your_firebase_device_token_here'; // Replace with actual device token
        $title = 'Hello from Laravel!';
        $body = 'This is a Firebase Cloud Messaging notification.';

        $firebase->sendNotification($deviceToken, $title, $body);

        return 'Notification sent!';
    }
}
