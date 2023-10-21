<script setup>
defineProps([
  "hrefLink",
  "imgLink",
  "shownTitle",
  "isImportant",
  "isImportant2",
])

defineEmits([
  "update:buttonClicked"
])
</script>

<template>
  <a class="link" @click="$emit('update:buttonClicked')" :class="{ important : isImportant, important2 : isImportant2, noimage : imgLink === '' }">
    <img :src="imgLink" :alt="imgLink">
    <p v-show="shownTitle !== ''">{{ shownTitle }}</p>
  </a>
</template>

<style scoped>
@media screen and (orientation: landscape) {
  .link {
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
    max-width: 200px;
    transition: all 0.25s;
  }

  .link:hover {
    max-width: 150px;
    filter: var(--effect);
  }

  .link > img {
    height: 1.25em;
  }

  .link > p {
    margin: 0;
    padding: 0;
    text-overflow: fade;
    white-space: nowrap;
    text-wrap: none;
    max-width: 0;
    overflow: hidden;
    transition: all 0.25s;
  }

  .link:hover > p {
    max-width: 999px;
    margin: 0 0 0 12px;
    transition: all 0.25s;
  }

  .link.important {
    background: var(--widget-l);
  }

  .link.important2 {
    background: var(--important);
  }

  .link.noimage {
    max-width: none;
  }

  .link.noimage > img {
    display: none;
  }

  .link.noimage > p {
    margin: 0;
    max-width: none;
  }

  .link.noimage:hover {
    margin: 0;
    max-width: none;
  }
}

@media screen and (orientation: portrait) {
  .link {
    margin: 0;
    padding: 2vh 2vh;
    border-radius: 6vh;
    font-size: 1em;
    font-weight: bold;
    background: var(--widget);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s;
  }

  .link:hover {
    filter: var(--effect);
  }

  .link > img {
    height: 1.5em;
  }

  .link > p {
    display: none;
  }

  .link.important {
    background: var(--widget-l);
  }

  .link.important2 {
    background: var(--important);
  }
}
</style>