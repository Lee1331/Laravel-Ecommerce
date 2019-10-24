<template>
    <div class="w-2/5 h-25 max-w-xs max-h-md rounded overflow-hidden shadow-lg mb-3 mr-3 sm:mr-0 sm:mb-0">
        <img class="w-full" :src=" item.image" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Pack Name</div>
            <p class="text-gray-700 text-base">
            Author
            </p>
        </div>
        <div class="w-full px-3 py-2 sm:px-6 sm:py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            src: {
                type: String,
                required: true,
            }
        },

        data(){
            return {
                item:{
                    image: this.src
                }
            }
        }
    }
</script>

<style>
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
</style>
