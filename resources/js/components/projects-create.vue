<template>
	<b-modal :id="id">
		<b-form @submit.prevent="onSubmit" @reset="onReset">

			<b-form-group id="input-group-1" label="Project Title:" label-for="Title">
				<b-form-input id="Title" v-model="project.title" required placeholder="Enter title"></b-form-input>
			</b-form-group>

			<b-button type="submit" variant="success">Create</b-button>
			<b-button type="reset" variant="danger">Reset</b-button>
		</b-form>
		<div slot="modal-footer"></div>
	</b-modal>
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
	}
</script>