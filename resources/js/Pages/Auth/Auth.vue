<template>
  <div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
      <h2 class="text-2xl font-bold mb-4 text-center">Edu Dev</h2>
      <div class="flex mb-4">
        <button
          :class="{ 'bg-blue-500 text-white': activeTab === 'login', 'bg-gray-300': activeTab !== 'login' }"
          class="flex-1 py-2 rounded-tl-lg rounded-bl-lg hover:bg-blue-400 transition duration-300"
          @click="activeTab = 'login'"
        >
          Login
        </button>
        <button
          :class="{ 'bg-blue-500 text-white': activeTab === 'register', 'bg-gray-300': activeTab !== 'register' }"
          class="flex-1 py-2 rounded-tr-lg rounded-br-lg hover:bg-blue-400 transition duration-300"
          @click="activeTab = 'register'"
        >
          Register
        </button>
      </div>

      <!-- Login Form -->
      <form v-if="activeTab === 'login'" @submit.prevent="login">
        <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <input v-model="loginForm.username" type="text" id="username" name="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input v-model="loginForm.password" type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Login</button>
        </div>
      </form>

      <!-- Register Form -->
      <form v-if="activeTab === 'register'" @submit.prevent="register">
        <div class="mb-4">
          <label for="regUsername" class="block text-sm font-medium text-gray-700">Username</label>
          <input v-model="registerForm.username" type="text" id="regUsername" name="regUsername" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input v-model="registerForm.email" type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input v-model="registerForm.password" type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-6">
          <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input v-model="registerForm.confirmPassword" type="password" id="confirmPassword" name="confirmPassword" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Register</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

// Data for login and register forms
const loginForm = ref({
  username: '',
  password: '',
});

const registerForm = ref({
  username: '',
  email: '',
  password: '',
  confirmPassword: '',
});

// Active tab state for toggling between login and register
const activeTab = ref('login');

// Login and Register methods
const login = () => {
  // Example: Validate login fields
  if (!loginForm.value.username || !loginForm.value.password) {
    alert('Please fill in all fields.');
    return;
  }
  // Example: Perform login logic here
  console.log('Login:', loginForm.value);
};

const register = () => {
  // Example: Validate register fields
  if (!registerForm.value.username || !registerForm.value.email || !registerForm.value.password || !registerForm.value.confirmPassword) {
    alert('Please fill in all fields.');
    return;
  }
  if (registerForm.value.password !== registerForm.value.confirmPassword) {
    alert('Passwords do not match.');
    return;
  }
  // Example: Perform register logic here
  console.log('Register:', registerForm.value);
};

</script>

<style scoped>
/* Scoped styles specific to this component */
</style>
