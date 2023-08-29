<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function testMailF()
    {
        Mail::to("haland.hulk64@gmail.com
        ")->send(new TestMail());
        echo "Message sent";
    }
}
