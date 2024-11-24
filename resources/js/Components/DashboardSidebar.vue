<template>
    <div class=" h-[100vh]  bg-white">
        <div>
            <div class="logo p-4 flex justify-center">
                <Link><ApplicationLogo/></Link>
            </div>
            <ul>
                <li class=" p-4 flex space-x-2 justify-center items-center border-b">
                    <div>
                        <div class=" w-16 h-16 flex justify-center items-center rounded-full border overflow-hidden shadow-lg">
                                <span class=" text-2xl font-bold   text-primarycolor/30">E</span>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class=" font-bold text-[12px]">Matthew Emmanuel</span>
                        <span class=" text-[12px]">07030068148</span>
                    </div>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Dashboard</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Airtime</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Data</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Electricity</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">TV Subscription</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Wallet</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Payments</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Transaction History</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4  h-full">Profile Settings</Link>
                </li>
                <li class="flex  hover:bg-primarycolor justify-center items-center">
                    <Link class="  text-center w-full py-4 flex items-center space-x-2 justify-center  h-full"><span>Log out</span> <i class="fa-thin fa-arrow-right-from-bracket"></i></Link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
    export default {
        components:{
            Link,
            ApplicationLogo
        }
    }
</script>

<style lang="scss" scoped>

</style>