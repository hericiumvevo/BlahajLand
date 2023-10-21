<script setup>

import randomTitles from "@/assets/json/randomTitles.json"
import {ref} from "vue";
import WideButton from "@/components/WideButton.vue";
import nestedPath from "@/assets/json/nestedPath.json"
import {changeLoc} from "@/assets/js/menuUtils";

const randomT = ref(randomTitles.titles);

</script>

<template>
  <div class="title-cluster">
    <a href="https://blahaj.itsjamie.dev/">
      <img src="/images/spinning-blahaj.gif">
    </a>
    <h1>{{ randomT[Math.floor(Math.random() * randomT.length)] }}</h1>
    <p>Welcome to <b>Blahaj Land</b> ! Hope you enjoy your stay.</p>
    <div>
      <WideButton
          :img-link="`${nestedPath.path}icons/bigjoin.png`"
          shown-title="Pass the vibe check >:3"
          @update:buttonClicked="changeLoc('https://discord.gg/23ScBhN7xx')"/>
      <WideButton
          :img-link="`${nestedPath.path}icons/bigopen.png`"
          shown-title="Enter the Blahaj Land"
          @update:buttonClicked="changeLoc('https://blahaj.land/yunohost/sso')"/>
    </div>
  </div>
</template>

<style scoped>
@media only screen and (orientation: landscape) {
  .title-cluster {
    width: 100vw;
    height: 100vh;
    text-align: center;
    margin: 32px 0 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 32px;
  }

  .title-cluster > a > img {
    height: 224px;
    margin-bottom: -32px;
  }

  .title-cluster > p {
   margin-top: -16px;
  }

  .title-cluster > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 16px;
  }

  .title-cluster > * {
    margin: 0;
  }
}

@media only screen and (orientation: portrait) {
  .title-cluster {
    width: 100vw;
    text-align: center;
    margin: 15vh 0 3vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 4vh;
  }

  .title-cluster > * {
    margin: 0;
    width: 80%;
  }

  .title-cluster > p {
    margin-top: -3vh;
  }

  .title-cluster > a > img {
    width: 80vw;
  }

  .title-cluster > div {
    display: flex;
    flex-direction: row;
    align-items: stretch;
    justify-content: center;
    width: 85%;
    gap: 2vh;
  }

  .title-cluster > div > a {
    margin: 0;
    flex-grow: 1;
    padding: 3vh;
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

  .title-cluster > div > a:hover {
    filter: var(--effect);
  }

  .title-cluster > div > a > img {
    height: 3em;
  }

  .title-cluster > div > a > p {
    padding: 0;
    transition: all 0.25s;
    margin: 1.5vh 0 0;
    font-size: 1.25em;
  }
}
</style>