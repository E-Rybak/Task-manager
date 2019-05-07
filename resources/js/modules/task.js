/**
 * task.js contains all state variables, mutations, actions and getters for the Task entity.
 * The module is imported in resources/js/store/store.js along with all other modules.
 */
import Axios from 'axios'
import TaskService from '../services/TaskService.js'

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
	fetchTasks({ commit, dispatch, state }, $projectId) {
		TaskService.getAll($projectId).then(response => {
			commit('SET_EVENTS', response.data)
		}).catch(error => {
			console.log(error.message)
		})
	},
	addTask({ commit, dispatch, state }, $task) {
		console.log($task)
		TaskService.createTask($task).then(response => {
			dispatch('fetchTasks', $task.projectId)
		}).catch(error => {
			console.log(error.response)
		})
	},
	destroyTask({ commit, dispatch, state}, $payload) {
		TaskService.deleteTask($payload.id).then(response => {
			dispatch('fetchTasks', $payload.projectId)
		}).catch(error => {
			console.log(error.response)
		})
	}
}

export const getters = {

}