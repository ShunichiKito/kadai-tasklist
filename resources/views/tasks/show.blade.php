@extends('layouts.app')

@section('content')
     @if (Auth::user()->id == $task->user_id)

<!-- Write content for each page here -->
    
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <p>コンテント：{{ $task->content }}</p>
     <p>ステータス： {{ $task->status }}</p>

    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
    @else
       {!! redirect('/'); !!}
    @endif  
   

@endsection