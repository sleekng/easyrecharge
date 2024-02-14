<template>
    <div class="w-full absolute top-0 left-0 bg-white">
        <div
            class="container mx-auto px-4 flex justify-between items-center h-[100px]"
        >
            <div class="logo">
                <Link :href="route('home')">
                    <application-logo></application-logo>
                </Link>
            </div>

            <div class="flex items-center space-x-8">
                <!-- Secondary button -->

                <div>
                    <secondary-button
                        class="'text-red-500'"
                        @click="OpenLoginModal"
                    >
                        Sign in
                    </secondary-button>
                </div>

                <!-- Primary button -->

                <div>
                    <primary-button class="bg-primarycolor "
                        >Get Started</primary-button
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ApplicationLogo from "./ApplicationLogo.vue";
import PrimaryButton from "./PrimaryButton.vue";
import SecondaryButton from "./SecondaryButton.vue";
import { Link } from "@inertiajs/vue3";
export default {
    components: {
        ApplicationLogo,
        Link,
        PrimaryButton,
        SecondaryButton,
    },

    methods: {
        OpenLoginModal() {
            this.$emit("login"); // Emitting the 'close' event
        },
    },
};
</script>

<style lang="scss" scoped></style>
