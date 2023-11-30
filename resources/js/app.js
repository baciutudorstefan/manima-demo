import "./bootstrap";
import "../sass/app.scss";
import "@fortawesome/fontawesome-free/css/all.css";
import "bootstrap/dist/css/bootstrap.min.css";
import Router from "@/router";
import store from "@/store";

import { createApp } from "vue/dist/vue.esm-bundler";

const app = createApp({});
app.use(Router);
app.use(store);
app.mount("#app");
