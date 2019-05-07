/**
 * task.js contains all state variables, mutations, actions and getters for the Task entity.
 * The module is imported in resources/js/store/store.js along with all other modules.
 */
import Axios from 'axios'

export const namespaced = true

export const state = {
	tasks: [],

}

export const mutations = {
	SET_EVENTS(state, tasks) {
		state.tasks = tasks
	},
}

export const actions = {
	fetchTasks({ commit, dispatch, state }) {
		const client = Axios.create({
			baseURL: 'http://localhost/Task-manager/public/api/tasks',
			headers: {
				"Content-Type": "application/json",
				Accept: "application/json"
			}
		})
		client.get('').then(response => {
			commit('SET_EVENTS', response.data)
		}).catch(error => {
			console.log(error.message)
		})
	}
}

export const getters = {

}