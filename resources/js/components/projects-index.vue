<template>
	<div class="container">
		<b-table striped hover :items="ps">
			<template slot="title" slot-scope="data"> 
				<a :href="link(data.item.id)">{{ data.item.title }}</a>
			</template>
		</b-table>
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
		props: ['projects'],
		methods: {
			link($id) {
				return "projects/" + $id
			}
		}
	}
</script>