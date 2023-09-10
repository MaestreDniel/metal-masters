<script setup>
import TheWelcome from '../components/TheWelcome.vue'
import { ref } from 'vue';
import axios from 'axios';

axios.defaults.withCredentials = true;

// import TheWelcome from '../components/TheWelcome.vue'

const products = ref({
  data: null
});

const url = "http://localhost:8000"

async function getProducts() {
  let productsData = await axios.get(`${url}/api/products`);
  products.value = productsData;
  products.data = productsData.data;
}
</script>

<template>
  <main>
    <TheWelcome />
    <h2 class="text text-3xl mb-3">Products</h2>
    <form @submit.prevent="getProducts">
      <div class="flex flex-col h-12 items-center mx-2">
        <div>
          <button class="m-2 px-4 py-2 bg-emerald-500 rounded-md text-white">Products</button>
        </div>
      </div>
      <section>
        {{ products.data }}
      </section>
    </form>
  </main>
</template>