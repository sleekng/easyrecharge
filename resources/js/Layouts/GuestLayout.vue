<template>
  <div class=" bg-white py-10">
    <div
        class="  absolute bg-white z-50 top-0 left-0 w-full h-[80px] flex justify-start items-center p-4 md:p-8"
    >
        <Link :href="route('home')">
            <application-logo></application-logo>
        </Link>
    </div>
    <div class=" h-[100vh] flex justify-center items-center   ">

        <div  :class="route().current('password.request') ==true ? 'bg-white w-full p-4 relative  grid-cols-1 md:max-w-xl xl:grid gap-4   rounded-xl ':'bg-white w-full p-4  grid-cols-1 md:max-w-5xl xl:grid gap-4 md:grid-cols-2  rounded-xl'"
        >
            <div v-if="!route().current('password.request')"
                class="relative hidden rounded-md md:p-10 overflow-hidden md:flex justify-center items-end"
                style="
                    background-image: url('storage/img/login-bg.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                "
            >
                <div id="overlay-login" class="z-10"></div>
                <span class="z-50 text-white relative text-6xl font-bold">
                    Your One-Stop Solution for Easy Bill Payments
                </span>
            </div>
            <div class="border w-full  p-4 rounded-md">
                <slot />
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
export default {
    data() {
        return {};
    },
    components: {
        ApplicationLogo,
        Link,
    },
    methods: {},
};
</script>

<style lang="scss" scoped></style>
