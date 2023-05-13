<template>
    <section :class="cnBookScreen('download')">
        <img :class="cnBookScreen('download-poster')" :src="model.book.poster" :alt="model.book.name" />
        <a :class="cnBookScreen('download-btn')" target="_blank" :href="model.book.url">
            Скачать
        </a>
    </section>
</template>

<script setup>
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>
.book-screen__download {
    display: flex;
    grid-gap: 20px;
    justify-content: center;

    align-items: center;

    padding: 50px 0;
}

.book-screen__download-poster {
    height: fit-content;
    width: fit-content;
}

.book-screen__download-btn {
    border-radius: 4px;
    border: none;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;
    padding: 10px 21px;

    height: fit-content;

    background-color: #70CF84;
    color: #fff;
}
</style>
