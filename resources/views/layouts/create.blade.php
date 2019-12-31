@extends('main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Task</div>
                    <div class="panel-body">

                        {!! Form::open() !!}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" required minlength="3" maxlength="50" placeholder="The name of your task" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                                <a href="{{ url('/') }}" class="btn btn-primary">Cancel</a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection