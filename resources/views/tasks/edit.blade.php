@extends('layouts.app')
@section('content')

    <h1>タスクの編集</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        <div class="form-group">
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! form::submit('更新', ['class' => 'btn btn-light']) !!}
    {!! Form::close() !!}


@endsection