<template>
	<div class="container">
		<b-table striped hover :items="tsks">
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
				tsks: []
			}
		},
		created() {
			this.tsks = JSON.parse(this.tasks)
		},
		props: ['tasks'],
		methods: {
			link($id) {
				return "tasks/" + $id
			}
		}
	}
</script>