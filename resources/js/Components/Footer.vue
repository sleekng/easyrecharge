<template>
  <div class=" ">
      <div class="container mx-auto items-center flex flex-col md:flex-row space-y-2 lg:space-y-0 py-10 justify-between">
        <div class="flex items-center">
          <span>Buy on Whatsapp:</span>
          <a href="https://wa.me/07030068148" class=" flex items-center space-x-2" target="_blank">

            <img src="storage/img/whasapp.png" class=" md:w-10 w-4" alt="" />
            <span class=" text-primarycolor font-bold">
              07030068148
            </span>
          </a>
        </div>
      <div class=" w-screen md:w-auto space-x-8 px-4 text-center flex items-center overflow-x-auto ">
        <Link :href="route('home')" class="hover:border-b py-1 whitespace-nowrap hover:border-primarycolor transition-all  ease-in-out">
          Blog
        </Link>
        <Link :href="route('home')" class="hover:border-b py-1 whitespace-nowrap hover:border-primarycolor transition-all  ease-in-out">
          Contact Us
        </Link>
        <Link :href="route('home')" class="hover:border-b py-1 whitespace-nowrap hover:border-primarycolor transition-all  ease-in-out">
          About Us
        </Link>
        <Link :href="route('home')" class="hover:border-b py-1 whitespace-nowrap hover:border-primarycolor transition-all  ease-in-out">
          terms & Conditions
        </Link>
        <Link :href="route('home')" class="hover:border-b py-1 whitespace-nowrap hover:border-primarycolor transition-all  ease-in-out">
          FAQs
        </Link>
        <Link :href="route('home')" class="hover:border-b py-2 whitespace-nowrap hover:border-primarycolor transition-all  ease-in-out" >
          Links
        </Link>
      </div>
      </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
  export default {
    components: {

      Link

    }
    
  }
</script>

<style lang="scss" scoped>

</style>