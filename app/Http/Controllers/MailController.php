<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Mail;
use App\Mail\MyDemoMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'url' => 'https://www.itsolutionstuff.com'
        ];
         
        Mail::to('hunglsctk42@gmail.com')->send(new MyDemoMail($mailData));
         
        dd("Email is sent successfully.");
    }
}