<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

   /**
    * The tasks associated with the project instance.
    * 
    * @return App\Task collection
    */
    public function tasks() {
    	return $this->hasMany('App\Task');
    }

  /**
   * Add a an associated task to the project instance. 
   *
   * @return void
   */
    public function addTask($task) {
    	$this->tasks()->create($task);
    }

  /**
   * Delete the project instance along with associated tasks.
   *
   * @return void
   */
    public function deleteWithTasks() {
    	$this->tasks()->delete();
    	$this->delete();
    }
}
