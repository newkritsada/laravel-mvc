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
<form action="{{route('todo.store')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input name="title" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Create</button>
        </div>
        <input name="assignee_id" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">

    </div>
</form>
<a href="{{route('todo.list')}}"><-back</a> 
@endsection