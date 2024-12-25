<script setup>
defineProps({
  paginator: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <div class="flex justify-between items-start">
    <p class="text-slate-600 text-sm">
      Showing {{ paginator.from }} to {{ paginator.to }} of {{ paginator.total }} results
    </p>
    <div class="flex items-center rounded-md overflow-hidden shadow-lg">
      <div v-for="link in paginator.links" :key="link.url">
        <component
          :is="link.url ? 'Link' : 'span'"
          :href="link.url"
          class="border-x border-slate-50 w-12 h-12 grid place-items-center bg-white"
          :class="{
            'hover:bg-slate-300': link.url,
            'text-zinc-400': !link.url,
            'font-bold text-blue-500': link.active,
          }"
        >
          <template v-if="link.label.includes('Previous')">
            <font-awesome-icon :icon="['fas', 'angle-left']" class="mr-3" />
          </template>
          <template v-else-if="link.label.includes('Next')">
            <font-awesome-icon :icon="['fas', 'angle-right']" class="mr-3" />
          </template>
          <template v-else>{{ link.label }}</template>
        </component>
      </div>
    </div>
  </div>
</template>
