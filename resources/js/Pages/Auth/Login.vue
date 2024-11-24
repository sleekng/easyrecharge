<template>
    <GuestLayout>
        <Head title="Register" />

        <div class="flex w-full py-20 justify-center items-center">
            <div class="mt-3 w-full  sm:mt-0 sm:ms-4 sm:text-start">
                <div class="text-center" >
                    <h3 class="text-lg font-bold text-gray-900">
                        Log
                        <span class="text-primarycolor">In</span>
                    </h3>
                </div>

                <form @submit.prevent="submit">
                <div class="mt-4 w-full">
                    <text-input v-model="form.phone_number" class="w-full">
                        <template #inputLable> Email / Phone Number </template>
                    </text-input>
                    <InputError class="mt-2" :message="form.errors.phone_number" />
                </div>
                <div class="mt-4 w-full relative">
                    <text-input
                        v-model="form.password"
                        :type="inputType"
                        class="w-full"
                    >
                        <template #inputLable> Password </template>
                    </text-input>

                    <span
                        v-if="inputType == 'password'"
                        @click="showPassword('password')"
                        class="cursor-pointer absolute right-4 top-11"
                        ><i class="fa-sharp fa-solid fa-eye-slash"></i
                    ></span>
                    <span
                        v-if="inputType == 'text'"
                        @click="showPassword('password')"
                        class="cursor-pointer absolute right-4 top-11"
                        ><i class="fa-sharp fa-solid fa-eye"></i
                    ></span>

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
             
                <div class="mt-10">
                    <primary-button
                        :class="'bg-black flex justify-center text-white w-full text-center'"
                        >Login</primary-button
                    >
                </div>
              </form>
          
                <div class="flex justify-center font-bold space-x-1 mt-4">
                    <span>Forgot your</span>
                    <Link
                        class="text-primarycolor cursor-pointer"
                        :href="route('password.request')"
                    >
                        password?
                    </Link>
                </div>
                <div class="flex justify-center space-x-2 mt-4">
                    <span>Don't have an account yet?</span>
                    <Link
                        :href="route('register')"
                        class="cursor-pointer font-bold"
                    >
                        Sign up</Link
                    >
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import Checkbox from '@/Components/Checkbox.vue';
export default {
    components: {
        GuestLayout,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput,
        Link,
        Head,
        Checkbox,
        useForm
    },
    data() {
        return {
            inputType: "password",
            signUp: false,
            form: useForm({
                phone_number: "",
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(route("otp.generate"), {
                onFinish: () => this.form.reset("password"),
            });
        },

        showPassword() {
           
            this.inputType = this.inputType == "password" ? "text" : "password";
        },
    },
};
</script>

<style lang="scss" scoped></style>
