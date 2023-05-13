<template>
    <div class="container">
        <PageLayout>
            <div class="mid__appearance">
                <text class="HIGHtext">Поетапний посібник з обрізання бонсаю</text>

                <div class="mid__appearance-child-top">
                    <div class="for-mid__appearance-table">
                        <img src='@/assets/part1.png' alt="part1.png">
                        <text class="TOPtext">Декілька довгих пагонів дерева необхідно обрізати, бо вони виросли за периметр
                            крони дерева</text>
                        <text class="NUMBERtext">1</text>
                    </div>
                </div>

                <div class="mid__appearance-child-top">
                    <div class="for-mid__appearance-table">
                        <img src='@/assets/part2.png' alt="part2.png">
                        <text class="TOPtext">Обрізаємо довгі пагони бонсайними пожицями
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</text>
                        <text class="NUMBERtext">2</text>
                    </div>
                </div>

                <div class="mid__appearance-child-top">
                    <div class="for-mid__appearance-table">
                        <img src='@/assets/part3.png' alt="part3.png">
                        <text class="TOPtext">Результат обрізки, у якій було видалено приблизно 20%
                            листя&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</text>
                        <text class="NUMBERtext">3</text>
                    </div>
                </div>

                <div class="mid__appearance-child-top">
                    <div class="for-mid__appearance-table">
                        <img src='@/assets/part4.png' alt="part4.png">
                        <text class="TOPtext">За допомогою увігнутих кусачек, обрізаємо крупні гілки: спочатку лише частину,
                            щоб підібратися до її основи</text>
                        <text class="NUMBERtext">4</text>
                    </div>
                </div>
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
.HIGHtext,
.TOPtext,
.NUMBERtext {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    margin-left: 15px;
    margin-right: 15px;
    font-weight: bold;
    font-size: 18px;
}

.HIGHtext {
    font-size: 32px;
    display: flex;
    justify-content: center;
}

.TOPtext {
    font-size: 22px;
    margin-left: 30px;
    padding-bottom: 10px;
    display: flex;
    align-items: center;
    vertical-align: middle;
}

.NUMBERtext {
    font-size: 36px;
    margin: auto;
    margin-right: 30px;
    display: flex;
    align-items: center;
}

.mid__appearance {
    margin: 80px 220px;
}

.mid__appearance-child-top {
    background-color: #eff7e5;
    margin: 40px 60px;
    display: flex;
    justify-content: space-between;
}

.mid__appearance-child-top img {
    width: 100px;
    margin-left: 10px;
}

.for-mid__appearance-table {
    display: flex;
    align-content: space-between;
}
</style>