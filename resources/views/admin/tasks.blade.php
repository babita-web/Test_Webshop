@extends('layouts.master')

@section('title')

    Tasks| Babita's Test Assignment
@endsection
@section('content')

    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/add_task" method="post">
                    {{csrf_field()}}

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Task Title</label>
                            <input type="text" class="form-control" name="name" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Deadline</label>
                            <input type="date" class="form-control" name="deadline" id="message-text"></
                        >
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>--}}

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tasks Table</h4>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#exampleModal">Add New Task
                    </button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Task_ID
                                </th>
                                <th>Title</th>
                                <th>Deadline</th>
                                <th>Actor ID</th>
                                <th>Group ID</th>
                                <th>Adopted By ID</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                <tr>
                                    {{-- @foreach($tasks as $task)

                                         <tr>
                                             <td>{{$task->id}}</td>
                                             <td>{{ $task->name}}</td>
                                             <td>{{ $task->deadline }}</td>

                                             <td>{{ $task->status }}</td>



                                             <td>
                                                 <a href="/edit-task/{{$task->id}}" class="btn btn-success" >Edit</a>
                                             </td>
                                             <td>
                                                 <form action="/deletetask/{{$task->id}}" method="post">
                                                     {{ csrf_field() }}
                                                     {{ method_field('delete') }}
                                                     <input type="hidden" name="id" value="{{ $task->id }}">
                                                     <button type="submit" class="btn btn-danger" >Delete</button>

                                                 </form>
                                             </td>

                                         </tr>
                                     </tbody>

                                     @endforeach--}}
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('script')

@endsection
