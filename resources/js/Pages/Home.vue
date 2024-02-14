<template>
    <div class="bg-primarycolor">
        <!-- Login Modal Begin -->

        <Modal
            :show="show"
            :max-width="maxWidth"
            :closeable="closeable"
            @close="closeModal"
        >
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div
                    class="mx-auto shrink-0 absolute top-4 right-4 flex items-center justify-center h-12 w-12 rounded-full bg-primarycolorLight sm:mx-0 sm:h-10 sm:w-10"
                >
                    <i
                        class="fa-thin fa-xmark text-2xl cursor-pointer"
                        @click="closeModal"
                    ></i>
                </div>

                <div class="flex py-20 justify-center items-center">
                    <div
                        class="mt-3 w-full text-center sm:mt-0 sm:ms-4 sm:text-start"
                    >
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-gray-900">
                                Log <span class="text-primarycolor">In</span>
                            </h3>
                        </div>

                        <div class="mt-4 w-full">
                            <text-input v-model="email" class="w-full">
                                <template #inputLable> Email </template>
                            </text-input>
                        </div>
                        <div class="mt-4 w-full relative">
                            <text-input
                                v-model="password"
                                :type="inputType"
                                class="w-full"
                            >
                                <template #inputLable> Password </template>
                            </text-input>
                            <span
                                v-if="inputType == 'password'"
                                @click="showPassword"
                                class="cursor-pointer absolute right-4 top-12"
                                ><i class="fa-sharp fa-solid fa-eye"></i
                            ></span>
                            <span
                                v-if="inputType == 'text'"
                                @click="showPassword"
                                class="cursor-pointer absolute right-4 top-12"
                                ><i class="fa-sharp fa-solid fa-eye-slash"></i
                            ></span>
                        </div>
                        <div class="mt-10">
                            <primary-button
                                :class="'bg-black flex justify-center text-white w-full text-center'"
                                >Login</primary-button
                            >
                        </div>
                        <div class=" flex justify-center font-bold space-x-1 mt-4">
                            <span>Forgot your</span>
                            <Link class=" text-primarycolor"> password? </Link>
                        </div>
                        <div class=" flex justify-center font-bold space-x-1 mt-4">
                            <Link> Sign up</Link>
                        </div>
                    </div>
                </div>
            </div>
        </Modal>
        <!-- Login Modal Ends -->

        <!-- Navigation Bar -->
        <nav>
            <Navbar @login="openModalLogin" />
        </nav>
        <!-- End Navigation Bar -->

        <!-- Header Section Begin -->
        <header>
            <div class="container mx-auto px-4  py-20 md:py-0">
                <div
                    class="grid grid-cols-1 lg:grid-cols-12 lg:gap-16 mt-10 lg:items-center  h-[100vh]"
                >
                    <div class="col-span-6 flex justify-center  items-center ">
                        <div class="flex flex-col">
                            <h1 class=" text-5xl leading-[60px] md:text-[82px] md:leading-[92px] font-medium">
                                Simplify Your Bill Payments with
                                <span class="text-white font-extralight"
                                    >Easy</span
                                >Recharge
                            </h1>
                            <div class="mt-4">
                                <span class="text-[18px]"
                                    >Welcome to EasyRecharge, where paying bills
                                    is as easy as a few clicks</span
                                >
                            </div>
                            <div class="mt-10">
                                <primary-button
                                    class="bg-black text-white px-40 w-full lg:w-auto flex justify-center "
                                    >Get Started Now</primary-button
                                >
                            </div>
                        </div>
                    </div>
                    <div class=" md:col-span-6 grid col-span-1 grid-cols-2 gap-4 md:gap-10">
                        <div
                            class="hover:shadow-lg transition-all p-10 cursor-pointer hover:bg-primarycolorLight flex items-center uppercase justify-center font-bold text-xl border border-bordercolor  rounded-lg shadow-md bg-white overflow-hidden"
                        >
                            <span> Airtime </span>
                        </div>
                        <div
                            class="hover:shadow-lg transition-all p-10 cursor-pointer hover:bg-primarycolorLight flex items-center uppercase justify-center font-bold text-xl border border-bordercolor  rounded-lg shadow-md bg-white overflow-hidden"
                        >
                            <span> DATA </span>
                        </div>
                        <div
                            class="hover:shadow-lg transition-all p-10 cursor-pointer hover:bg-primarycolorLight flex items-center uppercase justify-center font-bold text-xl border border-bordercolor rounded-lg shadow-md bg-white overflow-hidden"
                        >
                            <span> ELECTRICTY </span>
                        </div>
                        <div
                            class="hover:shadow-lg transition-all p-10 cursor-pointer hover:bg-primarycolorLight flex items-center uppercase justify-center font-bold text-xl border border-bordercolor rounded-lg shadow-md bg-white overflow-hidden"
                        >
                            <span class="text-center"> TV SUBSCRIPTION </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section Ends -->

        <!-- Footer Section Begin -->
        <Footer
            class="items-center  lg:bottom-0 lg:left-0 lg:w-full lg:fixed bg-white lg:flex px-4 h-[60px]"
        />
        <!-- Footer Section Ends -->
    </div>
</template>

<script>
import Modal from "@/Components/Modal.vue";

import PrimaryButton from "@/Components/PrimaryButton.vue";
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link } from '@inertiajs/vue3';
export default {
    data() {
        return {
            inputType: "password",
            show: false,
            maxWidth: "xl",
            closeable: true,
        };
    },

    components: {
        Navbar,
        ApplicationLogo,
        PrimaryButton,
        Footer,
        Modal,
        TextInput,
        Link
    },

    methods: {
        closeModal() {
            this.show = false;
        },
        openModalLogin() {
            this.show = true;
        },

        showPassword() {
            this.inputType = this.inputType == "password" ? "text" : "password";
        },
    },
};
</script>

<style lang="scss" scoped></style>
