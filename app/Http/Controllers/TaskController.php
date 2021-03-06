<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create() {
        echo "create";
    }

    public function store(Request $request) {
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
    }

    public function edit($task_id) {
        echo 'edit '.$task_id;
    }

    public function update(Request $request, $task_id) {
        echo 'put '.$task_id;
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";

    }

    public function completed($task_id) {
        echo 'complete '.$task_id;
    }

    public function destroy($task_id) {
        echo 'delete '.$task_id;
    }
}
