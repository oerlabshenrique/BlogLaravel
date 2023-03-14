
@extends('layouts.default')
@section('content')



@section('sidebar')
    <div>
        <nav>
            Sidebar do Usuario
        </nav>
    </div>
@endsection
    
<h1>User</h1>

{{$user -> name}}<br>
{{$user -> email}}<br>

@endsection