<template>
  <!-- <div class="main"> -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">

        tabs: {{ tabs }}
        <Br/>
        currentTab: {{ currentTab }}
        <Br/>

        <div id="dynamic-component-demo" class="demo">
          <button
            v-for="tab in tabs"
            :key="tab"
            :class="['tab-button', { active: currentTab === tab }]"
            @click="currentTab = tab"
          >
            {{ tab }}
          </button>

          <!-- <component :is="currentTabComponent" class="tab"></component> -->
          <component :is="currentTab" class="tab"></component>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <h3 class="mt-3 mb-3">Заявка на участие</h3>

        <div class="btn-group" role="group" aria-label="docs">
          <button
            class="btn"
            :class="
              showForm == 'fast'
                ? 'btn-success'
                : 'btn-light btn-outline-secondary'
            "
            @click="showForm = 'fast'"
          >
            Быстрая форма
          </button>
          <button
            class="btn"
            :class="
              showForm == 'fiz'
                ? 'btn-success'
                : 'btn-light btn-outline-secondary'
            "
            @click="showForm = 'fiz'"
          >
            Анкета Физ.лицо
          </button>
          <button
            class="btn"
            :class="
              showForm == 'ur'
                ? 'btn-success'
                : 'btn-light btn-outline-secondary'
            "
            @click="showForm = 'ur'"
          >
            Анкета Юр.лицо
          </button>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <!-- showForm {{ showForm }} -->
        <form-fast v-if="showForm == 'fast'"></form-fast>
        <form-fiz v-else-if="showForm == 'fiz'"></form-fiz>
        <form-ur v-else-if="showForm == 'ur'"></form-ur>
      </div>
    </div>
  </div>
  <!-- </div> -->
</template>

<script setup>
import { ref } from 'vue'
import fast from './formRegFast.vue'
import fiz from './formRegFiz.vue'
import ur from './formRegUr.vue'
const showForm = ref('fast')

const currentTab = 'fast'
const tabs = ['fast', 'fiz', 'ur']
// const currentTabComponent = 'FormFast'
</script>

<style lang="scss"></style>
