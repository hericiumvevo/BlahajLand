<script setup>

import randomTitles from "@/assets/json/randomTitles.json"
import {ref} from "vue";

const randomT = ref(randomTitles.titles);

</script>

<template>
  <div class="title-cluster">
    <a href="https://blahaj.itsjamie.dev/">
      <img src="/images/spinning-blahaj.gif">
    </a>
    <h1>{{ randomT[Math.floor(Math.random() * randomT.length)] }}</h1>
    <div>
      <a href="https://discord.gg/23ScBhN7xx">
        <img src="/icons/bigjoin.png">
        <p>Pass the vibe check >:3</p>
      </a>
      <a href="https://blahaj.land/yunohost/sso">
        <img src="/icons/bigopen.png">
        <p>Enter the Blahaj Land</p>
      </a>
    </div>
  </div>
</template>

<style scoped>
@media only screen and (orientation: landscape) {
  .title-cluster {
    width: 100%;
    text-align: center;
    margin: 64px 0;
  }

  .title-cluster > a > img {
    height: 224px;
  }

  .title-cluster > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }

  .title-cluster > div > a {
    margin: 0;
    padding: 24px 32px;
    border-radius: 999px;
    font-size: 1em;
    font-weight: bold;
    background: var(--widget);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s;
  }

  .title-cluster > div > *:not(:last-child) {
    margin-right: 16px;
  }

  .title-cluster > div > a:hover {
    filter: var(--effect);
  }

  .title-cluster > div > a > img {
    height: 1.75em;
  }

  .title-cluster > div > a > p {
    padding: 0;
    transition: all 0.25s;
    margin: 0 0 0 12px;
  }

  .title-cluster > * {
    margin: 0;
  }

  .title-cluster > *:not(:last-child):not(a) {
    margin-bottom: 32px;
  }
}

@media only screen and (orientation: portrait) {
  .title-cluster {
    width: 100%;
    text-align: center;
    margin: 3vh 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .title-cluster > * {
    margin: 0;
  }

  .title-cluster > *:not(:last-child):not(a) {
    margin-bottom: 2vh;
  }

  .title-cluster > a > img {
    width: 70vw;
  }

  .title-cluster > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: stretch;
    width: 90%;
  }

  .title-cluster > div > a {
    margin: 0;
    flex-grow: 1;
    padding: 2vh;
    border-radius: 3vh;
    font-size: 1em;
    font-weight: bold;
    background: var(--widget);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s;
  }

  .title-cluster > div > *:not(:last-child) {
    margin-right: 2vh;
  }

  .title-cluster > div > a:hover {
    filter: var(--effect);
  }

  .title-cluster > div > a > img {
    height: 1.75em;
  }

  .title-cluster > div > a > p {
    padding: 0;
    transition: all 0.25s;
    margin: 1vh 0 0;
  }
}
</style>