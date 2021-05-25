<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <Guide test="M06 Vue Test" time="2h"/>
  </div>
</template>

<script>
// @ is an alias to /src
import Guide from '@/components/Guide.vue'

export default {
  name: 'Home',
  components: {
    Guide
  }
}
</script>
