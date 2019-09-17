@extends('layouts.app')
@section('content')

    @if (count($tasks) > 0)
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', 'タスクの追加', [], ['class'=>'btn btn-success']) !!}
@endsection