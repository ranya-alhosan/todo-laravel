@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4 text-center fun-heading">🎉 Your Task List 🎉</h1>

                @foreach($tasks as $task)
                    <div class="card mb-3 shadow-sm task-card border-0" style="background-color: #FFF8E8;">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <p class="mb-1 fw-bold" style="color: #FF5733; font-size: 1.2rem;">
                                    {{ $task->description }}
                                </p>
                                <span class="badge rounded-pill
                                    @if($task->isCompleted()) bg-success @else bg-warning text-dark @endif">
                                    @if($task->isCompleted()) ✅ Completed @else ⏳ Incomplete @endif
                                </span>
                            </div>

                            <div class="d-flex gap-2">
                                @if(!$task->isCompleted())
                                    <form action="/tasks/{{ $task->id }}" method="POST">
                                        @method('PATCH')
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-outline-success rounded-pill">Mark as Done ✔️</button>
                                    </form>
                                @else
                                    <form action="/tasks/{{ $task->id }}" method="POST">
                                        @method('DELETE')
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-outline-danger rounded-pill">Delete ❌</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <a href="/tasks/create" class="btn btn-primary btn-lg w-100 mt-4 rounded-pill" style="background-color: #FF5733; border: none;">
                    ➕ Add a New Task
                </a>
            </div>
        </div>
    </div>
@endsection
