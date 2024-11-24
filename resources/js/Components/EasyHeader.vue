<template>
    <div class=" min-h-[80px]   border-b px-24 w-full flex justify-end items-center">
        
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
    </div>
</template>

<script>
import PrimaryButton from "./PrimaryButton.vue";
import SecondaryButton from "./SecondaryButton.vue";
    export default {
        components: {
        PrimaryButton,
        SecondaryButton,
    },

    }
</script>

<style lang="scss" scoped>

</style>