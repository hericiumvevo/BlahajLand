<script setup>

import Title from "@/components/Title.vue";
import CellCluster from "@/components/CellCluster.vue";
import {ref} from "vue";
import nestedPath from "@/assets/json/nestedPath.json"

let easteregg = ref(6);

function uwu() {
  if (easteregg.value === 0) {
    alert("Rawr x3 *nuzzles* how are you pounces on you you're so warm o3o *notices you have a bulge* o: someone's happy ;) *nuzzles your necky wecky*~ murr~ hehehe *rubbies your bulgy wolgy* you're so big :oooo *rubbies more on your bulgy wolgy* it doesn't stop growing ·///· *kisses you and lickies your necky* daddy likies (; *nuzzles wuzzles* I hope daddy really likes $: *wiggles butt and squirms* I want to see your big daddy meat~ *wiggles butt* I have a little itch o3o *wags tail* can you please get my itch~ *puts paws on your chest* nyea~ its a seven inch itch *rubs your chest* can you help me pwease *squirms* pwetty pwease *sad face* I need to be punished *runs paws down your chest and bites lip* like I need to be punished really good~ *paws on your bulge as I lick my lips* I'm getting thirsty. I can go for some milk *unbuttons your pants as my eyes glow* you smell so musky :v *licks shaft* mmmm~ so musky *drools all over your cock* your daddy meat I like *fondles* Mr. Fuzzy Balls hehe *puts snout on balls and inhales deeply* oh god im so hard~ *licks balls* punish me daddy~ nyea~ *squirms more and wiggles butt* I love your musky goodness *bites lip* please punish me *licks lips* nyea~ *suckles on your tip* so good *licks pre of your cock* salty goodness~ *eyes role back and goes balls deep* mmmm~ *moans and suckles*");
    easteregg.value = 6;
  }
  easteregg.value -= 1;
}

const why = ref({
  links: [
    {
      img: `${nestedPath.path}icons/web.png`,
      title: "Web Hosting",
      desc: "Simple HTML sites can be pulled from <b>git</b> and hosted at <b>username.blahaj.land</b>",
      code: ""
    },
    {
      img: `${nestedPath.path}icons/matrix.png`,
      title: "Matrix",
      desc: "No one uses it but I've got a <b>Matrix homeserver</b>, quite fast",
      code: ""
    },
    {
      img: `${nestedPath.path}icons/mail.png`,
      title: "Emails",
      desc: "Email accounts are hosted with <b>excellent reputation IPs</b>, ensuring no mail ever gets lost",
      code: ""
    },
    {
      img: `${nestedPath.path}icons/money.png`,
      title: "It's free !",
      desc: "All accounts are <b>free</b>. All you gotta do is <b>pass the vibe check >:)</b>",
      code: ""
    },
    {
      img: `${nestedPath.path}icons/cloud.png`,
      title: "Cloud Storage",
      desc: "I am able to provide some storage <b>FOR FREE!</b> I am not able to see the contents of your files or folders.",
      code: ""
    },
    {
      onc: function () {
        uwu()
      },
      img: `${nestedPath.path}icons/eryn.png`,
      title: "By the way...",
      desc: "A furry runs it.",
      code: ""
    }
  ]
});


</script>


<template>
  <Title/>
  <CellCluster shown-title="Why ?" list-type="BigList" :cell-list="why"/>
</template>

<style scoped>

</style>