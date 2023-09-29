<script setup>
import MenuButton from "@/components/MenuButton.vue";
import HiddenMenu from "@/components/HiddenMenu.vue";
import {ref} from "vue";
import {switchTheme} from "@/assets/js/darkMode";
import nestedPath from "@/assets/json/nestedPath.json"


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
          shownTitle: "System"
        }
      ]
})

const routeMenu = ref({
  menuButtons:
      [
        {
          routerLink: `${nestedPath.path}`,
          hrefLink: "route",
          imgLink: ``,
          shownTitle: "Home",
        },
        {
          routerLink: `${nestedPath.path}services`,
          hrefLink: "route",
          imgLink: ``,
          shownTitle: "Services",
        },
        {
          routerLink: `${nestedPath.path}sites`,
          hrefLink: "route",
          imgLink: ``,
          shownTitle: "Sites",
        },
        {
          routerLink: `${nestedPath.path}donations`,
          hrefLink: "route",
          imgLink: ``,
          shownTitle: "Donations",
        },
        {
          hrefLink: "https://discord.gg/23ScBhN7xx",
          imgLink: `${nestedPath.path}icons/discord.png`,
          shownTitle: "Join",
        },
        {
          hrefLink: "https://blahaj.land/yunohost/sso",
          imgLink: `${nestedPath.path}icons/open.png`,
          shownTitle: "Open",
        }
      ]
})

</script>

<template>
  <div class="mobile-navbar-container">
    <HiddenMenu :menuOptions="routeMenu" menuId="links" id="links"/>
    <HiddenMenu :menuOptions="themeMenu" menuId="mtheme" id="mtheme"/>
    <MenuButton buttonId="links" :imgLink="nestedPath.path + `icons/web.png`" shownTitle=""/>
    <img src="/images/logo-night.png" id="mblahaj">
    <MenuButton buttonId="mtheme" :imgLink="nestedPath.path + `icons/theme.png`" shownTitle="" :isImportant="true"/>
  </div>
</template>

<style scoped>

@media only screen and (orientation: landscape) {
  .mobile-navbar-container {
    display: none !important;
  }
}

.mobile-navbar-container {
  padding: 2vh;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.mobile-navbar-container > img {
  width: 50vw;
}
</style>