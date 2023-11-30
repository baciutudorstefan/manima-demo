<template>
    <div>
        <main class="mt-3">
            <router-link :to="{ name: 'dashboard' }" class="nav-link"
                >Home <span class="sr-only">(current)</span></router-link
            >
            <a class="dropdown-item" href="javascript:void(0)" @click="logout"
                >Logout - {{ user.name }}</a
            >
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
    name: "default-layout",
    data() {
        return {
            user: this.$store.state.auth.user,
        };
    },
    methods: {
        ...mapActions({
            signOut: "auth/logout",
        }),
        async logout() {
            await axios.post("/logout").then(({ data }) => {
                this.signOut();
                this.$router.push({ name: "login" });
            });
        },
    },
};
</script>
