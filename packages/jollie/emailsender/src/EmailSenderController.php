<?php
/**
 * Created by PhpStorm.
 * User: joeward
 * Date: 22/08/17
 * Time: 17:01
 */

namespace Jollie\EmailSender;

use App\Http\Controllers\Controller;

use Jollie\EmailSender\Jobs\SendEmail;


class EmailSenderController extends Controller
{

    public function parse()
    {

        $message = 'joeoward@gmail.com';

        $job = (new SendEmail($message))->delay(60);

        dispatch($job);

    }

}