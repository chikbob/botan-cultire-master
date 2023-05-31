<template>
    <section :class="cnBookScreen('download')">
        <div :class="cnBookScreen('download-block')">
            <div :class="cnBookScreen('download-text')">
                {{ model.book.name }}
            </div>
            <button @click="isOpen = true" :class="cnBookScreen('download-btn')">
                <div :class="cnBookScreen('download-btn_text')">
                    Завантажити
                </div>
            </button>
            <form @submit.prevent="model.submit">
                <BookScreenDialogRegistration :open="isOpen" @close="isOpen = !isOpen">
                    <div @click="isOpen = false" :class="cnBookScreen('dialogRegistration-dialog_exit')">X</div>
                    <div :class="cnBookScreen('dialogRegistration-dialog_content')">Заповніть дані, щоб отримати електронну
                        копію
                    </div>
                    <div :class="cnBookScreen('dialogRegistration-input_text')">Ім’я</div>
                    <input placeholder="Ім'я" v-model="form.name" :class="cnBookScreen('dialogRegistration-input')"
                        required />
                    <div :class="cnBookScreen('dialogRegistration-input_text')">Номер телефону</div>
                    <input placeholder="+38 (000) 000-00-00" v-model="form.telephone"
                        :class="cnBookScreen('dialogRegistration-input')" required />
                    <div :class="cnBookScreen('dialogRegistration-input_text')">Електронна пошта</div>
                    <input placeholder="Електронна пошта" v-model="form.email"
                        :class="cnBookScreen('dialogRegistration-input')" required />
                    <button @click="store(isOpen = false)" :class="cnBookScreen('dialogRegistration-btn')" type="submit"><a
                            :href="file" :class="cnBookScreen('dialogRegistration-btn_text')">Завантажити</a></button>
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
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

const model = bookModel();

const isOpen = ref(false)

let file = ref(null)

const form = useForm({
    name: null,
    telephone: null,
    email: null
});

function store() {
    console.log(form)
    if (form.name == null || form.telephone == null || form.email == null || form.name.length == 0 || form.telephone.length == 0 || form.email.length == 0 || form.name == ' ' || form.telephone == ' ' || form.email == ' ') {
        Swal.fire({
            icon: 'error',
            title: 'Упс...',
            text: 'Введіть дані!',
        })
    }
    else {
        file = model.book.url
        console.log('aboba')
        form.post('/visitor')
    }
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
        text-transform: capitalize;

        padding: 5px 40px;

        border-radius: 50px;

        margin: 40px auto 60px;

        height: fit-content;

        background-color: #8FBC76;


        cursor: pointer;

        &_text {
            color: #fff;
            text-decoration: none;
        }
    }

    &-input {
        width: 450px;
        height: 30px;

        margin: auto;

        font-family: 'Book Antiqua';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        text-align: flex-start;
        color: #222E21;

        &_text {
            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            text-align: flex-start;

            margin: 10px auto;

            width: 450px;
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
        line-height: 28px;
        text-align: center;
        border: none;
        text-transform: capitalize;

        padding: 5px 40px;

        height: fit-content;

        background-color: #8FBC76;


        cursor: pointer;

        width: 200px;
        height: 50px;
        border-radius: 50px;

        height: fit-content;

        background-color: #8FBC76;

        &_text {
            font-family: 'Book Antiqua';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 48px;
            text-align: center;
            text-decoration: none;
            text-transform: capitalize;

            color: #fff;
            text-decoration: none;
        }
    }
}
</style>
