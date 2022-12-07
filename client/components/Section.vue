<script lang="ts">
import Vue from 'vue'

export default Vue.extend({

})
</script>

<template>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
      <div class="px-4 sm:px-0">
        <slot name="title" />

        <p class="mt-1 text-sm text-gray-600">
          <slot name="description" />
        </p>
      </div>

      <div class="px-4 sm:px-0">
        <slot name="aside" />
      </div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
      <slot name="content" />
    </div>
  </div>
</template>
