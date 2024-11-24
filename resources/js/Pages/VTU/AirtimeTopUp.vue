<template>
<AuthenticatedLayout>

    <div class="py-4">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 overflow-y-auto flex w-full flex-col justify-center items-center  sm:rounded-lg ">

                <div class=" w-full">
                    <div class="grid grid-cols-3 gap-2 justify-items-center">
                        <div class=" col-span-1 flex flex-col w-full justify-center items-center space-y-2">
                            <div>Recharge Details</div>
                            <div class="h-[8px] border rounded-md bg-primarycolor w-full "></div>
                        </div>
                        <div class=" col-span-1 flex flex-col w-full justify-center items-center space-y-2">
                            <div>Make Payment</div>
                            <div class="h-[8px] border rounded-md bg-lightgray w-full "></div>
                        </div>
                        <div class=" col-span-1 flex flex-col w-full justify-center items-center space-y-2">
                            <div>View Receipt</div>
                            <div class="h-[8px] border rounded-md bg-lightgray w-full "></div>
                        </div>
                    </div>
                </div>
                <div class=" mt-10 text-center">
                    <div>
                        <span class="font-bold text-primarycolor">Buy Airtime</span>
                    </div>
                    <div>
                        <span>Join thousands of satisfied users who trust <span class=" text-primarycolor">Easy</span>Recharge.</span>
                    </div>

                </div>
                <div class=" flex justify-center">

                    <div class="mt-8 px-20 py-10 border rounded-md max-w-2xl">

                        <form @submit.prevent="submit">
                            <div>
                                <div class=" justify-center flex"><span>Network provider</span></div>
                                <div class=" w-full flex  justify-center space-x-4 mt-4">
                                    <div class=" col-span-1  border-primarycolor border-2 shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/mtn.png" alt="">
                                        <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                    </div>
                                    <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/glo.png" alt="">
                                        <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                    </div>
                                    <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/9mobile.png" alt="">
                                        <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                    </div>
                                    <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/airtel.png" alt="">
                                        <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 w-full">
                                <text-input v-model="form.first_name" class="w-full">
                                    <template #inputLable>Phone number </template>
                                </text-input>
                                <InputError class="mt-2" :message="form.errors.first_name" />
                            </div>
                            <div class="mt-4 w-full">
                                <text-input v-model="form.first_name" class="w-full">
                                    <template #inputLable>Amount </template>
                                </text-input>
                                <InputError class="mt-2" :message="form.errors.first_name" />
                            </div>
                            <div class="mt-4 w-full">
                                <text-input v-model="form.email" class="w-full">
                                    <template #inputLable> Email address </template>
                                </text-input>
                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <div class="mt-10">
                                <primary-button :class="'primary-bg secondary-bg flex justify-center  w-full text-center'">Continue</primary-button>

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
