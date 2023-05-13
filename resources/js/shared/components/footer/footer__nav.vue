<template>
    <nav :class="cnFooter('nav')">
        <Link :class="cnFooter('nav-item')" href="/varities">Різновиди<br>бонсаю</Link>
        <Link :class="cnFooter('nav-item')" href="/appearance">Зовнішній<br>вигляд</Link>
        <Link :class="cnFooter('nav-item')" href="/care">Догляд</Link>
        <Link :class="cnFooter('nav-item')" href="/inventory">Інвентар</Link>
        <Link :class="cnFooter('nav-item')" href="/info">Цікава<br>інформація</Link>
        <Link :class="cnFooter('nav-item')" href="/books/1">Електронна<br>книга</Link>
    </nav>
    <div :class="cnFooter('contacts')">
        <text :class="cnFooter('contacts-tel')">Для співробітництва: +380-98-641-44-20 / email:
            sadivnikcompany@gmail.com</text>
        <div :class="cnFooter('links')">
            <a :class="cnFooter('links-item')" href="https://web.telegram.org"><img src="@/assets/instagram.png"
                    style="width:50px; height:50px"></a>
            <a :class="cnFooter('links-item')" href="https://www.instagram.com"><img src="@/assets/telegram.png"
                    style="width:50px; height:50px"></a>
            <a :class="cnFooter('links-item')" href="https://twitter.com"><img src="@/assets/twitter.png"
                    style="width:50px; height:50px"></a>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnFooter } from './footer.const';
</script>

<style lang="scss">
.footer__nav {
    background: rgba(255, 255, 255, 0.55);
    width: 100%;
    height: 98px;
    display: flex;
    justify-content: space-around;
    position: relative;

    &-item {
        font-family: 'Book Antiqua';
        color: #222e21;
        text-decoration: none;
        margin-left: 15px;
        margin-right: 15px;
        font-weight: bold;
        font-size: 18px;

        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;
    }
}

.footer__contacts {
    background: rgba(255, 255, 255, 0.55);
    width: 100%;

    display: flex;
    justify-content: space-around;
    align-items: center;

    padding: 10px 0;

    &-tel {
        align-items: center;

        font-family: 'Book Antiqua';
        color: #222e21;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;

        height: 3rem;

        display: flex;
        justify-content: space-around;
    }
}

.footer__links {
    &-item {
        &:nth-child(2) {
            margin-left: 20px;
        }

        &:nth-child(3) {
            margin-left: 20px;
        }
    }
}

.text {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    margin-left: 15px;
    margin-right: 15px;
    font-weight: bold;
    font-size: 18px;
}</style>