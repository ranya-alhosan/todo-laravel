@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="fun-heading mb-4">Create a New Task! 🎉</h1>

                @if($errors->any())
                    <div class="alert alert-danger rounded-pill shadow-sm" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="/tasks" class="bg-light p-4 rounded shadow-sm" style="border: 2px dashed #FF5733;">
                    {{ csrf_field() }}

                    <div class="form-group mb-3">
                        <label for="description" class="fw-bold" style="color: #FF5733;">🎨 Task Description</label>
                        <input
                            type="text"
                            class="form-control border-0 shadow-sm"
                            id="description"
                            name="description"
                            placeholder="What's the task today? ✍️"
                            style="background-color: #FFF8E8; border-radius: 15px;"
                            required
                        />
                    </div>

                    <div class="form-group text-end">
                        <button type="submit" class="btn btn-primary btn-lg" style="border-radius: 50px;">Add Task ➕</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
