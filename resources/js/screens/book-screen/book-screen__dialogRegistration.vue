<template>
    <div :class="cnBookScreen('dialogRegistration')" v-show="open">
        <div :class="cnBookScreen('dialogRegistration-content')">
            <slot></slot>
        </div>
    </div>
</template>

<script setup>
import { cnBookScreen } from "./book-screen.const.js";
import { bookModel } from "./book-screen.model.js";

const model = bookModel();

const props = defineProps({
    open: Boolean,
    required: Boolean,
})

console.log(props.open)

function hideDialog(open) {
    open = false
    console.log(open)
    return open
}
</script>

<style lang="scss" scoped>
.book-screen__dialogRegistration {
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    position: fixed;
    display: flex;
    z-index: 100;

    &-content {
        margin: auto;
        background: #EDF6E2;
        border-radius: 15px;
        min-width: 700px;
        min-height: 400px;

        z-index: 100;

        display: flex;
        flex-direction: column;
    }
}
</style>