<template>
    <nav class="z-1 sticky top-0 flex flex-wrap h-2/12 py-3 px-5 shadow-xl justify-between
    bg-background-primary
    text-copy-secondary"
    :class="open ? 'items-center' : 'items-start' ">

        <div class="w-full inline-block flex flex-wrap">
            <div class="flex w-full sm:w-1/3 lg:w-1/2 justify-start">
                <a class="w-1/3 sm:w-auto pr-3" :href="url + ''">
                    <h1 class="inline text-xl w-1/3 sm:w-0">Laravel 6</h1>
                </a>

                <div class="flex justify-end w-2/3 md:w-0 lg:w-auto sm:hidden">
                    <div class="block sm:hidden" :class="open ? 'flex justify-end' : ''">
                        <button @click="toggle" class="flex items-center px-3 py-2 border rounded border-white hover:text-copy-ternary hover:border-white">
                            <svg class="w-4 h-5 fill-current">
                                <rect width=16 height="15%" y="0px" style="fill: bg-background-accent-2"></rect>
                                <rect width=16 height="15%" y="8px" style="fill: bg-background-accent-2"></rect>
                                <rect width=16 height="15%" y="16px" style="fill: bg-background-accent-2"></rect>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

                <!-- add hover animations and color change using udemy vue vids -->
                <div :class="open ? 'block ': 'hidden'" class="w-full md:w-0 flex-grow sm:flex sm:items-center sm:w-auto ">
                    <div class="text-sm sm:flex-grow " :class="open ? 'text-left mr-0' : ''">
                        <div v-if="auth" :class="open ? 'float-left' : 'float-right'">
                            <a class="navbar-item" :href="url + 'about'">
                                <h3 class="text-xl mr-4 ">About</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'store'">
                                <h3 class=" text-xl mr-4 ">Store</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'blog'">
                                <h3 class=" text-xl mr-4 ">Blog</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'home'">
                                <h3 class=" text-xl mr-4 ">Home</h3>
                            </a>

                            <a class="navbar-item hover:text-copy-ternary"  :href="url + 'logout'"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <h3 class="text-xl mr-4">Logout</h3>
                            </a>

                            <form id="logout-form" :action="url + 'logout'" method="POST" style="display: none;">
                                <input type="hidden" name="_token" :value="csrf">
                            </form>
                        </div>

                        <div v-else :class="open ? 'float-left' : 'float-right'">
                            <a class="navbar-item" :href="url + 'about'">
                                <h3 class="text-xl mr-4 ">About</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'store'">
                                <h3 class=" text-xl mr-4 ">Store</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'blog'">
                                <h3 class=" text-xl mr-4 ">Blog</h3>
                            </a>

                            <a class="navbar-item" :href="url + 'login'">
                                <h3 class="text-xl mr-4 ">Login</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'register'">
                                <h3 class="text-xl mr-4 ">Sign Up</h3>
                            </a>
                        </div>
                    </div>
                </div>

        </div>
    <!-- </div> -->
    </nav>

</template>
<script>
export default {
    name: 'navbar-component',
    props: {
        auth: {
            type: Boolean,
            required: true,
            default: false
        }
    },
    data(){
        return {
            open: false,
            url: process.env.MIX_APP_URL,
            // urlStrings: {
            //     login: this.url+'login',
            // }
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    methods: {
        toggle() {
            this.open = !this.open
        }
    }
}
</script>
