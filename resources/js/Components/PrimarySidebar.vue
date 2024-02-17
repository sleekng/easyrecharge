<template>
  <div class=" fixed top-0 left-0 h-[100vh] w-full bg-white z-50">
      <div class=" flex justify-between items-centerborder-b p-4">                                                                                                                                                                                                                                                   
              <Link :href="route('home')">
                  <application-logo></application-logo>
              </Link>
              <div class=" ">
                <i @click="closeSidebar" class="fa-sharp cursor-pointer text-4xl fa-light fa-xmark"></i>
              </div>
      </div>

      <div class=" pt-8">
          <ul class=" flex flex-col space-y-4">
           
                 <li class="px-4 flex" :class="route().current('dashboard') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Dashboard</Link> </li>
                 <li class="px-4 flex" :class="route().current('airtime') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Airtime</Link> </li>
                 <li class="px-4 flex" :class="route().current('data') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Data</Link> </li>
                 <li class="px-4 flex" :class="route().current('electricity') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Electricity</Link> </li>
                 <li class="px-4 flex" :class="route().current('tv-subscription') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">tv subscription</Link> </li>
                 <li class="px-4 flex" :class="route().current('wallet') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Wallet</Link> </li>
                 <li class="px-4 flex" :class="route().current('payments') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Payments</Link> </li>
                 <li class="px-4 flex" :class="route().current('history') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Transaction History</Link> </li>
                 <li class="px-4 flex" :class="route().current('profile-settings') ? ' bg-primarycolor':''">  <Link :href="route('airtime')" class=" hover:text-primarycolor hover:font-bold transition-all linear w-full py-2 ">Profile Settings</Link> </li>
                 <li class="px-4 flex bg-lightgray"> <Link :href="route('airtime')" class=" w-full py-2 flex items-center justify-between "><span>Log out</span> <i class="fa-light fa-arrow-right-from-bracket"></i></Link> </li>
          </ul>
      </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import ApplicationLogoWhite from '@/Components/ApplicationLogoWhite.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

  export default {
          components: {
              Link,
              ApplicationLogo,
              ApplicationLogoWhite
          },
          methods:{
            closeSidebar(){
         
              this.$emit('closesidebar',false);
            }
          }
          
  }

</script>
