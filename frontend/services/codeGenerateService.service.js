import { createService } from './service'

const resource = 'test'
const apiUrl = process.env.apiUrl
const { create } = createService({
  resource,
  apiUrl,
})

export default {
  create,
}
