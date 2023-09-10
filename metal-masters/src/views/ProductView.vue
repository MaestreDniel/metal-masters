<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';
import ProductComponent from '../components/ProductComponent.vue';

const products = ref({
  data: null
});

const url = "http://localhost:8000"

onMounted(() => {
  async function getProducts() {
    let productsData = await axios.get(`${url}/api/products`);
    products.value = productsData;
    products.data = productsData.data;
  }

  getProducts();
})

</script>

<template>
  <main class="text-black">
    <section>
      <div v-for="product in products.data" :key="product.id" class="flex flex-row my-6 p-6 border border-gray-500 rounded-md bg-gray-100 hover:bg-gray-200">
        <ProductComponent :product="product" />
      </div>
    </section>
  </main>
</template>