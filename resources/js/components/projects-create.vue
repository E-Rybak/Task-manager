<template>
	<div class="container">
		{{ Form::open(array('route' => 'projects.store')) }}

		{{ Form::label('title', 'Project Title:') }}
		{{ Form::text('title', 'Project CARTELERA') }}

		{{ Form:close() }}
	</div>
</template>
<script>
	import Axios from 'axios'

	export default {
		created () {
			console.log('Test')
		},
		data() {
			return {
				project: {
					title: ''
				},
			}
		},
		methods: {
			onSubmit() {
				const client = Axios.create({
					baseUrl: "http://localhost/Task-manager/public/api/",
					headers: {
    					"Content-Type": "application/json",
    					Accept: "application/json"
    				}
				})
				client.post('projects', JSON.stringify(this.project)).then(response => {
					console.log(response.data)
				}).catch(error => {
					console.log(error.message)
				})
			},
			onReset() {
				this.project = ''
			}
		},
		props: ['id']
	};
</script>