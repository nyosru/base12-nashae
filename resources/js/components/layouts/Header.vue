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
                    alt="Народная экономика"
                    class="logo"
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
                  <template v-if="userId > 0">
                    <div class="plaha">
                      <table style="margin: 0 auto;">
                        <tr>
                          <td>
                            <img
                              v-if="userAvatar.length"
                              :src="userAvatar"
                              class="socAvatar"
                            />
                          </td>
                          <td>
                            {{ userName }}
                            <br />
                            <a href="/logout">Выйти</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </template>
                  <template v-else>
                    <a href="/vk/enter">VK: Войти</a>
                  </template>
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

import User from './../../use/User.ts'
const { userId, userName, userAvatar } = User()
</script>

<style scope>
.logo {
  padding-top: 1em;
  max-height: 120px;
  /* xmargin-left: 10%; */
}
.socAvatar {
  max-width: 62px;
  max-height: 62px;
  /* float: left; */
  border-radius: 5px;
  margin-right: 0.2rem;
}
.plaha {
  width: 1%;
  min-width: 300px;
  display: inline-block;
  padding: 5px;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, 0.7);
}
</style>
