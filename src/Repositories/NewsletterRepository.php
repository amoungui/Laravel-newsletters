<?php

namespace Scaffolder\Newsletter\Repositories;

use Scaffolder\Newsletter\Models\Newsletter;

/**
 * Description of NewsletterRepository
 *
 * @author Amoungui
 */
class NewsletterRepository extends ResourceRepository{
    public function __construct(Newsletter $newsletter) {
        $this->model = $newsletter;
    }

    private function save(Newsletter $newsletter, Array $inputs) {
        $newsletter->email = $inputs['email'];

        $newsletter->save();
    }        
    
    public function store(Array $inputs) {
        $post = new $this->model;		

        $this->save($post, $inputs);

        return $post;
    }    

    private function queryPaginateWithOrder() {
        return $this->model->orderBy('created_at', 'desc');		
    }    

    public function getWithNewsletterPaginate($n) {
        return $this->queryPaginateWithOrder()->paginate($n);
    }       
}