<template>
    <div class="container-fluid about-container">
        <div class="container about-paddingTop" style="background: transparent">
            <div class="row justify-content-center">
                <div class="col-2 align-self-center">
                    <p class="fw-lighter presents text-center">
                        Obelik presents
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <p class="fw-bold text-center about-title">
                        The virtual business card for uncluttered people
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mx-auto text-center">
                <div class="col-4">
                    <button type="button" class="btn btn-dark py-0 about-btns">
                        <router-link
                            :to="{ name: 'register' }"
                            class="about-route"
                        >
                            Get started for free!
                        </router-link>
                    </button>

                    <button
                        type="button"
                        class="btn btn-outline-dark about-btns"
                    >
                        Learn more!
                    </button>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-4 diagram"></div>
            </div>
        </div>
        <div
            class="row mx-auto justify-content-start"
            style="margin-top: 140px"
        >
            <div class="col-5">
                <p class="fs-1 fw-bolder">
                    What is
                    <span style="border-bottom: 1px solid black">MANIMA</span>?
                </p>
            </div>
            <div class="col-7">
                <p style="font-size: 48px">
                    The app you don’t have to be active on.
                </p>
                <p class="fs-2 fw-lighter mt-5">
                    <span class="fw-bold">MANIMA</span> is a digital business
                    card app that <br />centralizes all of your contact
                    information in one <br />place, making it easy to share with
                    anyone you<br />want to connect. <br /><br />Our app is
                    perfect for professionals who struggle<br />
                    to manage multiple platforms, those who want to
                    <br />minimize their digital footprint, and those who
                    <br />want to centralize their online presence.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mx-auto solutions">
            <div class="col-6 improves">
                <p class="fs-1 fw-lighter text-center pb-5">Your challenges</p>
                <ul class="list-group manima-list">
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-xmark"></i> Too much clutter
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-xmark"></i> Many platforms to
                        manage daily
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-xmark"></i> Difficulty in keeping
                        up with social platforms updates
                    </li>

                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-xmark"></i> You don’t have any
                        physical business cards
                    </li>
                </ul>
            </div>

            <div class="col-6 improves">
                <p class="fs-1 fw-lighter text-center pb-5">Our solution</p>
                <ul class="list-group manima-list">
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Uncluttered
                        display of your information
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Upload
                        necessary documents
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Make it yours
                        through simple customisation
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> We don’t sell
                        your data
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Free!
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mx-auto readyToBuild">
            <div class="col-12">
                <p class="fs-1 fw-bold">
                    Ready to build your virtual business card?
                </p>
                <p class="fs-2 fw-lighter">
                    Join lots of users that wish to unclutter their lives and
                    limit their online fingerprint.
                </p>
                <button
                    type="button"
                    class="btn btn-light"
                    style="padding: 24px 36px"
                >
                    <router-link
                        :to="{ name: 'register' }"
                        class="about-route readyToBuild_btns"
                    >
                        Get started for free!
                    </router-link>
                </button>
            </div>
        </div>

        <div class="row justify-content-center mx-auto solutions">
            <div class="col-6 improves">
                <p class="fs-1 fw-bolder text-center pb-5">
                    Plans for the near future
                </p>
            </div>

            <div class="col-6 improves">
                <ul class="list-group manima-list">
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Mobile app with
                        NFC support
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Companies /
                        Teams
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Analytics
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> Multilingual
                        support
                    </li>
                    <li class="pt-3 pb-3 fs-4 fw-light">
                        <i class="fa-solid fa-circle-check"></i> More
                        customisation options
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
    data() {
        return {};
    },
    methods: {},
};
</script>

<style>
.about-container {
    background: #f9f9f9;
}
.presents {
    color: #9b9c9d;
}
.about-title {
    font-size: 56px;
}
.about-paddingTop {
    padding-top: 140px;
}

.learn-more {
    border: 1px solid black;
}

.about-btns {
    height: 72px;
    padding-left: 32px;
    padding-right: 32px;
}
#app
    > div
    > div
    > div
    > div
    > div:nth-child(3)
    > div
    > button.btn.btn-dark.py-0.about-btns {
    margin-right: 12px;
}
#app
    > div
    > div
    > div
    > div
    > div:nth-child(3)
    > div
    > button.btn.learn-more.py-0.about-btns {
    margin-left: 12px;
}
.readyToBuild_btns {
    color: #000 !important;
}
.diagram {
    background: #9b9c9d;
    border-radius: 25px;
    width: 918px;
    height: 593px;
    margin-top: 96px;
}
.about-route {
    color: white;
    text-decoration: none;
}
.solutions {
    background: #fff !important;
    border-radius: 16px;
    padding-top: 64px;
    padding-bottom: 64px;
    margin-left: 64px !important;
    margin-right: 64px !important;
    margin-top: 140px;
}
.manima-list {
    list-style-type: none;
}
.improves {
    padding-left: 64px;
    padding-right: 64px;
}
.readyToBuild {
    background: #000;
    border-radius: 16px;
    color: #fff;
    margin-top: 140px;
    margin-left: 64px !important;
    margin-right: 64px !important;
    padding: 64px;
}
</style>
