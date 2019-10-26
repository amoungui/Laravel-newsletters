<?php

namespace Scaffolder\Newsletter\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Scaffolder\Newsletter\Http\Requests\NewsletterRequest;
use Scaffolder\Newsletter\Mail\NewsletterMailable;
use Scaffolder\Newsletter\Models\newsletter;
use Scaffolder\Newsletter\Repositories\NewsletterRepository;

/**
 * Description of NewsletterController
 *
 * @author Amoungui
 */
class ManagerController extends Controller {
    protected $nbrPerPage = 4;

    public function __construct(NewsletterRepository $newsletterRepository) {
        $this->newsletterRepository = $newsletterRepository;
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $dd = newsletter::all();
        $datas = $this->newsletterRepository->getWithNewsletterPaginate($this->nbrPerPage);        
        $links = $datas->render();     
           
        return view('newsletter::Admin/index', compact('datas', 'links', 'dd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('newsletter::Admin/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request){
        $this->newsletterRepository->store($request->all());

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data = $this->newsletterRepository->getById($id);
        return view('newsletter::Admin/edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsletterRequest $request, $id){
        $this->newsletterRepository->update($id, $request->all());

        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $data = $this->newsletterRepository->getById($id);
        $data->delete();

        return redirect(route('index'));
    }    
}
