<script setup>

import SmallTitle from "@/components/SmallTitle.vue";
</script>

<template>
  <SmallTitle shown-title="Donations"
              shown-desc="Donations drastically help me with the upkeep of all services, and help me continue to keep <b>blahaj.land</b> free to use "/>
  <div class="donations">
    <div id="kofi">
      <iframe id='kofiframe'
              src='https://ko-fi.com/eryncloud/?hidefeed=true&widget=true&embed=true&preview=true'
              title='eryncloud'>
      </iframe>
    </div>
    <div id="tab">
      <div class="ktitle">
        <h1>Thanks to our donators!</h1>
        <p>Thanks to all of our amazing donators whose contributions help keep blahaj.land alive!</p>
      </div>
      <div id="tabs">
        <a href="https://magnetron.blahaj.land">
          <h3>Magnetron</h3>
          <code>magnetron.blahaj.land</code>
          <div>
            <p>6 €</p>
            <p>⋅</p>
            <p>21/04/2023</p>
          </div>
        </a>
        <a href="https://6vz.dev">
          <h3>6vz</h3>
          <code>6vz.dev</code>
          <div>
            <p>1 €</p>
            <p>⋅</p>
            <p>--/--/--</p>
          </div>
        </a>
        <a href="https://imalonelynerd.fr">
          <h3>Nerd</h3>
          <code>imalonelynerd.fr</code>
          <div>
            <p>10 €</p>
            <p>⋅</p>
            <p>11/06/2023</p>
          </div>
        </a>
        <a href="https://runarcn.blahaj.land">
          <h3>Runarcn</h3>
          <code>runarcn.blahaj.land</code>
          <div>
            <p>5 €</p>
            <p>⋅</p>
            <p>27/06/2023</p>
          </div>
        </a>
        <a href="https://www.henryhiles.com">
          <h3>QuadRadical</h3>
          <code>henryhiles.com</code>
          <div>
            <p>11 €</p>
            <p>⋅</p>
            <p>02/09/2023</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>

<style scoped>
@media only screen and (orientation: landscape) {
  .donations {
    width: 90%;
    margin: 32px auto;
    display: grid;
    grid-auto-rows: 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 32px;
  }

  .donations > * {
    background: var(--widget);;
    border-radius: 32px;
  }

  .ktitle > * {
    text-align: center;
  }

  #kofi {
    flex-grow: 1;
    padding: 8px;
  }

  #kofi > iframe {
    width: 100%;
    height: 700px;
    border: none;
    border-radius: 12px;
    object-fit: cover;
  }

  #tab {
    grid-column-start: 2;
    grid-column-end: 4;
    padding: 32px;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  #tabs {
    display: grid;
    grid-auto-rows: 1fr;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    overflow: scroll;
  }

  #tabs > a {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: var(--bg);;
    border-radius: 32px;
    padding: 24px 16px;
    transition: all 0.25s;
    gap: 8px;
  }

  #tabs > a > * {
    margin: 0;
  }

  #tabs > a:hover {
    filter: var(--effect);
  }

  #tabs > a > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 12px;
  }

  #tabs p {
    margin: 0;
  }
}

@media only screen and (orientation: portrait) {
  .donations {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 90%;
    margin: 3vh auto;
    gap: 2vh;
  }

  .donations > * {
    background: var(--widget);
    border-radius: 3vh;
    width: 90%;
  }

  .ktitle > * {
    text-align: center;
  }

  #kofi {
    padding: 2vh;
  }

  .ktitle > * {
    text-align: center;
    margin: 0;
  }

  #kofi > iframe {
    width: 100%;
    height: 50vh;
    border: none;
    border-radius: 3vh;
    object-fit: cover;
  }

  #tab {
    padding: 3vh 2vh;
    gap: 3vh;
  }

  #tab > * {
    margin: 0;
  }

  #tabs {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: scroll;
    gap: 1vh;
  }

  #tabs > a {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: var(--bg);;
    border-radius: 3vh;
    padding: 1vh;
    transition: all 0.25s;
    width: 90%;
  }


  #tabs > a:active {
    filter: var(--effect);
  }

  #tabs > a > * {
    margin: 0.5vh;
  }

  #tabs > a > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0.5vh;
  }

  #tabs p {
    margin: 0;
  }
}
</style>