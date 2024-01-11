<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">
                            You are logged in as <b>{{ user.email }}</b> You are
                            logged in as <b>{{ user.id }}</b>
                        </p>
                    </div>
                    <div>
                        <input v-model="name" placeholder="Name" />
                        <input v-model="email" placeholder="Email" />
                        <input v-model="password" placeholder="Password" />
                        <input
                            v-model="passwordConfirmation"
                            placeholder="Password Confirmation"
                        />

                        <input v-model="color" placeholder="Color" />
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"
                                    >Example file input</label
                                >
                                <input
                                    type="file"
                                    class="form-control-file"
                                    id="exampleFormControlFile1"
                                    @change="handleImageChange"
                                />
                            </div>
                        </form>
                        <!-- Add other form fields as needed -->
                        <button @click="updateUser">Update User</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="background: #f9f9f9">
                <div class="row">
                    <img src="#" alt="avatar" class="col-4" />
                    <p class="h4 col-4">{{ user.name }}</p>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="d-grid gap-2 d-md-block">
                            <button
                                class="btn btn-dark col-7 text-start ps-3 pt-2 pb-2 mt-4"
                                type="button"
                            >
                                <i class="fa-regular fa-pen-to-square me-2"></i
                                >Edit card details
                            </button>
                            <button
                                class="btn btn-light col-7 text-start ps-3 border border-1 pt-2 pb-2 mt-4"
                                type="button"
                            >
                                <i class="fa-solid fa-qrcode me-2"></i> Generate
                                QR code
                            </button>
                            <button
                                class="btn btn-light col-7 text-start ps-3 border border-1 pt-2 pb-2 mt-4"
                                type="button"
                            >
                                <i class="fa-regular fa-star me-2"></i>Request
                                feedback link
                            </button>
                            <button
                                class="btn btn-light col-7 text-start ps-3 border border-1 pt-2 pb-2 mt-4"
                                type="button"
                            >
                                <i class="fa-solid fa-certificate me-2"></i
                                >Apply for verification
                            </button>
                            <button
                                class="btn btn-light col-7 text-start ps-3 border border-1 pt-2 pb-2 mt-4"
                                type="button"
                            >
                                <i class="fa-solid fa-chart-line me-2"></i
                                >Analytics
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">Column</div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "dashboard",
    data() {
        return {
            user: this.$store.state.auth.user,
            name: "",
            email: "",
            password: "",
            passwordConfirmation: "",
            image: null, // Use null instead of an empty string
            color: "",
        };
    },
    methods: {
        async updateUser() {
            console.log(this.name, this.email, this.password);

            try {
                const requestData = {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.passwordConfirmation,
                    image: this.image, // Assuming 'image' is a file object
                    color: this.color,
                };

                const response = await axios.put(
                    `/api/users/${this.user.id}`,
                    requestData
                );

                console.log(response.data);

                // Handle success, update your UI or show a success message
            } catch (error) {
                console.error("Error updating user:", error.response.data);

                // Handle errors, show an error message or log the error
            }
        },
        handleImageChange(event) {
            // Set the 'image' data property when the file input changes
            this.image = event.target.files[0];
        },
    },
};
</script>
