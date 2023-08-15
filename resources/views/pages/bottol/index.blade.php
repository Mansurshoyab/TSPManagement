@extends('master')


@section('body')
    <form action="{{ route('bottol.update', 1) }}" method="post">
        @csrf
        @method('put')
        <button class=" btn btn-primary">Update</button>
    </form>
@endsection