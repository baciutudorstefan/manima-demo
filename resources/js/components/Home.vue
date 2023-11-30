<template>
    <div class="container-fluid g-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-manima py-0">
            <div class="container-fluid mx-5 px-3">
                <img :src="logo" alt="manima" class="logo-manima" />

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <router-link
                                :to="{ name: 'register' }"
                                class="nav-link d-flex align-items-center px-5"
                                aria-current="page"
                                href="#"
                                >About</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link
                                :to="{ name: 'register' }"
                                class="nav-link d-flex align-items-center px-5"
                                href="#"
                                >Features</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link
                                :to="{ name: 'register' }"
                                class="nav-link d-flex align-items-center px-5"
                                href="#"
                                >Contact</router-link
                            >
                        </li>
                        <li class="nav-item align-items-center">
                            <router-link
                                :to="{ name: 'register' }"
                                class="nav-link d-flex align-items-center px-5 active"
                            >
                                Get started for free!
                            </router-link>
                        </li>
                    </ul>
                    <form class="d-flex"></form>
                </div>
            </div>
        </nav>
        <div class="container-fluid"><About /></div>
    </div>
</template>

<script>
import About from "./About.vue";
import manimaLogo from "../../assests/logo-manima.png";

export default {
    data() {
        return {
            logo: manimaLogo,
        };
    },
    components: {
        About,
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>

<style>
.logo-manima {
    height: 32px;
    width: 154px;
}
.navbar-brand {
    background: black;
    height: 80px;
    width: 80px;
}
.nav-link {
    font-size: 16px;
    width: auto;
}
.navbar-nav {
    height: 80px;
}
ul li a {
    height: 80px;
}
.active {
    background: black;
    color: white !important;
}
</style>
<!-- <router-link :to="{ name: 'register' }">Register Now!</router-link> -->
