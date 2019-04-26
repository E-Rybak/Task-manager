@extends('layouts.app')

@section('content')
<projects-index projects="{{ $projects }}"></projects-index>
@endsection