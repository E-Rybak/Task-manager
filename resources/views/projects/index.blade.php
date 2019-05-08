@extends('layouts.app')

@section('content')

<projects-index project-store-url="{{ route('projects.store') }}" _projects="{{ $projects }}"></projects-index>
<div class="container">
	<b-form inline method="POST" action="{{ route('projects.store') }}">
		@csrf
		<b-form-group 
		id="projectTitleGroup"
		label="Project Title:"
		label-for="projectTitle">

		<b-form-input name="title" id="projectTitle" type="text" required placeholder="Project PLATIN">
		</b-form-input>

		</b-form-group>

		<b-button type="submit" variant="success">Create</b-button>
	</b-form>
</div>
@endsection
