<template>
    <nav :class="cnHeader('nav')">
        <Link :class="cnHeader('nav-item')" href="/varities">Різновиди<br>бонсаю</Link>
        <Link :class="cnHeader('nav-item')" href="/appearance">Зовнішній<br>вигляд</Link>
        <Link :class="cnHeader('nav-item')" href="/care">Догляд</Link>
        <Link :class="cnHeader('nav-item')" href="/inventory">Інвентар</Link>
        <Link :class="cnHeader('nav-item')" href="/info">Цікава<br>інформація</Link>
        <Link :class="cnHeader('nav-item')" href="/books/1">Електронна<br>книга</Link>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnHeader } from './header.const';
</script>

<style lang="scss">
.header__nav {
    background: rgba(255, 255, 255, 0.55);
    width: 100%;
    height: 98px;
    display: flex;
    justify-content: space-around;
    position: relative;

    align-items: center;

    &-item {
        font-family: 'Book Antiqua';
        color: #222e21;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;

        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;

        &:nth-child(3) {
            margin-right: 30px;
        }

        &:nth-child(4) {
            margin-left: 30px;
        }
    }
}
</style>