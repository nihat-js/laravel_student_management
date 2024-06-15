<template>
  <div>
    <h1>{{ title }}</h1>
    This is my home page
    how long can it ibe
<!--    <Link href="/home"> Home </Link>-->
<!--    <Link href="/about" > About </Link>-->
  </div>
</template>


<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
  title : String,
})
</script>
