<template>
    <!-- <nav class="sticky top-0 z-10 flex flex-wrap h-2/12 py-3 px-5 shadow-xl justify-between md:justify-center bg-background-primary text-copy-secondary opacity-100 " :class="open ? 'items-center' : 'items-start' "> -->
    <nav class="sticky top-0 z-10 flex flex-wrap h-2/12 py-3 px-5 shadow-xl justify-between md:justify-center bg-background-primary text-copy-secondary opacity-100 " :class="open ? 'items-center' : 'items-between' ">
        <!-- <div class="w-full md:w-3/4 inline-block flex flex-wrap">
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

            <div class="flex justify-center">
                <theme-component></theme-component>
            </div> -->

            <!-- add hover animations and color change using udemy vue vids -->
            <!-- <div :class="open ? 'block ': 'hidden'" class="w-full md:w-0 flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="text-sm sm:flex-grow  " :class="open ? 'text-left mr-0' : ''">
                    <div :class="open ? 'float-left' : 'float-right'">
                        <a class="navbar-item" :href="url + 'about'">
                            <h3 class="text-xl mr-4 ">About</h3>
                        </a>
                        <a class="navbar-item" :href="url + 'store'">
                            <h3 class="text-xl mr-4 ">Store</h3>
                        </a>
                        <a class="navbar-item" :href="url + 'blog'">
                            <h3 class="text-xl mr-4 ">Blog</h3>
                        </a> -->
                        <!-- use Vuex to handle dropdown state -->
                        <!-- <div v-if="auth" class="inline-block">
                            <div class="dropdown-menu ">
                                <div v-if="open === true">
                                    <div class="dropdown-contents">
                                        <hr class="my-2">
                                        <a class="navbar-item" :href="url + 'home'">
                                            <h3 class=" text-xl  ">Your Account</h3>
                                        </a>
                                        <a class="navbar-item hover:text-copy-ternary"  :href="url + 'logout'"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <h3 class="text-xl">Logout</h3>
                                        </a>

                                        <form id="logout-form" :action="url + 'logout'" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" :value="csrf">
                                        </form>
                                    </div>
                                </div>
                                <div v-else>
                                    <dropdown-component :username=username></dropdown-component>
                                </div>
                            </div>
                        </div>

                        <div v-else class="inline-block">
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
        </div> -->


        <!-- <div class="w-full inline-block flex flex-wrap justify-around">
            <div class="flex-1">
                <a class="w-1/3 sm:w-auto pr-3" :href="url + ''">
                    <h1 class="inline text-xl w-1/3 sm:w-0">Laravel 6</h1>
                </a>
            </div>

            <div class="flex-1 ">
                <theme-component></theme-component>
            </div>

            <div class="flex-1 md:w-0 flex-grow sm:items-center">
                <div class="flex justify-end w-2/3 md:w-0 lg:w-auto sm:hidden">
                    <div class="block " :class="this.window.width < 640 ? 'flex justify-end' : 'hidden'">
                        <button @click="toggle" class="flex items-center px-3 py-2 border rounded border-white hover:text-copy-ternary hover:border-white">
                            <svg class="w-4 h-5 fill-current">
                                <rect width=16 height="15%" y="0px" style="fill: bg-background-accent-2"></rect>
                                <rect width=12 height="15%" y="8px" style="fill: bg-background-primary"></rect>
                                <rect width=16 height="15%" y="16px" style="fill: bg-background-accent-2"></rect>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="text-sm sm:flex-grow  ">
                    <div :class="open || this.window.width > 640 ? 'float-right ' : 'hidden'">
                        <a class="navbar-item" :href="url + 'about'">
                            <h3 class="text-xl mr-4 ">About</h3>
                        </a>
                        <a class="navbar-item" :href="url + 'store'">
                            <h3 class="text-xl mr-4 ">Store</h3>
                        </a>
                        <a class="navbar-item" :href="url + 'blog'">
                            <h3 class="text-xl mr-4 ">Blog</h3>
                        </a>
                        <div v-if="auth" class="inline-block">
                            <div class="dropdown-menu ">
                                <div v-if="open === true">
                                    <div class="dropdown-contents border-t-2 sm:border-none my-2 sm:my-0">
                                        <a class="navbar-item" :href="url + 'home'">
                                            <h3 class="text-xl mr-4 ">Your Account</h3>
                                        </a>
                                        <a class="navbar-item hover:text-copy-ternary"  :href="url + 'logout'"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <h3 class="text-xl mr-4 ">Logout</h3>
                                        </a>
                                        <form id="logout-form" :action="url + 'logout'" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" :value="csrf">
                                        </form>
                                    </div>
                                </div>
                                <div v-else>
                                    <dropdown-component :username=username></dropdown-component>
                                </div>
                            </div>
                        </div>
                        <div v-else class="inline-block">
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
        </div> -->
        <div class="w-full lg:w-3/4 flex flex-wrap inline-block">
            <div class="flex-1 sm:flex-none md:flex-1 justify-start md:w-auto">
                <a class=" pr-3" :href="url + ''">
                    <h1 class="inline text-xl w-1/3 sm:w-0">Laravel 6</h1>
                </a>
            </div>

            <div class="flex-none sm:flex-1 md:flex-none justify-center px-4">
                <theme-component></theme-component>
            </div>
            <div class="flex-1 justify-end md:w-0 lg:w-auto sm:hidden">
                <div class="block " :class="this.window.width < 640 ? 'flex justify-end' : 'hidden'">
                    <button @click="toggle" class="flex items-center px-3 py-2 border rounded border-white hover:text-copy-ternary hover:border-white">
                        <svg class="w-4 h-5 fill-current">
                            <rect width=16 height="15%" y="0px" style="fill: bg-background-accent-2"></rect>
                            <rect width=12 height="15%" y="8px" style="fill: bg-background-primary"></rect>
                            <rect width=16 height="15%" y="16px" style="fill: bg-background-accent-2"></rect>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- <div class="flex-auto sm:flex-1 sm:justify-end w-full sm:w-0 flex-grow sm:items-center"> -->
                <div class="flex-auto md:flex-1 sm:justify-end w-full sm:w-0 sm:items-center ">

                <!-- <div class="flex justify-end md:w-0 lg:w-auto sm:hidden">
                    <div class="block " :class="this.window.width < 640 ? 'flex justify-end' : 'hidden'">
                        <button @click="toggle" class="flex items-center px-3 py-2 border rounded border-white hover:text-copy-ternary hover:border-white">
                            <svg class="w-4 h-5 fill-current">
                                <rect width=16 height="15%" y="0px" style="fill: bg-background-accent-2"></rect>
                                <rect width=12 height="15%" y="8px" style="fill: bg-background-primary"></rect>
                                <rect width=16 height="15%" y="16px" style="fill: bg-background-accent-2"></rect>
                            </svg>
                        </button>
                    </div>
                </div> -->
                <!-- <div class="text-sm sm:flex-grow    "> -->
                    <!-- <div :class="open || this.window.width > 640 ? ' flex justify-center ' : 'hidden'"> -->
                    <div :class="open || this.window.width > 640 ? ' float-right ' : 'hidden'" class=" md:flex md:justify-end">
                        <a class="navbar-item" :href="url + 'about'">
                            <h3 class="text-xl mr-4 ">About</h3>
                        </a>
                        <a class="navbar-item" :href="url + 'store'">
                            <h3 class="text-xl mr-4 ">Store</h3>
                        </a>
                        <a class="navbar-item" :href="url + 'blog'">
                            <h3 class="text-xl mr-4 ">Blog</h3>
                        </a>
                        <div v-if="auth" class="inline-block">
                            <div class="dropdown-menu ">
                                <div v-if="open === true">
                                    <div class="dropdown-contents border-t-2 sm:border-none my-2 sm:my-0">
                                        <a class="navbar-item" :href="url + 'home'">
                                            <h3 class="text-xl mr-4 ">Your Account</h3>
                                        </a>
                                        <a class="navbar-item hover:text-copy-ternary"  :href="url + 'logout'"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <h3 class="text-xl mr-4 ">Logout</h3>
                                        </a>
                                        <form id="logout-form" :action="url + 'logout'" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" :value="csrf">
                                        </form>
                                    </div>
                                </div>
                                <div v-else>
                                    <dropdown-component :username=username></dropdown-component>
                                </div>
                            </div>
                        </div>
                        <div v-else class="inline-block">
                            <a class="navbar-item" :href="url + 'login'">
                                <h3 class="text-xl mr-4 ">Login</h3>
                            </a>
                            <a class="navbar-item" :href="url + 'register'">
                                <h3 class="text-xl mr-4 ">Sign Up</h3>
                            </a>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>

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
        },
        username: {
            type: String
        }
    },
    data(){
        return {
            open: true,
            url: process.env.MIX_APP_URL,
            window: {
                width: 0,
            },
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    methods: {
        toggle() {
            this.open = !this.open;
        },
        handleResize() {
            this.window.width = window.innerWidth;
        }
    },
    created() {
        window.addEventListener('resize', this.handleResize)
        this.handleResize();
        // this.w();
    },
    destroyed() {
        window.removeEventListener('resize', this.handleResize)
    },
    // computed: {
        w(){
            if(this.window.width < 640){
                console.log('toggle triggered');
                // return this.toggle();
                this.toggle();
                // this.open = false;
            }
            // return this.open = false;
        }

}
</script>
