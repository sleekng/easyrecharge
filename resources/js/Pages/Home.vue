<template>
    <!-- Primary SideBAr -->
    <side-bar
        @closesidebar="SideBarFn"
        v-if="showSideBar"
        class="animate-fade-right animate-duration-300"
    ></side-bar>

    <div class="bg-primarycolor overflow-hidden">
        <!-- Login/Register Modal Begin -->
        <div
            v-if="show"
            id="login-modal"
            class="bg-white hidden max-w-5xl xl:grid grid-cols-2 overflow-hidden rounded-xl z-50"
        >
            <div
                class="relative rounded-md p-10 overflow-hidden flex justify-center items-end"
                style="
                    background-image: url('storage/img/login-bg.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                "
            >
                <div id="overlay-login" class="z-10"></div>
                <span class="z-50 text-white relative text-6xl font-bold">
                    Your One-Stop Solution for Easy Bill Payments
                </span>
            </div>

            <!-- Login Section -->
            <div v-if="loginSection" class="relative">
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
                                    Log
                                    <span class="text-primarycolor">In</span>
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
                                    :type="LoginInputType"
                                    class="w-full"
                                >
                                    <template #inputLable> Password </template>
                                </text-input>
                                <span
                                    v-if="LoginInputType == 'password'"
                                    @click="showPassword('login-password')"
                                    class="cursor-pointer absolute right-4 top-11"
                                    ><i
                                        class="fa-sharp fa-solid fa-eye-slash"
                                    ></i
                                ></span>
                                <span
                                    v-if="LoginInputType == 'text'"
                                    @click="showPassword('login-password')"
                                    class="cursor-pointer absolute right-4 top-11"
                                    ><i class="fa-sharp fa-solid fa-eye"></i
                                ></span>
                            </div>

                            <div class="mt-10">
                                <primary-button
                                    :class="'bg-black flex justify-center text-white w-full text-center'"
                                    >Login</primary-button
                                >
                            </div>
                            <div
                                class="flex justify-center font-bold space-x-1 mt-4"
                            >
                                <span>Forgot your</span>
                                <span
                                    class="text-primarycolor cursor-pointer"
                                    @click="openModal('forget-pass')"
                                >
                                    password?
                                </span>
                            </div>
                            <div class="flex justify-center space-x-2 mt-4">
                                <span>Don't have an account yet?</span>
                                <span
                                    @click="openModal('register')"
                                    class="cursor-pointer font-bold"
                                >
                                    Sign up</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sign up Section -->
            <div v-if="registeerSection" class="relative">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div
                        class="mx-auto shrink-0 absolute top-4 right-4 flex items-center justify-center h-12 w-12 rounded-full bg-primarycolorLight sm:mx-0 sm:h-10 sm:w-10"
                    >
                        <i
                            class="fa-thin fa-xmark text-2xl cursor-pointer"
                            @click="closeModal"
                        ></i>
                    </div>

                    <div class="flex py-10 justify-center items-center">
                        <div
                            class="mt-3 w-full text-center sm:mt-0 sm:ms-4 sm:text-start"
                        >
                            <div class="text-center">
                                <h3 class="text-lg font-bold text-gray-900">
                                    Signup
                                </h3>
                            </div>

                            <form @submit.prevent="handleSubmitRegisterForm">
                                <div class="grid grid-cols-2 gap-x-2 mt-4">
                                    <div class="mt-4 w-full">
                                        <text-input
                                            v-model="first"
                                            class="w-full"
                                        >
                                            <template #inputLable>
                                                First name
                                            </template>
                                        </text-input>
                                    </div>
                                    <div class="mt-4 w-full">
                                        <text-input
                                            v-model="email"
                                            class="w-full"
                                        >
                                            <template #inputLable>
                                                Last name
                                            </template>
                                        </text-input>
                                    </div>

                                    <div class="mt-4 w-full">
                                        <text-input
                                            v-model="first"
                                            class="w-full"
                                        >
                                            <template #inputLable>
                                                Email address
                                            </template>
                                        </text-input>
                                    </div>
                                    <div class="mt-4 w-full">
                                        <text-input
                                            v-model="email"
                                            class="w-full"
                                        >
                                            <template #inputLable>
                                                Phone Number
                                            </template>
                                        </text-input>
                                    </div>
                                </div>
                            </form>

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
                                    @click="showPassword('password')"
                                    class="cursor-pointer absolute right-4 top-11"
                                    ><i
                                        class="fa-sharp fa-solid fa-eye-slash"
                                    ></i
                                ></span>
                                <span
                                    v-if="inputType == 'text'"
                                    @click="showPassword('password')"
                                    class="cursor-pointer absolute right-4 top-11"
                                    ><i class="fa-sharp fa-solid fa-eye"></i
                                ></span>
                            </div>

                            <div class="mt-4 w-full relative">
                                <text-input
                                    v-model="password"
                                    :type="inputConfirmPasswordType"
                                    class="w-full"
                                >
                                    <template #inputLable>
                                        Confirm Password
                                    </template>
                                </text-input>
                                <span
                                    v-if="
                                        inputConfirmPasswordType == 'password'
                                    "
                                    @click="showPassword('confirm-password')"
                                    class="cursor-pointer absolute right-4 top-11"
                                    ><i
                                        class="fa-sharp fa-solid fa-eye-slash"
                                    ></i
                                ></span>
                                <span
                                    v-if="inputConfirmPasswordType == 'text'"
                                    @click="showPassword('confirm-password')"
                                    class="cursor-pointer absolute right-4 top-11"
                                    ><i class="fa-sharp fa-solid fa-eye"></i
                                ></span>
                            </div>

                            <div class="mt-10">
                                <primary-button
                                    :class="'bg-black flex justify-center text-white w-full text-center'"
                                    >Create your account</primary-button
                                >
                            </div>

                            <div class="flex justify-center space-x-2 mt-4">
                                <span>Already have an account? </span>
                                <span
                                    class="cursor-pointer text-primarycolor font-bold"
                                    @click="openModal('login')"
                                >
                                    Login</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ForgetPassword Section -->
            <div v-if="forgetPasswordSection" class="relative">
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
                                    Forgot your password?
                                </h3>
                            </div>
                            <div>
                                Enter your email address or phone number below
                                and we'll send you an OTP.
                            </div>

                            <div class="mt-4 w-full">
                                <text-input v-model="email" class="w-full">
                                    <template #inputLable>
                                        Email/Phone Number
                                    </template>
                                </text-input>
                            </div>

                            <div class="mt-10">
                                <primary-button
                                    :class="'bg-black flex justify-center text-white w-full text-center'"
                                    >Send OTP</primary-button
                                >
                            </div>

                            <div
                                class="flex justify-center font-bold space-x-1 mt-4"
                            >
                                <span
                                    @click="openModal('login')"
                                    class="cursor-pointer"
                                    >Login</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            @click="closeModal"
            v-if="show"
            class="hidden fixed w-screen xl:flex justify-center items-center h-screen z-40 top-0 left-0 p-12"
            style="background-color: rgba(0, 0, 0, 0.8)"
        ></div>
        <!-- Login Modal Ends -->

        <!-- Navigation Bar -->
        <nav>
            <Navbar
                @signin="openModal('login')"
                @register="openModal('register')"
                @opensidebar="SideBarFn"
            />
        </nav>
        <!-- End Navigation Bar -->

        <!-- Header Section Begin -->
        <header>
            <div class="container mx-auto px-4 py-20 md:py-0">
                <div
                    class="grid grid-cols-1 lg:grid-cols-12 gap-y-8 lg:gap-16 mt-10 lg:items-center h-[100vh]"
                >
                    <div class="col-span-6 flex justify-center items-center">
                        <div class="flex flex-col">
                            <h1
                                class="text-5xl animate-fade-right animate-duration-[3000ms] leading-[60px] md:text-[82px] md:leading-[92px] font-medium"
                            >
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
                                    @click="openModal('register')"
                                    class="bg-black text-white px-40 w-full animate-fade-up animate-duration-[3000ms] lg:w-auto flex justify-center"
                                    >Get Started Now</primary-button
                                >
                            </div>
                        </div>
                    </div>
                    <div
                        class="md:col-span-6 grid col-span-1 gap-y-4 animate-fade-up grid-cols-2 gap-4 md:gap-10"
                    >
                        <Link
                            :href="route('airtime')"
                            class="hover:shadow-lg h-[150px] transition-all p-10 cursor-pointer flex items-center uppercase justify-center font-bold text-md secondary-bg rounded-lg shadow-md primary-bg overflow-hidden"
                        >
                            <span> Airtime </span>
                        </Link>
                        <div
                            class="hover:shadow-lg h-[150px] transition-all p-10 cursor-pointer flex items-center uppercase justify-center font-bold text-md secondary-bg rounded-lg shadow-md primary-bg overflow-hidden"
                        >
                            <span> DATA </span>
                        </div>
                        <div
                            class="hover:shadow-lg h-[150px] transition-all p-10 cursor-pointer flex items-center uppercase justify-center font-bold text-md secondary-bg rounded-lg shadow-md primary-bg overflow-hidden"
                        >
                            <span> ELECTRICTY </span>
                        </div>
                        <div
                            class="hover:shadow-lg h-[150px] transition-all p-10 cursor-pointer flex items-center uppercase justify-center font-bold text-md secondary-bg rounded-lg shadow-md primary-bg overflow-hidden"
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
            class="items-center lg:bottom-0 lg:left-0 lg:w-full lg:fixed bg-white lg:flex px-4 md:h-[60px]"
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
import { Link,useForm } from "@inertiajs/vue3";
import SideBar from "@/Components/PrimarySidebar.vue";
export default {
    props: [],
    data() {
        return {
            showSideBar: false,
            LoginInputType:'password',
            inputType: "password",
            inputConfirmPasswordType: "password",
            inputConfirmPasswordType: "password",
            show: false,
            maxWidth: "full",
            closeable: true,
            loginSection: true,
            signUp: false,
            forgetPasswordSection: false,

            formLogin: useForm({
                login: "",
                password: "",
                remember: false,
            }),

            formRegister: useForm({
                first_name: "",
                last_name: "",
                phone_number: "",
                email: "",
                password: "",
                password_confirmation: "",
            }),
        };
    },

    components: {
        Navbar,
        ApplicationLogo,
        PrimaryButton,
        Footer,
        TextInput,
        Link,
        SideBar,
        useForm
    },

    methods: {

        submitRegister() {
            this.formRegister.post(route("register"), {
                onFinish: () => form.reset("password", "password_confirmation"),
            });
        },

        submitLogin() {
            this.formLogin.post(route("login"), {
                onFinish: () => form.reset("password"),
            });
        },


        closeModal() {
            this.show = false;
        },
        SideBarFn(value) {
            this.showSideBar = value;
            console.log(this.showSideBar);
        },
        openModal(option) {
            if (option == "login") {
                this.show = true;
                this.forgetPasswordSection = false;
                this.registeerSection = false;
                this.loginSection = true;
            } else if (option == "register") {
                this.show = true;
                this.forgetPasswordSection = false;
                this.loginSection = false;
                this.registeerSection = true;
            } else if (option == "forget-pass") {
                this.show = true;
                this.loginSection = false;
                this.registeerSection = false;
                this.forgetPasswordSection = true;
            }
        },

        showPassword(type) {
            if (type == "login-password") {
                this.LoginInputType =
                    this.LoginInputType == "password" ? "text" : "password";
            }
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
