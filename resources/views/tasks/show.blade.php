@extends('layouts.app')
@section('content')
<style>
    form{
        display:inline;
        margin: 30px;
    }
</style>

    <h2>No{{$task->id}}のタスク詳細ページ</h2>
    
        
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <td>{{$task->id}}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{$task->content}}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'タスクの編集' ,['id'=> $task->id], ['class' =>'btn btn-light']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method'=>'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    {!! link_to_route('tasks.index', '一覧に戻る', [], ['class' => 'btn btn-success'])!!}
@endsection