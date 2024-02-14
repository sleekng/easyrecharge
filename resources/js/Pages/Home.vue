!<template>
    <div class="container ">
        
        <confirmation-modal :show="showModal" @close="closeModal">
        
            <template #title>
                <div>
                        WOw! it works
                </div>
            </template>
            <template #content>
                <div>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero aliquam quis, ab dolorem iste iusto obcaecati illum aperiam praesentium. Magnam, tempore! Doloribus possimus magnam at esse beatae, perferendis eum, adipisci dolore, quibusdam neque dolores dignissimos fugiat maiores aut modi dolorum.
                </div>
            </template>
        </confirmation-modal>


        <!-- Primary button -->
        <div class=" py-10">
            <primary-button class="'text-red-500'">Get Started</primary-button>
        </div>



        <!-- Secondary button -->
        <div class=" py-10">
            <secondary-button class="'text-red-500'" @click="popName">
             
                Get Started
            </secondary-button>
        </div>

        <i class="fa-thin fa-bars text-2xl"></i>



        <!-- Input -->
        <text-input v-model="name" >

            <template #inputLable >
                Name
            </template>
            
        </text-input>



        <div>Working</div>
        <div>{{ canLogin }}</div>
        <div>{{ canRegister }}</div>
        <div>{{ laravelVersion }}</div> 
        <div>{{ phpVersion }}</div> 
    </div>
</template>

<script>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from "@/Components/SecondaryButton.vue";
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import TextInput from '@/Components/TextInput.vue';
    export default {
        data(){
            return{
                showModal:false,
                name:null,
            }
        },
        props:[
            'canLogin',
            'canRegister',
            'laravelVersion',
            'phpVersion',
        ],

        components:{
            ConfirmationModal,
            SecondaryButton,
            PrimaryButton,
            TextInput
        },

        methods:{
            closeModal() {
                this.showModal = false;
            },

            popName(){
                alert( this.name);
            }
        
        
        },
    }

</script> 

<style lang="scss" scoped>

</style>