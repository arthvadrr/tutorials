<template>
  <div>
    <div v-for="(tag, index) in tags" v-bind:key="index">
      <span>{{ tag + index }}</span>
    </div>
    <input type="text" :value="newTag" v-on:keydown.enter="tags.push($event.target.value)" />
  </div>
</template>

<script>
export default {
  data: () => ({
    tags: ['vue', 'react', 'angular'],
    newTag: 'preact',
  }),
};
</script>
