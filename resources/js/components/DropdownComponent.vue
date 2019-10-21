<template>
<div>

    <!-- <button @click="toggle" class="flex items-center px-1 py-1 border rounded border-white hover:text-copy-ternary hover:border-white"> -->
    <button @click="toggle" class="flex items-center px-1 py-1 hover:text-copy-ternary hover:border-white">
        <h3 class=" text-xl  ">{{ this.username }}</h3>
        <div class="px-2 pt-1">
            <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                class="w-4 h-4 fill-current" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve">
                <g>
                    <g id="expand-more">
                        <polygon points="270.3,58.65 153,175.95 35.7,58.65 0,94.35 153,247.35 306,94.35"/>
                    </g>
                </g>
            </svg>
        </div>
    </button>
    <!-- dropdown-contents -->
    <div :class="open ? 'absolute bg-copy-primary p-2 ': 'hidden'">
        <a class="navbar-item" :href="url + 'home'">
            <h3 class=" text-xl  ">Your Account</h3>
        </a>
        <hr class="my-2">
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

</template>

<script>
export default {
    name: 'dropdown-component',
    props: {
        username: {
            type: String
        }
    },
    data(){
            return {
                open: false,
                    url: process.env.MIX_APP_URL,
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

<style>

</style>
