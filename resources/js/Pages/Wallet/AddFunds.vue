<template>
    <AuthenticatedLayout>
    
        <div class="py-4">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-8 overflow-y-auto flex flex-col justify-center items-center  sm:rounded-lg ">
    
        
                    <div class=" mt-10 max-w-2xl text-center">
                        <div>
                            <span class="font-bold text-primarycolor">Credit Wallet</span>
                        </div>
                        <div>
                            <span>Credit your wallet now, and spend from it later. No Need to enter card details everytime you want to make a Payment. Make Faster Payments</span>
                        </div>
    
                    </div>
                    <div class=" flex justify-center">
    
                        <div class="mt-8 px-20 py-10 border rounded-md max-w-2xl">
    
                            <form @submit.prevent="submit">
                                <div>
                                    <div class=" justify-center flex font-bold"><span>Fund with Card</span></div>
                                </div>
    
                            
                                <div class="mt-4 w-full">
                                    <text-input v-model="form.email" class="w-full" placeholder="Enter Amount">
                                        <template #inputLable> Amount (NGN) </template>
                                    </text-input>
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>
    
                                <div class="mt-10">
                                    <primary-button :class="'primary-bg secondary-bg flex justify-center  w-full text-center'">Submit</primary-button>
    
                                </div>
                            </form>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
    </template>
    
    <script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import DashboardSidebar from '@/Components/DashboardSidebar.vue'
    import EasyHeader from '@/Components/EasyHeader.vue'
    import PrimaryButtonLink from '@/Components/PrimaryButtonLink.vue'
    
    import InputError from "@/Components/InputError.vue";
    import InputLabel from "@/Components/InputLabel.vue";
    import PrimaryButton from "@/Components/PrimaryButton.vue";
    import TextInput from "@/Components/TextInput.vue";
    import {
        Head,
        Link,
        useForm
    } from "@inertiajs/vue3";
    export default {
        components: {
            DashboardSidebar,
            EasyHeader,
            PrimaryButtonLink,
            Link,
            AuthenticatedLayout,
    
            InputError,
            InputLabel,
            PrimaryButton,
            TextInput,
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
                        this.inputConfirmPasswordType == "password" ?
                        "text" :
                        "password";
                }
            },
        },
    }
    </script>
    
    <style lang="scss" scoped>
    
        </style>
    