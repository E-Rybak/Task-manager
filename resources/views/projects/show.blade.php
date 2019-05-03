@extends('layouts.app')

@section('content')

<div class="container">
	<b-jumbotron>
		<template slot="header">{{$project->title}}</template>
		<template slot="lead">Created: {{$project->created_at}}</template>
	</b-jumbotron>
	<b-form inline method="GET" action="{{ route('projects.edit', $project->id) }}">
		<b-button type="submit" variant="primary">Edit project</b-button>
	</b-form>
</div>
@endsection