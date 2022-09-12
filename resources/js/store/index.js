import { createStore } from 'vuex';

const store = createStore({
    user: {
      user: 0
    },
    state: {
        token : localStorage.getItem('token') || 0
    }
})
export default store ;