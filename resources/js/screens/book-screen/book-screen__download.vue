<template>
    <section :class="cnBookScreen('download')">
        <div :class="cnBookScreen('download-block')">
            <div :class="cnBookScreen('download-text')">
                {{ model.book.name }}
            </div>
            <button @click="isOpen = true" :class="cnBookScreen('download-btn')">
                Завантажити
            </button>
            <form @submit.prevent="store">
                <BookScreenDialogRegistration :open="isOpen" @close="isOpen = !isOpen">
                    <div @click="isOpen = false" :class="cnBookScreen('dialogRegistration-dialog_exit')">X</div>
                    <div :class="cnBookScreen('dialogRegistration-dialog_content')">Заповніть дані, щоб отримати електронну
                        копію
                    </div>
                    <div :class="cnBookScreen('dialogRegistration-input_text')">Ім’я</div>
                    <input v-model="form.name" :class="cnBookScreen('dialogRegistration-input')" required />
                    <div :class="cnBookScreen('dialogRegistration-input_text')">Номер телефону</div>
                    <input v-model="form.telephone" :class="cnBookScreen('dialogRegistration-input')" required />
                    <div :class="cnBookScreen('dialogRegistration-input_text')">Електронна пошта</div>
                    <input v-model="form.email" :class="cnBookScreen('dialogRegistration-input')" required />

                    <button @click="isClosed()" :class="cnBookScreen('dialogRegistration-btn')">Завантажити</button>
                </BookScreenDialogRegistration>
            </form>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue'
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";
import BookScreenDialogRegistration from './book-screen__dialogRegistration.vue'
import { useForm } from '@inertiajs/vue3';

const model = bookModel();

const isOpen = ref(false)

const form = useForm({
    name: null,
    telephone: null,
    email: null
});

function store() {
    form.post(route('Visitor/index'))
}

function isClosed() {
    isOpen = false
}

</script>

<style lang="scss" scoped>
.book-screen__dialogRegistration {
    &-dialog {
        &_exit {
            display: flex;
            justify-content: flex-end;

            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;

            margin: 0.5rem auto 20px 96%;

            width: fit-content;
            text-decoration: none;
            cursor: pointer;

            color: #8FBC76;

            padding: 0.3rem;

            border-radius: 2rem;

            &::selection {
                background: transparent;
            }

            &::-moz-selection {
                background: transparent;
            }

        }

        &_content {
            display: flex;
            justify-content: center;

            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            text-align: center;

            width: 60%;

            margin: 10px auto 20px;

            color: #222E21;
        }
    }

    &-btn {
        width: 200px;
        height: 50px;

        font-family: 'Book Antiqua';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 48px;
        text-align: center;
        border-radius: 4px;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        padding: 0 25px;

        border-radius: 50px;

        margin: 30px auto 60px;

        height: fit-content;

        background-color: #8FBC76;
        color: #fff;

        cursor: pointer;
    }

    &-input {
        width: 300px;
        height: 30px;

        margin: auto;

        &_text {
            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            text-align: flex-start;

            margin: 10px auto;

            width: 300px;
            color: #222E21;
        }
    }
}

.book-screen__download {
    display: flex;
    justify-content: center;
    align-items: center;

    margin-top: 2rem;
    margin-bottom: 60px;

    &-block {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        width: 540px;
        height: 260px;

        border: 7px #8eba75 solid;
    }

    &-text {
        font-family: 'Book Antiqua';
        font-style: normal;
        font-weight: 400;
        font-size: 30px;
        text-align: center;

        width: 80%;
        margin: 0 auto 35px;

        color: #222E21;
    }

    &-btn {
        width: 200px;
        height: 50px;

        font-family: 'Book Antiqua';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 48px;
        text-align: center;
        border-radius: 4px;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        padding: 10px 25px;

        border-radius: 50px;

        height: fit-content;

        background-color: #8FBC76;
        color: #fff;
    }
}
</style>
