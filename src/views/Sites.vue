<script setup>

import {ref} from "vue";
import nestedPath from "@/assets/json/nestedPath.json";
import SmallTitle from "@/components/SmallTitle.vue";
import CellCluster from "@/components/CellCluster.vue";

const services = ref({
  links: [
    {
      href: "https://ben.blahaj.land",
      img: `${nestedPath.path}usrs/ben.png`,
      title: "Ben",
      desc: "A little website about me",
      code: "ben.blahaj.land"
    },
    {
      href: "https://imalonelynerd.fr",
      img: `${nestedPath.path}usrs/nerd.png`,
      title: "Nerd",
      desc: "A lil warp to my personal website :3",
      code: "imalonelynerd.fr"
    },
    {
      href: "https://runarcn.blahaj.land",
      img: `${nestedPath.path}usrs/runarcn.png`,
      title: "Runarcn",
      desc: "This is a hobby project [...] to get a general understanding of web development [...].",
      code: "runarcn.blahaj.land"
    }
  ]
});

</script>

<template>
  <SmallTitle shownTitle="Sites" shownDesc="Here you can view our user's sites :3" />
  <CellCluster shown-title="" :cell-list="services" list-type="BigList" />
</template>

<style scoped>

</style>