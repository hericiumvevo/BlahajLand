<script setup>

import {ref} from "vue";
import nestedPath from "@/assets/json/nestedPath.json";
import SmallTitle from "@/components/SmallTitle.vue";
import CellCluster from "@/components/CellCluster.vue";

const services = ref({
  links: [
    {
      href: "https://matrix.blahaj.land/",
      img: `${nestedPath.path}icons/matrix.png`,
      title: "Cinny",
      desc: "A <b>Matrix</b> client",
      code: "matrix.blahaj.land"
    },
    {
      href: "https://files.blahaj.land/",
      img: `${nestedPath.path}icons/next.png`,
      title: "Nextcloud",
      desc: "A small <b>Nextcloud instance</b> with lots of plugins enabled, 5GB quota.",
      code: "files.blahaj.land"
    },
    {
      href: "https://p.blahaj.land",
      img: `${nestedPath.path}icons/pro.png`,
      title: "Pronounce",
      desc: "A page for showing your <b>personal infos</b>.",
      code: "p.blahaj.land"
    },
    {
      href: "https://mail.blahaj.land",
      img: `${nestedPath.path}icons/mail.png`,
      title: "Roundcube",
      desc: "An <b>email</b> client.",
      code: "mail.blahaj.land"
    },
    {
      href: "https://send.blahaj.land",
      img: `${nestedPath.path}icons/cloud.png`,
      title: "Cloud Storage",
      desc: "A <b>file sharing service</b>.",
      code: "send.blahaj.land"
    },
    {
      href: "https://vault.blahaj.land",
      img: `${nestedPath.path}icons/warden.png`,
      title: "Vaultwarden",
      desc: "A private <b>Bitwarden</b> server.",
      code: "vault.blahaj.land"
    }
  ]
});

</script>

<template>
  <SmallTitle shownTitle="Services" shownDesc="The stuff we host >:3" />
  <CellCluster shown-title="" :cell-list="services" list-type="BigList" />
</template>

<style scoped>

</style>