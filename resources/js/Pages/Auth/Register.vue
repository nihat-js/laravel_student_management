<template>
  <div class="register-container">
    <h1>Register</h1>
    <form @submit.prevent="register">
      <input v-model="form.name" type="text" placeholder="Name">
      <input v-model="form.email" type="email" placeholder="Email">
      <input v-model="form.password" type="password" placeholder="Password">
      <input v-model="form.password_confirmation" type="password" placeholder="Confirm Password">
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
})

const register = () => {
  form.post(route('register'), {
    onFinish: () => form.reset('password', 'password_confirmation')
  })
}
</script>

<style scoped>
/* Add your styles here */
</style>
