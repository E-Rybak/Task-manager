@extends('layouts.app')

@section('content')

<div class="container">
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
<div class="container">
	<h1>{{ $project->title }}'s tasks</h1>
<b-table striped hover :items="{{ $project->tasks }}">
		</b-table>
</div>
@endsection
