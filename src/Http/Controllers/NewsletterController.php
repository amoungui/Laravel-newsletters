<?php

namespace Scaffolder\Newsletter\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Description of NewsletterController
 *
 * @author Amoungui
 */
class NewsletterController extends Controller {

    public function __construct() {

    }    

    public function index(){
        return view('newsletter::newsletter');
    }

    public function store(){
        //
    }
}
