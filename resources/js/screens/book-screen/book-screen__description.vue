<template>
    <article :class="cnBookScreen('description')">
        <div :class="cnBookScreen('description-image_top')">
            <img src="@/assets/leaf.png" />
        </div>
        <p v-html="model.book.description" :class="cnBookScreen('description-title')" />
        <div :class="cnBookScreen('description-image')">
            <img src="@/assets/leaf.png" />
        </div>
    </article>
</template>

<script setup>
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";

const model = bookModel();
</script>

<style lang="scss" scoped>
.book-screen__description {
    &-title {
        font-family: 'Book Antiqua';
        color: #222e21;
        text-decoration: none;
        font-weight: 400;
        font-size: 30px;

        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;

        width: 960px;
        // margin: 20px 100px;
    }

    &-image {
        display: flex;
        justify-content: center;

        margin-bottom: 60px;

        &_top {
            display: flex;
            justify-content: center;

            margin-top: 60px;

            img {
                width: 71px;
                height: 71px;
            }
        }

        img {
            width: 71px;
            height: 71px;

            transform: rotate(-180deg);
        }
    }

    display: flex;
    flex-direction: column;
    align-items: center;

    margin: 0 auto;
    width: 100%;
}
</style>
