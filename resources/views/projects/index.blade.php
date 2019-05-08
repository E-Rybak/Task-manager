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

		<b-form-input autofocus name="title" id="projectTitle" type="text" required value="{{ old('title') }}" placeholder="Project PLATIN">
		</b-form-input>

		</b-form-group>

		<b-button type="submit" variant="success">Create</b-button>
	</b-form>
	@if ($errors->any())
		@foreach ($errors->all() as $error)
			<b-toast variant="danger" title="Validation errors" appendToast="false" toaster="b-toaster-top-right" visible static no-auto-hide>
				{{ $error }}
			</b-toast>
		@endforeach
	@endif
</div>
@endsection
