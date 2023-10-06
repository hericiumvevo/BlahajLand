<script setup>
import CustomFooter from "@/components/CustomFooter.vue";
import Navbar from "@/components/Navbar.vue";
import MobileNavbar from "@/components/MobileNavbar.vue";
import {currentPage} from "@/assets/js/switchPath";
import Home from "@/views/Home.vue";
import Services from "@/views/Services.vue";
import Sites from "@/views/Sites.vue";
import Donations from "@/views/Donations.vue";


document.querySelector('html').dataset.theme = `theme-night`;
</script>

<template>
  <Navbar />
  <MobileNavbar/>
  <router-view></router-view>
  <CustomFooter/>
</template>

<style scoped>

</style>

