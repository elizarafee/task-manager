@extends('layouts.app')

@section('title', 'Tasks')

@section('page_title', 'List of Task')
@section('description', 'All pending task ...')

@section('content')

@if($tasks->count() > 0)

<table class="table table-bordered table-sm table-hover">
  <thead>
    <tr>
      <th scope="col" width="10%">#</th>
      <th scope="col" width="50%">Title</th>
      <th scope="col" width="15%">Created At</th>
      <th scope="col" width="25%">Handle</th>
    </tr>
  </thead>
  <tbody>

    @foreach($tasks as $task) 

    <tr>
      <th scope="row">{{ $task->id }}</th>
      <td>{{ $task->title }}</td>
      <td>{{ $task->created_at }}</td>
      <td>
        <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>

        <!-- Complete Modal -->
        <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#task-{{$task->id}}-complete">Complete</button>
        <div class="modal fade" id="task-{{$task->id}}-complete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Complete Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>{{ $task->title }}</p>
                <p>Are you sure to mark the task completed?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Yes</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Delete Modal -->
        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#task-{{$task->id}}-delete">Delete</button>
        <div class="modal fade" id="task-{{$task->id}}-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p>{{ $task->title }}</p>
                <p>Are you sure to delete the task?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Yes</button>
              </div>
            </div>
          </div>
        </div>

      </td>
    </tr>

    @endforeach

  </tbody>
</table>

@else 

<div class="alert alert-success" role="alert">
  No task left!
</div>

@endif 
@endsection