<template>
<div class="container">
	<h1>{{ projectObject.title }} tasks</h1>
	<b-table striped hover :items="projectObject.tasks">
	</b-table>
	<b-form inline method="POST" @submit.prevet="onSubmitTask">
		<b-form-input 
		id="TaskName"
		placeholder="Task name"
		v-model="task.name">
		</b-form-input>
	</b-form>

</div>
</template>
<script>
	export default {
		data() {
			return {
				projectObject: Object,
				task: {
					name: '',
					content: '',
					projectId: Number
				}
			}
		},
		created() {
			this.projectObject = JSON.parse(this.project)
			this.task.projectId = this._projectId
		},
		props: ['project', 'tasks', '_projectId'],

	}
</script>