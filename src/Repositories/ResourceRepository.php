<?php

namespace Scaffolder\Newsletter\Repositories;

/**
 * Description of ResourceRepository
 *
 * @author Amoungui
 */
abstract class ResourceRepository {
    protected $model;

    public function getPaginate($n){
        return $this->model->paginate($n);
    }

    abstract public function store (Array $inputs);

    public function getById($id) {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs) {
        $this->getById($id)->update($inputs);
    }

    public function destroy($id) {
        $this->getById($id)->delete();
    }
}
