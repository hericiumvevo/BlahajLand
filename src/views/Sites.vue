<script setup>

import {ref} from "vue";
import nestedPath from "@/assets/json/nestedPath.json";
import SmallTitle from "@/components/SmallTitle.vue";
import CellCluster from "@/components/CellCluster.vue";
import {changeLoc} from "@/assets/js/menuUtils";

const services = ref({
  links: [
    {
      onc: function () {
        changeLoc("https://ben.blahaj.land");
      },
      img: `${nestedPath.path}usrs/ben.png`,
      title: "Ben",
      desc: "A little website about me",
      code: "ben.blahaj.land"
    },
    {
      onc: function () {
        changeLoc("https://imalonelynerd.fr");
      },
      img: `${nestedPath.path}usrs/nerd.png`,
      title: "Nerd",
      desc: "A lil warp to my personal website :3",
      code: "imalonelynerd.fr"
    },
    {
      onc: function () {
        changeLoc("https://runarcn.blahaj.land");
      },
      img: `${nestedPath.path}usrs/runarcn.png`,
      title: "Runarcn",
      desc: "This is a hobby project [...] to get a general understanding of web development [...].",
      code: "runarcn.blahaj.land"
    }
  ]
});

</script>

<template>
  <SmallTitle shownTitle="Sites" shownDesc="Here you can view our user's sites :3"/>
  <CellCluster shown-title="" :cell-list="services" list-type="BigList"/>
</template>

<style scoped>

</style>