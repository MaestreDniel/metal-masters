<script setup>
import { ref } from 'vue';
import axios from 'axios';
import DefaultInput from '../components/inputs/DefaultInput.vue';

axios.defaults.withCredentials = true;

// import TheWelcome from '../components/TheWelcome.vue'
const form = ref({
  email: null,
  password: null
})

const products = ref();

const url = "http://localhost:8000"

async function onLogin() {
  await axios.get(`${url}/sanctum/csrf-cookie`);
  await axios.post(`${url}/login`, {
    email: form.value.email,
    password: form.value.password,
  });

  let productsData = await axios.get(`${url}/api/products`);
  products.value = productsData;
}
</script>

<template>
  <main>
    <!-- <TheWelcome /> -->
    <h2 class="text text-3xl mb-3">Login</h2>
    <form @submit.prevent="onLogin">
      <div class="flex flex-col h-12 items-center mx-2">
        <div class="my-2">
          <label for="email">Email</label>
          <DefaultInput v-model="form.email" type="email" ref="email" autocomplete="email" />
        </div>

        <div class="my-2">
          <label for="password">Password</label>
          <DefaultInput v-model="form.password" type="password" ref="password" autocomplete="current-password" />
        </div>

        <div>
          <button class="m-2 px-4 py-2 bg-emerald-500 rounded-md text-white">Login</button>
        </div>
      </div>

      <section>

        {{ products }}
      </section>
    </form>
  </main>
</template>


