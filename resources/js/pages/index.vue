<template>
    <div class="body__container">
        <PageLayout>
            <div class="main-buttons">
                <div class="flexdirection__container">
                    <div class="text-for-buttons">--- Дізнатися більше ---</div>
                    <div class="links__container">
                        <div class="window__size left__margin">
                            <router-link to="/varieties" class="navigate">
                                <img class="buttons-for-navigate" src='@/assets/plants.png'>
                            </router-link>
                            <text class="text-outside-buttons">Різновиди<br>бонсаю</text>
                        </div>
                        <div class="window__size main__margin">
                            <router-link to="/ebook" class="navigate">
                                <img class="buttons-for-navigate" src='@/assets/ebook.png'>
                            </router-link>
                            <text class="text-outside-buttons">Електронна<br>книга</text>
                        </div>
                        <div class="window__size right__margin">
                            <router-link to="/care" class="navigate">
                                <img class="buttons-for-navigate" src='@/assets/plant.png'>
                            </router-link>
                            <text class="text-outside-buttons">Догляд</text>
                        </div>
                    </div>
                    <div class="links__container">
                        <div class="window__size left__margin">
                            <router-link to="/inventory" class="navigate">
                                <img class="buttons-for-navigate" src='@/assets/shovel-and-rake.png'>
                            </router-link>
                            <text class="text-outside-buttons">Інвентар</text>
                        </div>
                        <div class="window__size main__margin">
                            <router-link to="/appearance" class="navigate">
                                <img class="buttons-for-navigate" src='@/assets/sauna.png'>
                            </router-link>
                            <text class="text-outside-buttons">Зовнішній<br>вигляд</text>
                        </div>
                        <div class="window__size right__margin">
                            <router-link to="/info" class="navigate">
                                <img class="buttons-for-navigate" src='@/assets/book.png'>
                            </router-link>
                            <text class="text-outside-buttons">Цікава<br>інформація</text>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main">
                <text class="maintext">УСЕ ПРО БОНСАЙ<br>І НЕ ТІЛЬКИ</text>
            </div>
            <div class="main-text">
                <text class="LOWtext">"Бонсай - не гонка, але й<br> не пункт призначення.<br>Це нескінченна подорож."</text>
            </div>
        </PageLayout>
    </div>
</template>

<script setup>
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
</script>

<style scoped>
.body__container {
    background: url('@/assets/background-main.png');

    width: 100%;
    height: 100%;

    background-size: 100% 100%;
    background-repeat: no-repeat;
}

.main {
    margin-top: 200px;
    margin-left: 200px;
    background: rgba(255, 255, 255, 0.55);
    width: 431px;
    padding-top: 30px;
    padding-left: 20px;
    padding-right: 20px;
    height: 130px;
    display: flex;
}

.main-text {
    margin-left: 420px;
    margin-top: -20px;
    padding-top: 10px;
    padding-bottom: 30px;
    padding-right: 7px;
    background: rgba(255, 255, 255, 0.55);
    width: 264px;
    display: flex;
}


.main-buttons {
    margin: 100px 130px 130px 0;
    background: rgba(255, 255, 255, 0.55);
    float: right;

    padding-bottom: 10px;
}

.text,
.text-for-buttons,
.text-outside-buttons,
.maintext,
.LOWtext {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;

    height: 3rem;

    display: flex;
    margin: auto;
}

.maintext {
    font-size: 42px;
    text-align: center;
    padding-bottom: 100px;
}

.text-outside-buttons {
    align-content: center;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;

    margin: 10px 0;

    text-align: center;
}

.buttons-for-navigate {
    width: 100px;
    display: flex;
}

.text-for-buttons {
    display: flex;
    justify-content: center;
    text-align: center;
    font-size: 26px;
    padding-bottom: 30px;
    padding-top: 25px;
}

.flexdirection__container {
    display: flex;
    flex-direction: column;
}

.links__container {
    display: flex;
    flex-direction: row;

    justify-content: space-around;
}

.navigate {
    display: flex;
    justify-content: center;
}

.main__margin {
    margin: 0 2rem;
}

.left__margin {
    margin-left: 2rem;
}

.right__margin {
    margin-right: 2rem;
}

.window__size {
    width: 140px;
}
</style>
