@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Update project: {{ $project->title }} | created: {{ $project->created_at }}</h1>
	<div class="row">
	<b-form class="col-6" style="width: auto;" method="POST" action="{{ route('projects.update', $project->id) }}">
		@csrf
		{{ method_field('PUT') }}
		<b-form-group 
		id="projectTitleGroup"
		label="Project Title:"
		label-for="projectTitle">
		<b-form-input name="title" id="projectTitle" type="text" required value="{{ $project->title }}">
		</b-form-input>
		</b-form-group>

		<b-button variant="warning" type="submit">Update</b-button>
	</b-form>
	<br>
	<b-form class="col-6" inline method="POST" action="{{ route('projects.destroy', $project->id) }}">
		@csrf
		{{ method_field('DELETE') }}
		<confirm-delete-button title="{{ $project->title }}"></confirm-delete-button>		
	</b-form>
	</div>
</div>
@endsection