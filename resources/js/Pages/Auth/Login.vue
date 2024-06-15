<template>
  <div class="login-container">
    <h1>Login</h1>
    <form @submit.prevent="login">
      <input v-model="form.email" type="email" placeholder="Email">
      <input v-model="form.password" type="password" placeholder="Password">
      <button type="submit">Login</button>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

const form = useForm({
  email: '',
  password: '',
  remember: false,
})

const login = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password')
  })
}
</script>

<style scoped>
/* Add your styles here */
</style>
