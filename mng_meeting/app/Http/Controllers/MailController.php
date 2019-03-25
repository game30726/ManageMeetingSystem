<?php
namespace App\Http\Controllers;
use Mail;
use App\User;
use App\meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MailController extends Controller
{

public function formmail()
{
    $mail = meeting::all();
    return view('meeting/formmail',['mail' => $mail]);
}

public function sendEmailReminder()
{
    $user = User::find(1)->toArray();
    Mail::send('emails.mailEvent', $user, function($message) use ($user) {
        $message->to($user->email);
        $message->subject('Mailgun Testing');
    });
    dd('Mail Send Successfully');
}
}