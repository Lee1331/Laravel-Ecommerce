<template>
    <div class="pack-container w-2/5 h-25 max-w-xs max-h-md rounded overflow-hidden shadow-lg mb-3 mr-3 sm:mr-0 sm:mb-0">
        <!-- <a :href=" this.packUrl() "> -->
            <div class="overlay w-full h-full relative">
                    <!-- <button class="overlay-button px-4 py-2 w-24 border rounded border-white bg-background-secondary shadow absolute flex content-center">Store</!-->
                <img class="w-full" :src=" item.image" alt="Sunset in the mountains">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Pack Name</div>
                    <p class="text-gray-700 text-base">
                    Author
                    </p>
                </div>

                <div class="w-full px-3 py-2 sm:px-6 sm:py-4">
                    <span class="inline-block rounded-full px-3 py-1 text-sm font-semibold mr-2">#Dubstep</span>
                    <span class="inline-block rounded-full px-3 py-1 text-sm font-semibold mr-2">#110 Loops</span>
                    <span class="inline-block rounded-full px-3 py-1 text-sm font-semibold">#200 One Shots</span>
                </div>
            </div>
        <!-- </a> -->
    </div>
</template>

<script>
    export default {
        props: {
            src: {
                type: String,
                required: true,
            },
            name: {
                type: String,
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
            // packUrl(){
            //     return 'store/' + this.name;
            // }
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
