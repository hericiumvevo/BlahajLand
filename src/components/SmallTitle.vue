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
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 192px 0 64px;
    gap: 8px;
  }

  .stitle > * {
    margin: 0;
  }
}

@media only screen and (orientation: portrait) {
  .stitle {
    margin: 15vh 0 5vh;
    padding: 0 5vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1vh;
  }

  .stitle > * {
    margin: 0;
  }

  .stitle > img {
    height: 15vh;
  }
}
</style>