<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <form
            class="flex py-10 justify-center items-center"
            @submit.prevent="submit"
        >
            <div class="mt-3 w-full text-center sm:mt-0 sm:ms-4 sm:text-start">
                <div class="text-center">
                    <h3 class="text-lg font-bold text-gray-900">
                        Forgot your password?
                    </h3>
                </div>
                <div>
                    Enter your email address or phone number below and we'll
                    send you an OTP.
                </div>

                <div class="mt-4 w-full flex justify-star text-left">
                    <text-input v-model="email" class="w-full">
                        <template #inputLable> Email/Phone Number </template>
                    </text-input>
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <primary-button
                        :class="'bg-black flex justify-center text-white w-full text-center'"
                        >Send OTP</primary-button
                    >
                </div>

                <div class="flex justify-start space-x-1 mt-4">
                    <Link
                        class="cursor-pointer "
                        :href="route('login')"
                    >
                        Login</Link
                    >
                </div>
            </div>
        </form>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm, Link } from "@inertiajs/vue3";
export default {
    data() {
        return {
            form: useForm({
                email: "",
            }),
        };
    },
    props: ["status"],
    components: {
        GuestLayout,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput,
        Head,
        Link
    },
    methods: {
        submit() {
            form.post(route("password.email"));
        },
    },
};
</script>

<style lang="scss" scoped></style>
