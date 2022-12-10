<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <!-- tabs: {{ tabs }}        <Br /> -->
        <!-- currentTab: {{ currentTab }}        <Br /> -->

        <h3 class="mt-3 mb-3">Заполните заявку</h3>

        <!-- <div id="dynamic-component-demo" class="demo"> -->
        <div class="btn-group" role="group" aria-label="docs">
          <button
            v-for="t in tabs"
            :key="t.uri"
            class="btn"
            :class="[
              {
                'btn-success': currentTab === t.uri,
                'btn-light btn-outline-secondary': currentTab !== t.uri,
              },
            ]"
            @click="currentTab = t.uri"
          >
            {{ t.name }}
          </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 offset-md-1 col-md-10 col-lg-8 offset-lg-2  text-center">

        <form-fast v-if="currentTab == 'FormFast'" />
        <form-fiz v-else-if="currentTab == 'FormFiz'" />
        <form-ur v-else-if="currentTab == 'FormUr'" />

        <!-- </div> -->
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

import FormFast from './formRegFast.vue'
import FormFiz from './formRegFiz.vue'
import FormUr from './formRegUr.vue'

const currentTab = ref('FormFast')
const tabs = [
  { uri: 'FormFast', name: 'Регистрация' },
  { uri: 'FormFiz', name: 'Расширенная форма для физ.лиц' },
  { uri: 'FormUr', name: 'Расширенная форма для юр.лиц' },
]
// const currentTabComponent = 'FormFast'
</script>

<style lang="scss"></style>
