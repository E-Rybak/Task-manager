/**
 * TaskService handles all of the api calls done that affects the task state variables.
 * TaskService is imported into the task module where it is used.
 */

import Axios from 'axios'

const client = Axios.create({
	baseUrl: '',
	headers: {
		"Content-Type": 'application/json',
		Accept: 'application/json'
	}
})

export default {
	// Returns a Promise that will contain tasks
	getAll() {
		return client.get('');
	},

}