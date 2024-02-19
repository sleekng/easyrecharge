<template>
  <div class=" fixed top-0 overflow-y-auto md:hidden block left-0 h-[100vh] w-full bg-white z-50">
      <div class=" flex justify-between items-center border-b p-4">                                                                                                                                                                                                                                                   
              <Link :href="route('home')">
                  <application-logo></application-logo>
              </Link>
              <div class=" ">
                <i @click="closeSidebar" class="fa-sharp cursor-pointer text-3xl fa-light fa-xmark"></i>
              </div>
      </div>

      <div class=" pt-8">
          <ul class=" flex flex-col ">
           
                 <li class="px-4 flex" :class="route().current('dashboard') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Dashboard</Link> </li>
                 <li class="px-4 flex" :class="route().current('airtime') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Airtime</Link> </li>
                 <li class="px-4 flex" :class="route().current('data') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Data</Link> </li>
                 <li class="px-4 flex" :class="route().current('electricity') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Electricity</Link> </li>
                 <li class="px-4 flex" :class="route().current('tv-subscription') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Tv subscription</Link> </li>
                 <li class="px-4 flex" :class="route().current('wallet') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Wallet</Link> </li>
                 <li class="px-4 flex" :class="route().current('payments') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Payments</Link> </li>
                 <li class="px-4 flex" :class="route().current('history') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Transaction History</Link> </li>
                 <li class="px-4 flex" :class="route().current('profile-settings') ? ' bg-primarycolor hover:text-black':'  hover:bg-lightgray'">  <Link :href="route('airtime')" class=" hover:font-bold transition-all linear w-full py-2 ">Profile Settings</Link> </li>
                 <li class="px-4 flex bg-lightgray"> <Link :href="route('airtime')" class=" w-full py-2 flex items-center justify-between "><span>Log out</span> <i class="fa-light fa-arrow-right-from-bracket"></i></Link> </li>
          </ul>
        
            <ul class=" mt-4 p-4 flex flex-col  space-y-4 ">
                 <!-- Primary button -->

                 <li class="w-full">
                    <primary-button-link class="primary-bg secondary-bg  w-full flex justify-center" :href="route('register')"
                        >Get Started</primary-button-link
                    >
                </li>
                <!-- Secondary button -->

                <li class="w-full">
                    <secondary-button-link
                        class=" w-full flex justify-center  bg-black text-white"
                       :href="route('login')"
                    >
                        Sign in
                    </secondary-button-link>
                </li>

             
            </ul>
       
      </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import ApplicationLogoWhite from '@/Components/ApplicationLogoWhite.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import PrimaryButtonLink from "./PrimaryButtonLink.vue";
import SecondaryButtonLink from "./SecondaryButtonLink.vue";

  export default {
          components: {
              Link,
              ApplicationLogo,
              ApplicationLogoWhite,
              PrimaryButtonLink,
              SecondaryButtonLink
          },
          methods:{
            closeSidebar(){
         
              this.$emit('closesidebar',false);
            }
          }
          
  }

</script>
