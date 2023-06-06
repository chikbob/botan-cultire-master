<template>
    <nav :class="cnFooter('nav')">
        <div :class="cnFooter('logo')">
            <div :class="cnFooter('logo-block')">
                <img src="@/assets/main-logo.png">
                <div :class="cnFooter('logo-block_text')">Botan</div>
            </div>
        </div>

        <div :class="cnFooter('nav_demarcation')" />

        <div :class="cnFooter('nav-menu')">
            <div :class="cnFooter('nav-menu_content')">Швидкий перехід</div>
            <nav :class="cnFooter('nav-menu_block')">
                <div :class="cnFooter('nav-menu_row')">
                    <Link :class="cnFooter('nav-menu_link')" href="/varities">Різновиди бонсаю</Link>
                    <Link :class="cnFooter('nav-menu_link')" href="/inventory">Інвентар</Link>
                </div>
                <div :class="cnFooter('nav-menu_row')">
                    <Link :class="cnFooter('nav-menu_link')" href="/appearance">Зовнішній вигляд</Link>
                    <Link :class="cnFooter('nav-menu_link')" href="/info">Цікава інформація</Link>
                </div>
                <div :class="cnFooter('nav-menu_row')">
                    <Link :class="cnFooter('nav-menu_link')" href="/care">Догляд</Link>
                    <Link :class="cnFooter('nav-menu_link')" href="/books/1">Електронна книга</Link>
                </div>
            </nav>
        </div>

        <div :class="cnFooter('nav_demarcation')" />

        <div :class="cnFooter('email')">
            <div :class="cnFooter('email-block')">
                <div :class="cnFooter('email-block_text')">Наша пошта:</div>
                <div :class="cnFooter('email-block_text')">botan.company@gmail.com</div>
            </div>
        </div>

        <div :class="cnFooter('nav_demarcation')" />

        <div :class="cnFooter('link')">
            <div :class="cnFooter('link_image')">
                <a href="https://telegram.org/a/">
                    <img src="@/assets/telegram.png">
                </a>
            </div>
            <div :class="cnFooter('link_text')">Приєднуйтесь до нас у Telegram!
            </div>
        </div>
        <!-- <Link :class="cnFooter('nav-item')" href="/varities">Різновиди<br>бонсаю</Link>
        <Link :class="cnFooter('nav-item')" href="/appearance">Зовнішній<br>вигляд</Link>
        <Link :class="cnFooter('nav-item')" href="/care">Догляд</Link>
        <Link :class="cnFooter('nav-item')" href="/inventory">Інвентар</Link>
        <Link :class="cnFooter('nav-item')" href="/info">Цікава<br>інформація</Link>
        <Link :class="cnFooter('nav-item')" href="/books/1">Електронна<br>книга</Link> -->
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnFooter } from './footer.const';
</script>

<style lang="scss">
.footer__nav {
    background: rgba(255, 255, 255, 0.55);
    width: 100%;
    height: 170px;
    display: flex;
    align-items: center;
    position: relative;

    &-menu {
        width: 400px;
        display: flex;
        flex-direction: column;

        &_content {
            display: flex;
            justify-content: center;

            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 22px;

            margin-bottom: 10px;

            color: #222E21;
        }

        &_block {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        &_row {
            display: flex;
            justify-content: space-around;

            margin: 4px 0;
        }

        &_link {
            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            text-decoration: none;

            width: 200px;
            display: flex;
            justify-content: center;

            color: #222E21;
        }
    }

    &_demarcation {
        width: 100px;
        height: 0px;

        border: 1px solid #222E21;
        transform: rotate(90deg);

        margin: 40px 0;
    }

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

.footer__logo {
    display: flex;
    align-items: center;

    &-block {
        display: flex;
        align-items: center;

        & img {
            width: 78px;
            height: 88px;

            margin-left: 50px;
        }

        &_text {
            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 42px;
            margin-left: 10px;

            color: #222E21;
        }
    }
}

.footer__email {
    &-block {
        display: flex;
        align-items: center;
        flex-direction: column;

        &_text {
            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 22px;

            color: #222E21;

            display: flex;
            justify-content: flex;
        }
    }
}

.footer__link {
    display: flex;
    justify-content: center;
    align-items: center;

    margin-right: 50px;

    &_image {
        & img {
            width: 43px;
            height: 43px;

            margin-right: 15px;
        }
    }

    &_text {
        font-family: 'Book Antiqua';
        font-style: normal;
        font-weight: 400;
        font-size: 22px;

        color: #222E21;
    }

}
</style>