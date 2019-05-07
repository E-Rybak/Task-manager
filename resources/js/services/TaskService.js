/**
 * TaskService handles all of the api calls done that affects the task state variables.
 * TaskService is imported into the task module where it is used.
 */

import Axios from 'axios'

const taskClient = Axios.create({
	baseURL: 'http://localhost/Task-manager/public/api/',
	headers: {
		"Content-Type": "application/json",
		Accept: "application/json"
	}
})

export default {
	// Returns a Promise that will contain tasks
	getAll($project_id) {
		return taskClient.get('projects/' + $project_id + '/tasks');
	},
	createTask($task) {
		return taskClient.post('tasks', $task);
	},
	deleteTask($taskId) {
		return taskClient.delete('tasks/' + $taskId);
	}
};
