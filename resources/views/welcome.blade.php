@extends('layouts.app')
@section('content')

   <!-- @if(Auth::check())
     @if(Auth::id() == $user->id)
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
      @endif
    @else -->
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!',[], ['class' => 'btn btn-primary'] ) !!}
            </div>
        </div>
    @endif


@endsection