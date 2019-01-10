<template>
 <div class="container">
 <transition name="fade">
 <router-view></router-view>
 </transition>
 </div>
</template>
<h1></h1>
<script>
export default {
   mounted() {
    console.log('Component mounted.')
   }
 }
</script>
