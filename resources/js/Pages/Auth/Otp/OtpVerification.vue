<template>
    <GuestLayout>
        <Head title="Verification Code" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form
            class="flex py-10 justify-center items-center"
            @submit.prevent="submit"
        >
            <div class="mt-3 w-full text-center sm:mt-0 sm:ms-4 sm:text-start">
                <div class="text-center py-10">
                    <h3 class="text-2xl font-bold text-gray-900">
                       <span> Verification code sent</span> <i class="fa-light text-green-600 fa-envelope-circle-check"></i>
                    </h3>
                </div>
                <div>
                   A verification code has been sent to your mobile phone! Please enter the code below to verify account.
                </div>

                <div class="mt-4 w-full flex justify-star text-left">
                    <text-input v-model="form.otp" class="w-full">
                        <template #inputLable> Enter verification code</template>
                    </text-input>
                </div>
                <InputError class="mt-2" :message="form.errors.otp" />

                <div class="mt-4">
                    <primary-button
                        :class="'bg-black flex justify-center text-white w-full text-center'"
                        >Confirm</primary-button
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
   
    props: ["status", "userID"], 

    data() {
        return {
            form: useForm({
                otp: "",
                user_id:this.userID
            }),
        };
    },
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
            this.form.post(route("vcode.login"));
        },
    },
};
</script>

<style lang="scss" scoped></style>
