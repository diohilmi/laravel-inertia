<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <Link class="navbar-brand" href="/">INERTIA.JS AUTH</Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul v-if="auth.user" class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <Link class="nav-link" href="/admin/dashboard">DASHBOARD</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/logout" method="POST">LOGOUT</Link>
                        </li>
                    </ul>
                    <ul v-else class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <Link class="nav-link" href="/login">LOGIN</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/register">REGISTER</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container mt-5">
            <slot />
        </main>
    </div>
</template>

<script>

    //import Link dari inertia
    import { Link } from '@inertiajs/inertia-vue3';

    export default {

        //register Link di component
        components: {
            Link
        },

        props: {
            auth: Object
        }

    }
</script>

<style scoped>
    .mt-5 {
        margin-top: 100px !important;
    }
</style>