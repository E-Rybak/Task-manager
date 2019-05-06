<template>
<div class="container">

	<h1>{{ projectObject.title }} tasks</h1>
	<b-table striped hover :items="projectObject.tasks">
	</b-table>
	<b-button v-if="!createNewTask" v-on:click="showTaskForm" variant="success">New task</b-button>
	
	<b-form v-if="createNewTask" method="post" @submit.prevent="onSubmitTask">
		<b-form-group
		id="form-group-taskname"
		label="Enter the name the task you are creating"
		label-for="TaskName">
		<b-form-input 
		id="TaskName"
		placeholder="Task name"
		v-model="task.title"
		required>
		</b-form-input>
		</b-form-group>
		
		<b-form-group
		id="form-group-taskcontent"
		label="Enter the details of the task"
		label-for="TaskContent">
		<b-form-textarea
		id="TaskContent"
		placeholder="Task content"
		max-rows="3"
		v-model="task.content"
		required>
		</b-form-textarea>
		</b-form-group>

		<b-button type="submit" variant="success">Create task</b-button>
		<b-button v-if="createNewTask" v-on:click="showTaskForm" variant="warning">Close form</b-button>
	</b-form>

</div>
</template>
<script>
import Axios from 'axios'
	export default {
		data() {
			return {
				projectObject: Object,
				task: {
					title: '',
					content: '',
					projectId: Number
				},
				createNewTask: false
			}
		},
		created() {
			this.projectObject = JSON.parse(this.project)
			this.task.projectId = this.projectObject.id
			console.log(this.taskFormUrl)
		},
		props: ['project', 'tasks', 'task-form-url'],
		methods: {
			onSubmitTask() {
				// Create task via API call
				console.log("submitting form")
				console.log(JSON.stringify(this.task))

				const client = Axios.create({
					baseURL: this.taskFormUrl,
					headers: {
						"Content-Type": "application/json",
						Accept: "application/json"
					}
				})
				client.post('', this.task).then(response => {
					console.log(response.data)
				}).catch(error => {
					console.log(error.message)
				})
			},
			showTaskForm() {
				if (this.createNewTask) {
					this.createNewTask = false
				}
				else if (!this.createNewTask) {
					this.createNewTask = true
				}
			}
		}

	};
</script>
<style scoped>
	#TaskName {
		width: 300px;
	}
	#TaskContent {
		width: 400px;
	}
</style>