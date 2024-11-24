<template>
<AuthenticatedLayout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="">
                    <div>
                        <span class=" font-bold">Welcome,</span> <span>matthew Emmanuel</span>
                    </div>
                </div>
                <div class=" grid grid-cols-3 gap-10  mt-10">
                    <div class=" border md:p-10 px-4 rounded-md ">
                        <div class=" py-4 flex flex-col">
                            <span>Wallet Balance</span>
                            <span class=" text-2xl  md:text-4xl ">₦41,400</span>
                        </div>
                        <div class=" mt-4">
                            <primary-button-link class=" bg-primarycolor">Topup</primary-button-link>
                        </div>
                    </div>
                    <div class=" border md:p-10 px-4 rounded-md ">
                        <div class=" py-4 flex flex-col">
                            <span>Refferal Balance</span>
                            <span class=" text-2xl  md:text-4xl ">₦11,400</span>
                        </div>
                        <div class=" mt-4">
                            <primary-button-link class=" bg-primarycolor">Withdraw</primary-button-link>
                        </div>
                        <div class=" mt-8">
                            Total Referrals: 0
                        </div>
                    </div>
                    <div class=" col-span-3 flex justify-between items-center border md:p-4 px-4 rounded-md ">

                        <div>
                            <span class=" font-bold">Refferal Code:</span> <span>fsfdwdsdsdsaas</span>
                        </div>
                        <div class=" flex space-x-4">
                            <span></span>
                            <Link><i class="fa-sharp text-primarycolor text-4xl fa-thin fa-share-nodes"></i></Link>
                            <span><i class="fa-thin cursor-pointer text-4xl fa-clone"></i></span>
                        </div>
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
import {
    Link
} from '@inertiajs/vue3';
export default {
    components: {
        DashboardSidebar,
        EasyHeader,
        PrimaryButtonLink,
        Link,
        AuthenticatedLayout
    },
}
</script>

<style lang="scss" scoped>

</style>
