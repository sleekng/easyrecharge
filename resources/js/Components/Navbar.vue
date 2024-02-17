<template>
    <div class="w-full fixed top-0 bg-primarycolor left-0  z-30 ">
        <div
            class="container mx-auto px-4 flex justify-between items-center h-[80px] md:h-[100px]"
        >
            <div class="logo">
                <Link v-if="route('home')" :href="route('home')">
                    <application-logo-white></application-logo-white>
                </Link>
                <Link v-else :href="route('home')">
                    <application-logo></application-logo>
                </Link>
            </div>

            <div class="hidden md:flex  items-center space-x-8">
                <!-- Secondary button -->

                <div>
                    <secondary-button
                        class="  bg-black text-white"
                        @click="OpenLoginModal"
                    >
                        Sign in
                    </secondary-button>
                </div>

                <!-- Primary button -->

                <div>
                    <primary-button class="primary-bg secondary-bg " @click="OpenSignUpModal"
                        >Get Started</primary-button
                    >
                </div>
            </div>
            <div class=" md:hidden">
                <i @click="OpenSideBar" class="fa-light cursor-pointer text-white text-4xl fa-align-right"></i>
            </div>
        </div>
    </div>
</template>

<script>
import ApplicationLogo from "./ApplicationLogo.vue";
import ApplicationLogoWhite from "./ApplicationLogoWhite.vue";
import PrimaryButton from "./PrimaryButton.vue";
import SecondaryButton from "./SecondaryButton.vue";
import { Link } from "@inertiajs/vue3";
export default {
    components: {
        ApplicationLogo,
        ApplicationLogoWhite,
        Link,
        PrimaryButton,
        SecondaryButton,
    },

    methods: {
        OpenLoginModal() {
            this.$emit("signin"); // Emitting the 'close' event
        },
        OpenSignUpModal() {
            this.$emit("register"); // Emitting the 'close' event
        },

        OpenSideBar(){
            this.$emit('opensidebar',true)
        }
    },
};
</script>

<style lang="scss" scoped></style>
