/**
 * store.js pulls in all modules to create a centralized state store and is then imported to app.js found in:
 * resources/js/app.js
 */

import Vue from 'vue'
import Vuex from 'vuex'
import * as task from './modules/task.js'

Vue.use(Vuex)

export default new Vuex.Store({
	modules: {
		task,
	},
	state: {

	}
});