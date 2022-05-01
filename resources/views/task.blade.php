@extends('layouts/layout')

@section('task')
<div class="task-list">
  <div class="card">
    <div class="card-content">
      <div class="content">
        <h3>{{ $task->title }}</h3>
        <h4>{{ $task->description }}</h4>
        <h4>Crée le: {{ \Carbon\Carbon::parse($task->created_at)->translatedFormat('j F Y') }}</h4>
        <a href="/" class="card-footer-item">Return ></a>
        <a href="/task/delete/{{ $task->id }}" class="card-footer-item bg-red">Delete task ></a>
      </div>
    </div>
  </div>
</div>
@endsection
