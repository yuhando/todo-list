@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>List of items</h4>
                </div>
                <div class="panel-body">
                    <a href="{{ url('create') }}" class="btn btn-primary">Add todo</a> <br><br>

                    <div class="table-responsive">
                        <table class="table">
                            @if(! count($todos))
                                <tr>
                                    <td><h3>No Data Found!</h3></td>
                                </tr>
                            @endif
                            @foreach($todos as $todo)
                                <tr>
                                    <td>
                                    {!! Form::open() !!}
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked" onClick="this.form.submit()" 
                                            {{ $todo->done ? 'checked' : '' }}>
                                            <input type="hidden" name="id" value="{{ $todo->id }}">
                                            <label class="custom-control-label" for="defaultUnchecked">{{ $todo->name }}</label> 
                                            <a href="{{ url('delete/'.$todo->id.'') }}">(x)</a>
                                        </div>
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection