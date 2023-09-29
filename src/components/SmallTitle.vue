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
    margin: 64px 0;
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
    width: 100%;
    text-align: center;
    margin: 5vh 0;
  }

  .stitle > * {
    margin: 0;
  }

  .stitle > img {
    height: 15vh;
  }
}
</style>