<template>
  <div>
    <vue-codeditor v-model="code" mode="php" theme="chrome" />
    <a-button @click="generateCode" :loading="loading">
      Тест кодогенерации
    </a-button>
  </div>
</template>

<script>
import codeGenerateServiceService from '~/services/codeGenerateService.service'

export default {
  data() {
    return {
      loading: false,
      code: ``,
    }
  },

  methods: {
    async generateCode() {
      this.loading = true
      try {
        const result = await codeGenerateServiceService.create()
        console.log({ result })
        this.code = result.code
      } catch (err) {
        console.error(err)
      }
      this.loading = false
    },
  },

  watch: {
    code(code) {
      console.log({ code })
    },
  },
}
</script>
