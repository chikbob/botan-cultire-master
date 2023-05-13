<template>
    <Link
        :class="cnHeader('logo')"
        href="/"
    >
        <img :class="cnHeader('logo')" src="@/assets/main-logo.png">
    </Link>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import {cnHeader} from "@/shared/components/header/header.const.js";
</script>

<style lang="scss">
.header__logo {
    position: absolute;

    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);

    width: 90px;
    height: 98px;
}
</style>
