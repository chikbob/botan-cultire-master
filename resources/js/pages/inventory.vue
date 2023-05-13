<template>
    <div class="container">
        <PageLayout>
            <div class="text HIGHtext">Необхідні інструменти:</div>
            <div class="body-father">
                <div class="body-picture"><img src='@/assets/sekator.png' alt="zginach.png"><text
                        class="text-mid for-mid-table">Секатор</text></div>
                <div class="body-picture"><img src='@/assets/nojici1.png' alt="zginach.png"><text
                        class="text-mid for-mid-table">Сандартні ножиці<br>для бонсай</text></div>
                <div class="body-picture"><img src='@/assets/nojici.png' alt="nojici.png"><text
                        class="text-mid for-mid-table">Ножиці
                        для<br>обрізання листя</text></div>
            </div>
            <div class="body-father">
                <div class="body-picture"><img src='@/assets/kusachki.png' alt="kusachki.png"><text
                        class="text-mid for-mid-table">Увігнуті кусачки</text></div>
                <div class="body-picture"><img src='@/assets/zginach.png' alt="zginach.png"><text
                        class="text-mid for-mid-table">Згинач
                        гілок</text></div>
                <div class="body-picture"><img src='@/assets/pasatiji.png' alt="pasatiji.png"><text
                        class="text-mid for-mid-table">Пасатижі для дроту</text></div>
            </div>
        </PageLayout>
    </div>
</template>

<script setup>
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
</script>

<style lang="scss" scoped>
.container {
    background: #d6ecbf;
}

.text,
.text-mid,
.HIGHtext {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    margin-left: 15px;
    margin-right: 15px;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
}

.text-mid {
    font-size: 24px;
}

.HIGHtext {
    font-size: 32px;
    display: flex;
    justify-content: center;
    padding: 30px 0;
}

.for-mid-table {
    background-color: #ebf6df;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 10px 70px;
}

.body-picture {
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
}

.body-picture img {
    width: 70%;
    margin-left: 70px;
}

.body-father {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}
</style>