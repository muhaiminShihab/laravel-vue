<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LaravelVue</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><router-link to="/registration" class="nav-link">Create Account</router-link></li>
                        <li class="nav-item"><router-link to="/" class="nav-link">Login</router-link></li>
                        <li class="nav-item"><router-link to="/reset-password" class="nav-link">Reset Password</router-link></li>
                        <li class="nav-item"><router-link to="/new-password" class="nav-link">New Password</router-link></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <router-view v-slot="{ Component }">
            <transition name="fade">
                <component :is="Component" :key="$route.path" />
            </transition>
        </router-view> -->

        <router-view></router-view>
    </div>
</template>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity .4s;
}
.fade-enter, .fade-leave-to {
    opacity: 0;
}
</style>
