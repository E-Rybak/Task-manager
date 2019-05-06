<template>
	<div class="container">
		<b-jumbotron>
			<template slot="header">{{tsk.title}}</template>
			<template slot="lead">Created: {{tsk.created_at}}</template>
		</b-jumbotron>
	</div>
</template>

<script>
	export default {
		created() {
			this.tsk = JSON.parse(this.task)
		},
		data() {
			return {
				tsk: Object
			}
		},
		props: ['task']
	};
</script>