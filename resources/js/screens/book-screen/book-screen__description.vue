<template>
    <article :class="cnBookScreen('description')">
        <p v-html="model.book.description" :class="cnBookScreen('description-title')"/>
    </article>
</template>

<script setup>
import {cnBookScreen} from "./book-screen.const.js";
import {bookModel} from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>
    .book-screen__description {
        margin: 0 auto;
        max-width: 550px;
        width: 100%;
    }

    .book-screen__description-title {
        font-family: 'Book Antiqua';
        color: #222e21;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;

        display: flex;
        justify-content: center;
        text-align: left;
        align-items: center;

        margin: 40px 0;
    }
</style>
