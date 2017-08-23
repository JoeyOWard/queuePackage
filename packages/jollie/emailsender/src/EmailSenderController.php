<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 22/08/17
 * Time: 17:01
 */

namespace Jollie\EmailSender;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;

class EmailSenderController extends Controller
{

    public function parse()
    {


        Mail::to('batman@batcave.io')->send(new KryptoniteFound);

    }

}