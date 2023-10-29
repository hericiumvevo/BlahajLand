<script setup>
import NavbarButton from "@/components/NavbarButton.vue"
import HiddenMenu from "@/components/HiddenMenu.vue"
import {ref} from "vue";
import {switchTheme} from "@/assets/js/darkMode"
import nestedPath from "@/assets/json/nestedPath.json"
import {changeLoc, unusualAlert} from "@/assets/js/menuUtils";

defineProps([
  "alignRight"
])

const isThemeMenuShown = ref(false);

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
        }
      ]
})

</script>

<template>
  <div class="navbar-container" :class="{ 'align-right' : alignRight }">
    <img id="blahaj" :src="nestedPath.path + 'images/logo-night.png'" @click="$router.push(nestedPath.path)">
    <div class="navbar">
      <NavbarButton @update:buttonClicked="$router.push(nestedPath.path)"
                    imgLink=""
                    shownTitle="Home"/>
      <NavbarButton @update:buttonClicked="$router.push(nestedPath.path + 'services')"
                    imgLink=""
                    shownTitle="Services"/>
      <NavbarButton @update:buttonClicked="$router.push(nestedPath.path + 'sites')"
                    imgLink=""
                    shownTitle="Sites"/>
      <NavbarButton @update:buttonClicked="$router.push(nestedPath.path + 'donations')"
                    imgLink=""
                    shownTitle="Donations"/>
      <NavbarButton @update:buttonClicked="unusualAlert('Coming soon!')"
                    imgLink=""
                    shownTitle="Rules & TOS"/>
      <NavbarButton @update:buttonClicked="changeLoc()"
                    :imgLink="nestedPath.path + 'icons/discord.png'"
                    shownTitle="Join"
                    is-important="true"/>
      <NavbarButton @update:buttonClicked="changeLoc()"
                    :imgLink="nestedPath.path + 'icons/open.png'"
                    shownTitle="Open"
                    is-important="true"/>
      <NavbarButton @update:buttonClicked="isThemeMenuShown = true"
                    :imgLink="nestedPath.path + 'icons/theme.png'"
                    shownTitle="Theme"
                    isImportant2="true"/>
    </div>
  </div>
  <HiddenMenu :menuOptions="themeMenu" v-if="isThemeMenuShown === true" @update:menuHidden="isThemeMenuShown = false"/>

</template>

<style scoped>
@media only screen and (orientation: portrait) {
  div {
    display: none !important;
  }
}

.navbar-container {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  padding: 16px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.navbar-container > img {
  height: 32px;
  cursor: pointer;
  transition: all 0.25s;
}

.navbar-container > img:hover {
  filter: var(--effect);
}

.navbar, .navbar > div {
  display: flex;
  flex-direction: row;
  align-items: center;
  animation: HewwoBar ease-out 0.33s;
  gap: 8px;
}

.align-right {
  justify-content: end;
}

</style>