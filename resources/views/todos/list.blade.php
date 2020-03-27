@extends('layouts.main')

@section('content')
<a class="btn btn-primary m-2" href="{{route("todo.create")}}" role="button">Create Todo</a>
<ul class="list-group">
    @foreach($todos as $todo)
    <li class="list-group-item">
        <div class="row">
            <div class="col-sm-8">
                <a href="{{route("todo.edit",$todo->id)}}">{{$todo->title}}</a>
            </div>
            <div class="col-s4 ">

                <div class="float-right">
                    <form action="{{route('todo.destroy',$todo->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-outline-danger" type="submit" id="button-addon2">delete</button>

                    </form>
                </div>
                <div class="float-right">
                    {{$todo->assignee->name}}
                </div>
            </div>
        </div>
    </li>

    @endforeach

</ul>

{{$todos->links()}}
@endsection