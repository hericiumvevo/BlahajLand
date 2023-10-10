<script setup>
defineProps([
  'shownTitle',
  'shownDesc'
])
</script>

<template>
  <div class="stitle">
    <h1 v-html="shownTitle"></h1>
    <p v-html="shownDesc"></p>
  </div>
</template>

<style scoped>
@media only screen and (orientation: landscape) {
  .stitle {
    width: 100%;
    text-align: center;
    margin: 192px 0 64px;
  }

  .stitle > * {
    margin: 0;
  }

  .stitle > *:not(:last-child) {
    margin-bottom: 16px;
  }
}

@media only screen and (orientation: portrait) {
  .stitle {
    text-align: center;
    margin: 15vh 0 5vh;
    padding: 0 5vh;
  }

  .stitle > * {
    margin: 0;
  }

  .stitle > img {
    height: 15vh;
  }
}
</style>