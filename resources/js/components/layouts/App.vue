<template>
  <header2></header2>
  <div class="main">
    <router-view></router-view>
  </div>
  <footer2></footer2>
</template>

<script setup>
import header2 from './Header'
import footer2 from './Footer'
</script>

<style lang="css" scope>
/* GLOBAL STYLES */
body {
  font-family: system-ui;
}
a,
a:hover {
  text-decoration: none;
}
ul {
  list-style: none;
}
/* CUSTOM STYLES */
/* header {
  background: rgba(0, 0, 0, 0.1);
} */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 1200px;
  height: 70px;
  margin: auto;
}
nav h1.brand a {
  font-size: 24pt;
  xcolor: rgb(255, 255, 255);
}
nav ul {
  display: flex;
  margin: 0;
}
nav ul li a {
  background: #292929;
  xcolor: white;
  padding: 10px 20px;
  margin: 0px 10px;
}
nav ul li a:hover,
nav ul li a.router-link-exact-active {
  xcolor: white;
  border-bottom: 2px solid;
}

.main {
  display: flex;
  /* height: 500px; */
  min-height: 500px;
  /* align-items: center; */
}
</style>
