<template>
  <v-app>
    <v-main>
      <NavbarComponent/>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>
import NavbarComponent from './components/NavbarComponent.vue'
export default {
  name: 'App',

  components:{
    NavbarComponent
  },

  data: () => ({
    //
  }),
}
</script>

<style>

</style>
