@extends('layouts.app')

@section('content')
   
<!-- Write content for each page here -->
    <h1>タスク一覧</h1>

        @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>
                {!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!}
                print "   "; 
                @if ($task->status=="まだだよ") 
                     <button class="btn btn-warning">{{ $task->status }}</button>
                @elseif($task->status=="完了") 
                     <button class="btn btn-success">{{ $task->status }}</button>
                @else
                     <button class="btn btn-info">{{ $task->status }}</button>
                @endif
                </li>
            @endforeach
        </ul>
        @endif
    
    {!! link_to_route('tasks.create', '新規メッセージの投稿') !!}
    
     

@endsection