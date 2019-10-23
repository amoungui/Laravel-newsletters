<?php

namespace Scaffolder\Newsletter\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Contact Model
 *
 * @author Amoungui
 */
class Newsletter extends Model{
    protected $table = 'newsletters';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];
}
