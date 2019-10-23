<?php

namespace Scaffolder\Newsletter\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Scaffolder\Newsletter\Http\Requests\NewsletterRequest;
use Scaffolder\Newsletter\Mail\NewsletterMailable;
use Scaffolder\Newsletter\Repositories\NewsletterRepository;

/**
 * Description of NewsletterController
 *
 * @author Amoungui
 */
class NewsletterController extends Controller {

    public function __construct(NewsletterRepository $NewsletterRepository) {
        $this->NewsletterRepository = $NewsletterRepository;
    }    

    public function index(){
        return view('newsletter::newsletter');
    }

    public function store(NewsletterRequest $request){
        Mail::to('abbc@abc.com')->send(new NewsletterMailable($request->email));

        $this->NewsletterRepository->store($request->all());

        return redirect(route('newsletter'));
    }
}
