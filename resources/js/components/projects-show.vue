<template>
	<div class="container">
		<b-jumbotron>
			<template slot="header">{{projObj.title}}</template>
			<template slot="lead">Created: {{projObj.created_at}}</template>
		</b-jumbotron>
	</div>
</template>

<script>
	export default {
		created() {
			this.projObj = JSON.parse(this.project)
		},
		data() {
			return {
				projObj: Object
			}
		},
		props: ['project']
	}
</script>