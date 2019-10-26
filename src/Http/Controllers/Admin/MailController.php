<?php

namespace Scaffolder\Newsletter\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Scaffolder\Newsletter\Http\Requests\NewsletterRequest;
use Scaffolder\Newsletter\Mail\NewsletterMailable;
use Scaffolder\Newsletter\Models\Newsletter;
use Scaffolder\Newsletter\Repositories\NewsletterRepository;

/**
 * Description of SendMailController
 *
 * @author Amoungui
 */
class MailController extends Controller {

    public function __construct(NewsletterRepository $newsletterRepository) {
        $this->newsletterRepository = $newsletterRepository;
    }    

    /**
     * Create form to send mailing.
     *
     * 
     */
    public function create(){
        $datas = Newsletter::all();
        foreach ($datas as $data) {
            $array[] = $data->email;
        }

        $emails = implode(";",$array);
        
        return view('newsletter::Admin/mail', compact('emails'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\NewsletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request){
        $arrays = explode(';', $request->email);

        foreach ($arrays as $data) {
            Mail::to($data)->send(new NewsletterMailable($request->message));
            //The Mail package doesn't send email per second it's the raison that we put this instruction
            //to wait few second to send email to the destination
            sleep(5);
        }

        return redirect(route('index'));
    }
}
