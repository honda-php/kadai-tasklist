@extends('layouts.app')
@section('content')

    <h2>タスクの新規追加</h2>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        <div class="form-group">
            {!! Form::label('status', 'ステータス')!!}
            {!! Form::text('status', null, ['placeholder' =>'ステータスを入力', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'タスク')!!}
            {!! Form::text('content', null, ['placeholder' =>'ここにタスクを入力', 'class'=>'form-control'])!!}
        </div>
            {!! Form::submit('追加', ['class'=>'btn btn-primary']) !!}
        
     {!! Form::close() !!}

@endsection