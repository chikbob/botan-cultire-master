<template>
    <article :class="cnBookScreen('info')">
        <div :class="cnBookScreen('info-book')">
            <div :class="cnBookScreen('info-book_block')">
                <div :class="cnBookScreen('info-book_block-box')">
                    <ul :class="cnBookScreen('info-book_block-text')" v-for="info in InfoObject" :key="info.id">
                        <li>{{ (info.info).toString() }}</li>
                    </ul>
                </div>
            </div>
            <div :class="cnBookScreen('info-book_block-image')">
                <img :src="model.book.screenshot" />
            </div>
        </div>
    </article>
</template>

<script setup>
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";

const model = bookModel();

let InfoObject = model.book.infos

console.log(model.book.infos)
</script>

<style lang="scss" scoped>
.book-screen__info {
    &-book {
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
        align-items: center;

        &-box {
            display: flex;
            align-items: center;
        }

        &_block {
            width: 500px;
            height: 500px;

            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: flex-start;

            margin: 0 70px 0 170px;

            background: rgba(95, 156, 70, 0.6);

            padding: 30px;

            &-image img {
                width: 700px;
                height: 700px;
            }

            &-text {
                font-family: 'Book Antiqua';
                font-style: normal;
                font-weight: 400;
                font-size: 30px;

                color: #FFFFFF;

                margin: 0;

                &:first-child {
                    padding-top: 20px;
                }

                &:last-child {
                    padding-bottom: 20px;
                }

                padding-top: 20px;
                padding-bottom: 20px;
            }
        }

    }
}
</style>