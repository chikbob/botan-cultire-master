<template>
    <section :class="cnBookScreen('images')">
        <img :class="cnBookScreen('images-block')" v-for="screenshot in model.book.screenshots" :key="screenshot.id"
            :src="screenshot.src" alt="image_preview" />
    </section>
</template>

<script setup>
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>
.book-screen__images {
    display: grid;
    grid-template-columns: repeat(2, 400px);
    grid-gap: 20px;
    justify-content: center;
    background: #accc87;

    padding: 100px 0;
}

.book-screen__images-block {
    width: 100%;
    height: 100%;

    object-fit: fill;
}
</style>
