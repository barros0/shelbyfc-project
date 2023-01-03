@extends('layouts.forum')


@section('content.forum')


@foreach($posts as $post)

    {!! $post->body !!}
@endforeach



@endsection
