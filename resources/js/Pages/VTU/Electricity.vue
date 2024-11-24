<template>
    <AuthenticatedLayout>
    
        <div class="py-4">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-lg overflow-y-auto flex w-full flex-col justify-center items-center  sm:rounded-lg ">

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
                            <span class="font-bold text-primarycolor">Buy Electricity</span>
                        </div>
                        <div>
                            <span>Want to pay electricity bills? You can buy power units easily here</span>
                        </div>
    
                    </div>
                    <div class=" flex justify-center">
    
                        <div class="mt-8 px-20 py-10 border rounded-md max-w-2xl">

                            <div>
                                    <div class=" justify-center flex"><span>Network</span></div>
                                    <div class="  justify-items-center grid grid-cols-4 gap-4 mt-4">
                                        <div class=" col-span-1  border-primarycolor border-2 shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Abuja-Electric.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Eko-Electric-Payment-PHCN.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Ikeja-Electric-Payment-PHCN.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Kano-Electric.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Port-Harcourt-Electric.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div> 
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Jos-Electric-JED.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Kaduna-Electric-KAEDCO.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Enugu-Electric-EEDC.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/IBEDC-Ibadan-Electricity-Distribution-Company.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Benin-Electricity-BEDC.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Aba-Electric-Payment-ABEDC.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                        <div class=" col-span-1 border shadow-md cursor-pointer w-20 h-20 flex justify-center relative items-center overflow-hidden rounded-md"> <img src="/storage/img/Yola-Electric-Payment-IKEDC.jpg" alt="">
                                            <input type="radio" class=" absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer z-40" name="network">
                                        </div>
                                    </div>
                                </div>
    

    
                            <form @submit.prevent="submit" >
                                <div class=" grid grid-cols-2 gap-2 mt-4">
                                    <div class="mt-4 w-full">
    
                                        <label for="bundle" class="flex flex-col space-y-2">
                                            <div>
                                                Metertype
                                            </div>
    
                                            <select v-model="form.first_name" name="bundle" id="" class="border-bordercolor w-full border focus:border-bordercolor focus:ring-0 py-3 px-4 pr-10 rounded-md shadow-sm">
                                                <option value="">Metertype</option>
                                            </select>
                                        </label>
    
                                        <InputError class="mt-2" :message="form.errors.first_name" />
                                    </div>
                                    <div class="mt-4 w-full">
                                        <text-input v-model="form.first_name" class="w-full">
                                            <template #inputLable> Meter Number  </template>
                                        </text-input>
                                        <InputError class="mt-2" :message="form.errors.first_name" />
                                    </div>
                                </div>
                                <div class="mt-4 w-full">
                                    <text-input v-model="form.first_name" class="w-full">
                                        <template #inputLable>Phone Number </template>
                                    </text-input>
                                    <InputError class="mt-2" :message="form.errors.first_name" />
                                </div>
                                <div class="mt-4 w-full">
                                    <text-input v-model="form.email" class="w-full">
                                        <template #inputLable> Email address </template>
                                    </text-input>
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>
                                <div class="mt-4 w-full">
                                    <text-input v-model="form.email" class="w-full">
                                        <template #inputLable> Amount </template>
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
    