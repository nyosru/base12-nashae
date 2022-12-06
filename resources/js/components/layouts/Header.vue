<template>
  <header>
    <nav>
      <h1 class="brand">
        <router-link to="/">Laravel Vue</router-link>
      </h1>
      <ul>
        <li><router-link to="/">HOME</router-link></li>
        <li><router-link to="/vitrin">Витрина</router-link></li>
        <li><router-link to="/about">ABOUT</router-link></li>
        <li><router-link to="/contact">CONTACT</router-link></li>
        <li><router-link to="/help">HELP</router-link></li>
      </ul>
    </nav>
  </header>
  <div>
    <!-- 333 -->
    <head-menu></head-menu>
    <!-- 444 -->
  </div>
</template>

<script setup>
import headMenu from './../vitrin/page/HeaderMenu.vue'
</script>

<style>
nav a {
  color: rgb(200, 200, 200);
}
a.router-link-active,
li.router-link-active > a {
  color: red;
}
</style>
