<script setup>
import TheWelcome from '../components/TheWelcome.vue'
import axios from 'axios';

axios.defaults.withCredentials = true;

// import TheWelcome from '../components/TheWelcome.vue'


</script>

<template>
  <TheWelcome/>
</template>