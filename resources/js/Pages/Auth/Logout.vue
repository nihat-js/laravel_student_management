<template>
  <button @click="logout">Logout</button>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia'

const logout = () => {
  Inertia.post(route('logout'))
}
</script>
