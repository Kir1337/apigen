export let $axiosInstance
export const setAxiosInstance = ($axios) => ($axiosInstance = $axios)
export const createService = ({ resource, apiUrl }) => ({
  resource,

  fetchAll(params) {
    return $axiosInstance.$get(`${apiUrl}/${resource}`, { params })
  },

  fetchById(id, params) {
    return $axiosInstance.$get(`${apiUrl}/${resource}/${id}`, { params })
  },

  create(payload) {
    return $axiosInstance.$post(`${apiUrl}/${resource}`, payload)
  },

  updateById(id, payload) {
    return $axiosInstance.$post(`${apiUrl}/${resource}/${id}`, payload)
  },

  deleteAll(params) {
    return $axiosInstance.$delete(`${apiUrl}/${resource}`, { params })
  },

  deleteById(id) {
    return $axiosInstance.$delete(`${apiUrl}/${resource}/${id}`)
  }
})
