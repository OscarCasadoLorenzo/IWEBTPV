<template>
  <Login />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import Login from '../components/LoginComponent.vue';
import { useUserStore } from "../stores/user";

export default defineComponent({

  name: 'LoginView',

  components: {
    Login,
  },

  setup() {
      const userStore = useUserStore();
      return { userStore };
  },

  data() {
      return {
          email: "",
          password: "",
      };
  },

  methods: {
      async login(){
          await this.userStore.signIn(this.email, this.password); 
      },
  },
});
</script>
