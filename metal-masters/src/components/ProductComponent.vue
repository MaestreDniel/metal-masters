<script>
export default {
  name: "ProductComponent",
  props: {
    product: {
      type: Object,
      required: true
    }
  }
}
</script>

<template>
  <img alt="Vue logo" class="logo m-6" src="@/assets/logo.svg" width="125" height="125" />
  <div>
    <h3 class="text-2xl my-2 font-semibold">
    {{ product.name }} - {{ product.price }} €
    </h3>
    <div>
      {{ product.description }}
    </div>
    <div class="text-gray-700">
      {{ product.specs }}
    </div>
  </div>
</template>