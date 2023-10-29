<script setup>
import HiddenMenu from "@/components/HiddenMenu.vue";
import {ref} from "vue";
import {switchTheme} from "@/assets/js/darkMode";
import nestedPath from "@/assets/json/nestedPath.json";
import NavbarButton from "@/components/NavbarButton.vue";
import {useRouter} from "vue-router";
import {changeLoc} from "@/assets/js/menuUtils";

const isThemeMenuShown = ref(false);
const isLinkMenuShown = ref(false);

const unusualRouter = useRouter();


const themeMenu = ref({
  menuButtons:
      [
        {
          onClick: function () {
            switchTheme('day')
          },
          imgLink: `${nestedPath.path}icons/theme/day.png`,
          shownTitle: "Day",
        },
        {
          onClick: function () {
            switchTheme('night')
          },
          imgLink: `${nestedPath.path}icons/theme/night.png`,
          shownTitle: "Night"
        },
        {
          onClick: function () {
            switchTheme('system')
          },
          imgLink: `${nestedPath.path}icons/theme/system.png`,
          shownTitle: "System",
        },
      ]
})
const menu = ref({
  menuButtons:
      [
        {
          onClick: function () {
            unusualRouter.push(nestedPath.path)
          },
          shownTitle: "Home",
        },
        {
          onClick: function () {
            unusualRouter.push(nestedPath.path + 'services')
          },
          shownTitle: "Services",
        },
        {
          onClick: function () {
            unusualRouter.push(nestedPath.path + 'sites')
          },
          shownTitle: "Sites",
        },
        {
          onClick: function () {
            unusualRouter.push(nestedPath.path + 'donations')
          },
          shownTitle: "Donations",
        },
        {
          onClick: function () {
            alert("Coming soon!")
          },
          shownTitle: "Rules & TOS",
        },
        {
          onClick: function () {
            changeLoc("https://discord.com/invite/23ScBhN7xx")
          },
          imgLink: nestedPath.path + 'icons/discord.png',
          shownTitle: "Join",
        },
        {
          onClick: function () {
            changeLoc("https://blahaj.land/yunohost/");
          },
          imgLink: nestedPath.path + 'icons/open.png',
          shownTitle: "Open",
        },
      ]
})
</script>

<template>
  <HiddenMenu :menuOptions="menu"
              v-if="isLinkMenuShown"
              @update:menuHidden="isLinkMenuShown = false"/>
  <HiddenMenu :menuOptions="themeMenu"
              v-if="isThemeMenuShown"
              @update:menuHidden="isThemeMenuShown = false"/>

  <div class="mobile-navbar-container">
    <NavbarButton @update:buttonClicked="isLinkMenuShown = true"
                  :imgLink="nestedPath.path + 'icons/list.png'"
                  is-important="true"
                  shownTitle=""/>
    <img id="mblahaj" :src="nestedPath.path + 'images/logo-night.png'" @click="$router.push(nestedPath.path)">
    <NavbarButton @update:buttonClicked="isThemeMenuShown = true"
                  :imgLink="nestedPath.path + 'icons/theme.png'"
                  shownTitle="" :isImportant2="true"/>
  </div>
</template>

<style scoped>

@media only screen and (orientation: landscape) {
  .mobile-navbar-container {
    display: none !important;
  }
}

.mobile-navbar-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  padding: 3vh;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  animation: HewwoBar ease-out 0.75s;
}

.mobile-navbar-container > img {
  width: 50vw;
}
</style>