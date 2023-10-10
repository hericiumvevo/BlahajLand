<script setup>
import LinkButton from "@/components/LinkButton.vue"
import MenuButton from "@/components/MenuButton.vue";
import {ref} from "vue";
import {switchTheme} from "@/assets/js/darkMode"
import RouterButton from "@/components/RouterButton.vue";
import nestedPath from "@/assets/json/nestedPath.json"
import HiddenMenu from "@/components/HiddenMenu.vue";

defineProps([
  "alignRight"
])

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

</script>

<template>
  <div class="navbar-container" :class="{ 'align-right' : alignRight }">
    <router-link :to="nestedPath">
      <img id="blahaj" src="/images/logo-night.png">
    </router-link>
    <div class="navbar">
      <RouterButton :hrefLink="nestedPath.path" :imgLink="nestedPath.path + 'icons/private.png'"
                    shownTitle="Home"/>
      <RouterButton :hrefLink="nestedPath.path + 'services'" :imgLink="nestedPath.path + 'icons/private.png'"
                    shownTitle="Services"/>
      <RouterButton :hrefLink="nestedPath.path + 'sites'" :imgLink="nestedPath.path + 'icons/private.png'"
                    shownTitle="Sites"/>
      <RouterButton :hrefLink="nestedPath.path + 'donations'" :imgLink="nestedPath.path + 'icons/private.png'"
                    shownTitle="Donations"/>
      <LinkButton href-link="https://discord.gg/23ScBhN7xx" :img-link="nestedPath.path + 'icons/discord.png'"
                  shown-title="Join"/>
      <LinkButton href-link="https://blahaj.land/yunohost/sso" :img-link="nestedPath.path + 'icons/open.png'"
                  shown-title="Open"/>
      <MenuButton buttonId="theme" :imgLink="nestedPath.path + 'icons/theme.png'" shownTitle="Theme"
                  :isImportant="true"/>
    </div>
    <HiddenMenu :menuOptions="themeMenu" menuId="theme" id="theme"/>
  </div>
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

.navbar-container > a > img {
  height: 32px;
}

.navbar {
  display: flex;
  flex-direction: row;
  align-items: center;
  animation: Hewwo 0.25s;
}

.align-right {
  justify-content: end;
}

.navbar > *:not(:last-child) {
  margin-right: 8px;
}

</style>