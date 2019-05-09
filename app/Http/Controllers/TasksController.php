<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return response($tasks, 200);
    }

    /**
     * Display a listing of tasks for a specific project
     *
     * @return \Illuminate\Http\Response
     */
    public function getProjectTasks($id) {
        $project = Project::with('tasks')->findOrFail($id);
        $tasks = $project->tasks;
        return response($tasks, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $project = Project::findOrFail(request('projectId'));

        $project->addTask(
            request()->validate([
            'title' => ['required', 'min:3','max:100'],
            'content'=> ['required']
            ])
        );

        return response(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::with('project')->findOrFail($id);
        return response($task, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response("", 200);
    }
}
