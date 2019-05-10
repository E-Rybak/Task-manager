@extends('layouts.app')

@section('content')

<div class="container">
	@if (session('message'))
	<b-alert show dismissible variant="success">{{ session('message') }}</b-alert>
	@endif
	<b-jumbotron>
		<template slot="header">
			{{ $project->title }}
			<hr class="my-4">
		</template>

		<template slot="lead">Created: {{ $project->created_at }}</template>
	</b-jumbotron>
	<b-form inline method="GET" action="{{ route('projects.edit', $project->id) }}">
		<b-button type="submit" variant="primary">Edit project</b-button>
	</b-form>
</div>
<br>

<tasks-index-create task-form-url="{{ route('tasks.store') }}" project="{{ $project }}"></tasks-index-create>

@endsection
