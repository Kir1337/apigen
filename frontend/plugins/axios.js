const { setAxiosInstance } = require('~/services/service')
export default function ({ $axios, store }) {
  // $axios.onRequest(() => {
  //   if (!store.getters['auth/loggedin']) {
  //     store.dispatch('auth/showLoginModal')
  //   } else {
  //     $axios.defaults.headers.common[
  //       'Authorization'
  //     ] = `Bearer ${store.getters['auth/token']}`
  //   }
  // })

  // $axios.onError((error) => {
  //   if (error.response.status === 401) {
  //     store.commit('auth/setLoggedIn', false)
  //     store.dispatch('auth/showLoginModal')
  //   }

  //   return Promise.reject(error)
  // })

  setAxiosInstance($axios)
}
