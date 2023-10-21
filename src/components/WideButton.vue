<script setup>
defineProps([
  "imgLink",
  "shownTitle",
  "isImportant"
])

defineEmits(['update:buttonClicked']);
</script>

<template>
  <a class="wlink" @click="$emit('update:buttonClicked')" :class="{ important : isImportant }">
    <img :src="imgLink" :alt="imgLink">
    <p v-show="shownTitle !== ''">{{ shownTitle }}</p>
  </a>
</template>

<style scoped>
@media screen and (orientation: landscape) {
  .wlink {
    margin: 0;
    padding: 16px 24px;
    border-radius: 64px;
    font-size: 1em;
    font-weight: bold;
    background: var(--widget);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s;
  }

  .wlink:hover {
    filter: var(--effect);
  }

  .wlink > img {
    height: 2em;
  }

  .wlink > p {
    padding: 0;
    margin: 0 0 0 16px;
    transition: all 0.25s;
  }

  .wlink.important {
    background: var(--important);
  }
}

@media screen and (orientation: portrait) {
  .wlink {
    margin: 0;
    padding: 1vh;
    border-radius: 6vh;
    font-size: 1em;
    font-weight: bold;
    background: var(--widget);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s;
    gap: 1vh;
  }

  .wlink:hover {
    filter: var(--effect);
  }

  .wlink > img {
    height: 4vh;
  }

  .wlink > p {
    margin: 0;
    padding: 0;
    transition: all 0.25s;
  }

  .wlink.important {
    background: var(--widget-l);
  }
}

</style>