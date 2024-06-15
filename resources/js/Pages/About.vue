<template>
  Bu ise About Sehifesidi
  BUnun da contenti {{ content }}
</template>


<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
  content : String,
})
</script>
