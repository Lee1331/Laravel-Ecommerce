<template>
    <!-- class="w-full float-right" -->
    <div>
        <div class="block sm:hidden" :class="open ? 'flex justify-end' : ''">
            <button @click="toggle" class="flex items-center px-3 py-2 border rounded border-white hover:text-copy-primary hover:border-white">
                <svg class="w-4 h-5">
                    <rect width=16 height="15%" y="0px" style="fill: bg-background-accent-2"></rect>
                    <rect width=16 height="15%" y="8px" style="fill: bg-background-accent-2"></rect>
                    <rect width=16 height="15%" y="16px" style="fill: bg-background-accent-2"></rect>
                </svg>
            </button>
        </div>


        <!-- w-half -->
        <div :class="open ? 'block': 'hidden'" class=" w-full
        flex-grow sm:flex sm:items-center sm:w-auto ">
            <div class="text-sm sm:flex-grow" :class="open ? 'text-left mr-0' : ''">

                <div v-if="auth">
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class="block sm:inline-block text-xl" :class="open ? '' : 'mr-4'">Link 1</h3>
                    </a>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Link 2</h3>
                    </a>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Link 3</h3>
                    </a>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Home</h3>
                    </a>
                </div>

                <div v-else>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class="block sm:inline-block text-xl" :class="open ? '' : 'mr-4'">Link 1</h3>
                    </a>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Link 2</h3>
                    </a>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Link 3</h3>
                    </a>

                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Login</h3>
                    </a>
                    <a class="navbar-item block sm:inline-block hover:bg-background-accent-2" href="">
                        <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Sign Up</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

</template>
<style>

</style>
<script>
export default {
    name: 'hamburger-component',
    props: {
        auth: false
    },
    data(){
        return {
            open: false,
        }
    },
    methods: {
        toggle() {
            this.open = !this.open
        }
    }
}
</script>
