<template>
	<div class="container">
		<b-jumbotron>
			<template slot="header">{{projObj.title}}</template>
			<template slot="lead">Created: {{projObj.created_at}}</template>
			<b-list-group>
				<b-list-group-item class="flex-column align-items-start" v-for="task in projObj.tasks">
					<div class="d-flex w-100 justify-content-between">
						<h3 class="mb-1">{{ task.title }}</h3>
						<small><p>Task created: {{ task.created_at }}</p>
						<p>{{ task.project }}</p></small>
					</div>
					<p>{{ task.content }}</p>
				</b-list-group-item>
			</b-list-group>
		</b-jumbotron>
	</div>
</template>

<script>
	export default {
		created() {
			this.projObj = JSON.parse(this.project)
			console.log(this.project)
		},
		data() {
			return {
				projObj: Object
			}
		},
		props: ['project']
	}
</script>