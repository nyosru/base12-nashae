<template>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center">
                <a href="/">
                  <img
                    src="/img/logo.png"
                    style="
                      padding-top: 1em;
                      max-height: 120px;
                      xmargin-left: 10%;
                    "
                    alt="Народная экономика"
                  />
                </a>
              </div>
              <div
                class="col-xs-12 col-sm-9 col-md-9 col-lg-9 xalign-middle text-center d-flex align-items-center"
              >
                <div
                  class="align-self-center text-center"
                  style="width: 100%; xborder: 1px solid green;"
                >
                  <!-- <header-menu></header-menu> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav v-if="1 == 2">
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

  <div class="container">
    <div class="row">
      <div class="col-xs-12 pt-2 text-center">
        <header-menu></header-menu>
      </div>
    </div>
  </div>
</template>

<script setup>
import headerMenu from './HeaderMenu.vue'
</script>

<style></style>
