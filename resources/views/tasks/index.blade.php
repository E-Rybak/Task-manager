@extends('layouts.app')

@section('content')

<tasks-index tasks="{{ $tasks }}"></tasks-index>

@endsection