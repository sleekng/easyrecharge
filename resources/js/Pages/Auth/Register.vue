<template>
    <GuestLayout>
        <div class="flex py-10 justify-center items-center w-full">
            <div class="mt-3 w-full sm:text-start">
                <div class="text-center">
                    <h3 class="text-lg font-bold text-gray-900">Signup</h3>
                </div>


                <form @submit.prevent="submit">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-x-4 mt-4">
                        <div class="mt-4 w-full">
                            <text-input
                                v-model="form.first_name"
                                class="w-full"
                            >
                                <template #inputLable> First name </template>
                            </text-input>
                            <InputError
                                class="mt-2"
                                :message="form.errors.first_name"
                            />
                        </div>
                        <div class="mt-4 w-full">
                            <text-input v-model="form.last_name" class="w-full">
                                <template #inputLable> Last name </template>
                            </text-input>
                            <InputError
                                class="mt-2"
                                :message="form.errors.last_name"
                            />
                        </div>
                    </div>
                    <div class="mt-4 w-full">
                        <text-input v-model="form.email" class="w-full">
                            <template #inputLable> Email address </template>
                        </text-input>
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <div class="mt-4 w-full">
                        <text-input v-model="form.phone_number" class="w-full">
                            <template #inputLable> Phone Number </template>
                        </text-input>
                        <InputError
                            class="mt-2"
                            :message="form.errors.phone_number"
                        />
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

                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>

                    <div class="mt-4 w-full relative">
                        <text-input
                            v-model="form.password_confirmation"
                            :type="inputConfirmPasswordType"
                            class="w-full"
                        >
                            <template #inputLable> Confirm Password </template>
                        </text-input>
                        <span
                            v-if="inputConfirmPasswordType == 'password'"
                            @click="showPassword('confirm-password')"
                            class="cursor-pointer absolute right-4 top-11"
                            ><i class="fa-sharp fa-solid fa-eye-slash"></i
                        ></span>
                        <span
                            v-if="inputConfirmPasswordType == 'text'"
                            @click="showPassword('confirm-password')"
                            class="cursor-pointer absolute right-4 top-11"
                            ><i class="fa-sharp fa-solid fa-eye"></i
                        ></span>
                        <InputError
                            class="mt-2"
                            :message="form.errors.password_confirmation"
                        />
                    </div>

                    <div class="mt-10">
                        <primary-button
                            :class="'bg-black flex justify-center text-white w-full text-center'"
                            >Create your account</primary-button
                        >
                    </div>
                </form>
                <div class="flex justify-center space-x-2 mt-4">
                    <span>Already have an account? </span>
                    <Link
                        class="cursor-pointer text-primarycolor font-bold"
                        :href="route('login')"
                    >
                        Login</Link
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
export default {
    props:[
        'user_id'
    ],
    components: {
        GuestLayout,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput,
        Link,
        Head,
    },
    data() {
        return {
            inputType: "password",
            inputConfirmPasswordType: "password",
            signUp: false,
            forgetPasswordSection: false,
            form: useForm({
                first_name: "",
                last_name: "",
                phone_number: "",
                email: "",
                password: "",
                password_confirmation: "",
            }),

        };
    },

    methods: {
        submit() {
            this.form.post(route("register"), {
                onFinish: () =>
                    this.form.reset("password", "password_confirmation"),
            });
        },

        showPassword(type) {
            if (type == "password") {
                this.inputType =
                    this.inputType == "password" ? "text" : "password";
            }
            if (type == "confirm-password") {
                this.inputConfirmPasswordType =
                    this.inputConfirmPasswordType == "password"
                        ? "text"
                        : "password";
            }
        },
    },
};
</script>

<style lang="scss" scoped></style>
