@extends('layout')

@section('content')
    @if(!empty($data['people']))
        <ul>
            @foreach($data['people'] as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @else
        <p>There are currently no people.</p>
    @endif
@stop