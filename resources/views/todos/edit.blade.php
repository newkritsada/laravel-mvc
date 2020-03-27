@extends('layouts.main')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('todo.update',$todo->id)}}" method="post">
    @csrf
    @method("put")
    <div class="input-group mb-3">
        <input name="title" value="{{$todo->title}}" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Create</button>
        </div>
        <input name="assignee_id" value="{{$todo->assignee_id }}" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">

    </div>
</form>
<a href="{{route('todo.list')}}">
    <-back</a> @endsection