<template>
<div>

    <div class="h-screen flex overflow-hidden bg-white">
        <!-- Static sidebar for desktop -->
        <div class="flex flex-col  flex-shrink-0 w-56  pb-4   border-r">
            <!-- Sidebar menu -->
            <DashboardSidebar />
        </div>
        <!-- Main -->
        <div class="flex-1 relative z-0 flex flex-col flex-shrink-0 shadow-md  md:flex  "  style=" background-image: url('/storage/img/phoneImage.jpg'); background-repeat: no-repeat; background-size: cover;">
            <!-- Top Navigation -->
            <EasyHeader />

            <!-- Main -->
            <div class=" container  overflow-y-auto mx-auto px-4 pb-40 pt-10">
                <slot/>
            </div>
                   <!-- Footer Section Begin -->
        <Footer
            class="items-center border-t lg:bottom-0 lg:left-0 lg:w-full lg:fixed bg-white lg:flex px-4 md:h-[60px]"
        />
        <!-- Footer Section Ends -->
        </div>

    </div>
</div>
</template>

<script>
import DashboardSidebar from '@/Components/DashboardSidebar.vue'
import EasyHeader from '@/Components/EasyHeader.vue'
import Footer from "@/Components/Footer.vue";

export default {
    name: "Dashboard",

    data() {
        return {

        }
    },
    components: {
        DashboardSidebar,
        EasyHeader,
        Footer
   
    },
    methods: {}

}
</script>

<style lang="scss" scoped>

</style>
