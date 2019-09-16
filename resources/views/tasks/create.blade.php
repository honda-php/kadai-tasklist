@extends('layouts.app')
@section('content')
    <h2>タスクの新規追加</h2>
    
    {!! Form::model($task, ['route' => 'tasks.store'])!!}
    
        <div class="form-group">
            {!! Form::text('content', null, ['placeholder' =>'ここにタスクを入力してね', 'class'=>'form-control'])!!}
        </div>
            {!! form::submit('追加', ['class'=>'bnt bnt-primary']) !!}
        
     {!! Form::close() !!}

@endsection