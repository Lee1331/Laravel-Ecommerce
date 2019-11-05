<template>
    <div class="w-full sm:h-1-2 flex flex-wrap px-12 sm:pb-6 text-copy-secondary block relative">
        <div class=" w-full lg:w-1/3 lg:ml-auto h-45vh lg:h-1/2 bg-background-accent-1 pr-6">
            <img class="h-full object-fill overflow-hidden bg-cover bg-center content-center
            object-scale-down sm:object-contain
            "
            :src=" item.image" :alt="this.name + ' pack'">
        </div>

        <div class="w-full lg:w-1/3 lg:mr-auto h-1/2 lg:h-half sm:h-45vh bg-background-accent-1 lg:pl-6 pr-0 md:pr-12 lg:pr-0 xl:pr-12">
            <div class="inline-block text-left break-words pt-3 sm:pt-0">
                <h1 class="text-2xl md:text-3xl pb-2">{{ this.name }}</h1>
                <a :href="`/store/${ this.author }`">
                    <h1 class="text-lg pb-4 text-copy-ternary">by {{ this.author }}</h1>
                </a>
            </div>
            <div class="w-full md:w-auto flex flex-wrap lg:text-left break-words text-lg">
                <h3 class="pb-3 mr-6 text-2xl">{{ displayAmount }}</h3>
                <h3 v-for="tag in tags" class="pb-3 mr-3">
                    <a :href="`/store/tags/${ tag }`">
                        {{ tag }}
                    </a>
                </h3>
            </div>

            <hr class="pb-6">

            <div class="w-full md:w-auto inline-block lg:text-left break-words text-lg pb-6 text-copy-ternary flex flex-wrap ">
                <h3 class="pb-3">{{ this.description }}</h3>
            </div>
            <button class="px-4 py-2 w-48 border rounded border-white hover:bg-background-accent1 bg-background-secondary shadow">Add to Cart</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            amount: {
                type: Number,
                required: true,
            },
            src: {
                type: String,
                required: true,
            },
            name: {
                type: String,
                required: true,
            },
            description: {
                type: String,
                required: true,
            },
            author: {
                type: String,
                required: true,
            },
            tags: {
                type: Array,
                required: true,
            }
        },

        data(){
            return {
                item:{
                    image: this.src
                },
                zoomed: false,

            }
        },
        methods: {
            toggle() {
                this.zoomed = !this.zoomed
            },
        },

        computed: {
            displayAmount: function(){
                if(! this.amount){
                    return 'free';
                }
                return `£${this.amount}.00`;
            }
        }
    }
</script>

<style>
    .overlay-button {
        opacity: 0;
    }
    .pack{
        width: 257px;
        height: 257px;

    }
    .pack-image{
        max-width: 257px;
        max-height: 257px;
        /* width: 400px;
        height: 400px; */
    }

    .pack-container:hover .overlay{
        opacity: 1;
        /* background: hsla(50, 0%, 0%, 0.6); */
        background: bg-background-primary;
        transition: 0.5s opacity ease-out;
        cursor: pointer;
    }

    .pack-container:hover img{
        background: bg-background-primary;
        opacity: 0.25;
        transition: 0.5s opacity ease-out;
    }

    .pack-container:hover .overlay-button{
        opacity: 1;
        transition: 0.5s opacity ease-out;
    }
</style>
