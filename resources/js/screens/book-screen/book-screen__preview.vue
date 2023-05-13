<template>
    <section style="background-size: 100%; background-repeat: no-repeat; background-position: 50% 60%;" :class="cnBookScreen('preview')">
        <div :class="cnBookScreen('preview-title')">
            {{ model.book.name }}
        </div>
    </section>
</template>

<script setup>
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";

const model = bookModel();
</script>

<style scoped>
.book-screen__preview {
    background: url('https://images.unsplash.com/photo-1542543237-95b74b733938?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80');
}

.book-screen__preview-title {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-weight: bold;
    font-size: 36px;

    width: 100%;

    display: flex;
    justify-content: center;
    text-align: center;
    align-items: center;

    padding: 100px 0;

    object-fit: cover;

    text-shadow: 0 0 7px #d6ecbf,
        0 0 10px #d6ecbf,
        0 0 21px #d6ecbf,
        0 0 42px #d6ecbf;
}
</style>
