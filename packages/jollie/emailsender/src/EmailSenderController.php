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

        $message = null;
        dispatch(new SendEmail($message));

    }

}