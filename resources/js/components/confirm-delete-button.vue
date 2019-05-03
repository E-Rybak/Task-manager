<template>
	<div>
		<b-form-input 
		id="deleteProjectTitle" 
		placeholder="Type project title to delete"
		v-on="checkTitle()"
		v-model="titleInput"
		></b-form-input>
		<b-button v-if="!titleTypedCorrect" disabled type="submit" variant="danger">Delete Project</b-button>
		<b-button v-else="titleTypedCorrect" type="submit" variant="danger">Delete Project</b-button>
		<p class="warningText">There is no going back once a project is deleted</p>
	</div>
</template>
<script>
	export default {
		data() {
			return {
				titleTypedCorrect: false,
				titleInput: ''
			}
		},
		created() {
			console.log(this.title)
		},
		methods: {
			checkTitle() {
				if(this.titleInput == this.title) {
					this.titleTypedCorrect = true
				}
				else {
					this.titleTypedCorrect = false
				}
			}
		},
		props: ['title']
	};
</script>
<style scoped>
	.warningText {
		color: red;
	}
</style>