<script>
  import { defineComponent } from 'vue'
  
  export default defineComponent({
    props: ['modelValue'],

    emits: ['update:modelValue'],

    methods: {
      focus() {
        this.$refs.input.focus()
      }
    }
  })
</script>

<template>
  <input class="text-black mx-2" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)">
</template>

