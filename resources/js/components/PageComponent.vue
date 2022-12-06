<template>
  <div class="container text-center p-20">
    <!-- <h1>{{ $route.name }} Page Component</h1> -->
    <div v-if="loadError">
      ... упс, что то поло не так ...
    </div>
    <div v-else-if="loading">... загружаю ...</div>
    <div v-else>
      <span v-html="pageData"></span>
    </div>
  </div>
</template>

<style scoped>
.p-20 {
  padding: 20px;
}
</style>

<script setup>
import { ref, watchEffect, watch, onMounted } from 'vue'

import Page from './../use/Page'

import {
  // useRouter,
  useRoute,
} from 'vue-router'
// const router = useRouter()
const route = useRoute()

const { page, pageData, loadError, loading, getData } = Page()

// при загрузке
onMounted(() => {
  getData(route.name)
})
// при переходе
watch(route, async (new2, old) => {
  // console.log('000', new2.name)
  getData(new2.name)
})
</script>
