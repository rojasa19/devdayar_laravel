<!-- resources/views/tasks.blade.php -->

@extends('layout.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">

        <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>

    </div>

    <!-- TODO: Current Tasks -->
     <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>Task</th>
                <th class="text-right">Acción</th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>

                        <!-- TODO: Delete Button -->
                        <td>
                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger pull-right">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay tareas aún</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection