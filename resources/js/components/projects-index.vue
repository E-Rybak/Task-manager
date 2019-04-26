<template>
	<div class="container">
		<b-table striped hover :items="ps"></b-table>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				ps: []
			}
		},
		created() {
			this.ps = JSON.parse(this.projects)
		},
		props: ['projects']
	}
</script>