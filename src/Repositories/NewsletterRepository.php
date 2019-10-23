<?php

namespace Scaffolder\Newsletter\Repositories;

use Scaffolder\Newsletter\Models\newsletter;

/**
 * Description of NewsletterRepository
 *
 * @author Amoungui
 */
class NewsletterRepository extends ResourceRepository{

    public function __construct(newsletter $newsletter) {
        $this->model = $newsletter;
    }

    private function save(newsletter $newsletter, Array $inputs) {
        $newsletter->email = $inputs['email'];

        $newsletter->save();
    }        
    
    public function store(Array $inputs) {
        $post = new $this->model;		

        $this->save($post, $inputs);

        return $post;
    }    
}