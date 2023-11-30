<template>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card shadow sm">
                    <div class="card-body">
                        <h1 class="text-center">Login</h1>
                        <hr />
                        <form
                            action="javascript:void(0)"
                            class="row"
                            method="post"
                        >
                            <div
                                class="col-12"
                                v-if="Object.keys(validationErrors).length > 0"
                            >
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <li
                                            v-for="(
                                                value, key
                                            ) in validationErrors"
                                            :key="key"
                                        >
                                            {{ value[0] }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="email" class="font-weight-bold"
                                    >Email</label
                                >

                                <input
                                    type="text"
                                    v-model="auth.email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group col-12 my-2">
                                <label for="password" class="font-weight-bold"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    v-model="auth.password"
                                    name="password"
                                    id="password"
                                    class="form-control"
                                />

                                <!-- <vue-recaptcha
                                    v-model="auth.recaptcha"
                                    @verify="onRecaptchaVerified"
                                    :sitekey="reCAPTCHASiteKey"
                                    name="g-recaptcha-response"
                                    :loadRecaptchaScript="true"
                                ></vue-recaptcha> -->
                            </div>

                            <div class="col-12 mb-2">
                                <button
                                    type="submit"
                                    :disabled="processing"
                                    @click="login"
                                    class="btn btn-primary btn-block"
                                >
                                    {{ processing ? "Please wait" : "Login" }}
                                </button>
                            </div>
                            <div class="col-12 text-center">
                                <label
                                    >Don't have an account?
                                    <router-link :to="{ name: 'register' }"
                                        >Register Now!</router-link
                                    ></label
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { VueRecaptcha } from "vue-recaptcha";
import axios from "axios";
import { mapActions } from "vuex";

export default {
    components: {
        VueRecaptcha,
    },
    name: "login",
    data() {
        return {
            reCAPTCHASiteKey: "6Lc7i9woAAAAANEvjU3x0nteQWZZI4DQw_tfu_8D",
            auth: {
                email: "",
                password: "",
                recaptcha: null,
            },
            validationErrors: {},
            processing: false,
        };
    },
    methods: {
        // onRecaptchaVerified(response) {
        //     console.log("this.auth.recaptcha", response);
        //     this.auth.recaptcha = response;
        // },

        ...mapActions({
            signIn: "auth/login",
        }),
        async login() {
            // if (!this.auth.recaptcha) {
            //     alert("Please complete the reCAPTCHA verification.");
            //     return;
            // }

            this.processing = true;
            await axios.get("/sanctum/csrf-cookie");

            const formData = {
                email: this.auth.email,
                password: this.auth.password,
                // "g-recaptcha-response": this.auth.recaptcha,
            };
            console.log("formData", formData);

            await axios
                .post("/login", formData)
                .then(({ data }) => {
                    this.signIn();
                })
                .catch(({ response }) => {
                    console.log("auth", this.auth);
                    console.log("response", response);
                    if (response.status === 422) {
                        this.validationErrors = response.data.errors;
                    } else {
                        this.validationErrors = {};
                        // alert(response.data.message);
                    }
                })
                .finally(() => {
                    this.processing = false;
                });
        },
    },
};
</script>
