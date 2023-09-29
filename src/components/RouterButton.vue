<script setup>
defineProps([
  "hrefLink",
  "shownTitle",
  "isImportant"
])
</script>

<template>
  <router-link class="rlink" :to="hrefLink" :class="{ important : isImportant }">
    <p v-show="shownTitle !== ''">{{ shownTitle }}</p>
  </router-link>
</template>

<style scoped>
.rlink {
  margin: 0;
  padding: 16px 24px;
  border-radius: 999px;
  font-size: 1em;
  font-weight: bold;
  background: var(--widget);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  max-width: 200px;
  transition: all 0.25s;
}

.rlink:hover {
  max-width: 150px;
  filter: var(--effect);
}

.rlink > p {
  padding: 0;
  transition: all 0.25s;
  margin: 0;
}

</style>