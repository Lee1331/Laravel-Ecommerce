<template>
    <div class="pack-container w-full h-full rounded overflow-hidden shadow-md mb-3 mr-3 sm:mr-0 sm:mb-0 ">
        <div class="overlay w-full h-full relative hover:text-copy-ternary">
                <!-- <button class="overlay-button px-4 py-2 w-24 border rounded border-white bg-background-secondary shadow absolute flex content-center">Store</!-->
            <img class="w-full" :src=" item.image" :alt="this.name + ' pack'">
            <div class="px-6 py-4 cursor-default">
                <div class="font-bold text-l md:text-xl mb-2 cursor-pointer">{{ this.name }}</div>
                <div class="flex justify-between">
                    <p class="text-gray-700 text-base mb-1 cursor-pointer">by {{ this.author }}</p>
                    <p class="text-gray-700 text-base cursor-pointer">{{ displayAmount }}</p>
                </div>
            </div>
        </div>
        <div class="w-full px-3 py-2 sm:py-3">
            <span v-for="tag in tags" class="inline-block rounded-full px-3 py-1 text-sm font-semibold mr-2 cursor-pointer hover:text-copy-ternary">
                <a href="/">
                    #{{ tag }}
                </a>
            </span>
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
