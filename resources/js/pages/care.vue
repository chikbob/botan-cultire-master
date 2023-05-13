<template>
    <div class="container">
        <PageLayout>
            <div class="mid">
                <div class="mid-content">
                    <text class="HIGHtext margin-top">Полив бонсаю:</text>

                    <div class="mid-child-top">
                        <img src='@/assets/watering-can.png' alt="watering-can.png">
                        <div class="for-mid-table">
                            <div>
                                <div text class="TOPtext"><text>Поливати дерева тоді, коли ґрунт стає сухуватим</text>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mid-child">
                        <div class="for-mid-table">
                            <table>
                                <div>
                                    <div text class="TOPtext-exception"><text>Використовувати правильно складену
                                            суміш</text>
                                    </div>
                                </div>
                            </table>
                        </div>
                        <img src='@/assets/dig.png' alt="water.png">
                    </div>

                    <div class="mid-child-last">
                        <img src='@/assets/calendar.png' alt="calendar.png">
                        <div class="for-mid-table">
                            <table>
                                <div>
                                    <div text class="TOPtext"><text>Не поливати за розкладом, бо він не має значення </text>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>

                    <div class="mid-child">
                        <div class="for-mid-table">
                            <table>
                                <div>
                                    <div text class="TOPtext-exception"><text>Доба не важлива для поливу</text></div>
                                </div>
                            </table>
                        </div>
                        <img src='@/assets/day-and-night.png' alt="day-and-night.png">
                    </div>
                </div>
            </div>
        </PageLayout>
    </div>
</template>

<script setup>
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue'
</script>

<style lang="scss" scoped>
.container {
    background: #d6ecbf;
}

body {
    border: 0;
    margin: 0;
}

.row {
    background: rgba(255, 255, 255, 0.55);
    width: 100%;
    height: 98px;
    display: flex;
    justify-content: space-around;
}

.row1 {
    margin: auto;
    display: flex;
    justify-content: center;
    text-align: center;
}

.row2 {
    margin: auto;
    display: flex;
    justify-content: center;
    text-align: center;
}

.row3 {
    margin: auto;
    display: flex;
    justify-content: center;
    text-align: center;
}

.text,
.HIGHtext,
.TOPtext,
.TOPtext-exception,
.text-exception {
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

.TOPtext,
.TOPtext-exception {
    font-size: 26px;
    padding-bottom: 10px;
}

.TOPtext-exception,
.text-exception {
    text-align: end;
}

.mid {
    margin: 80px 220px;
    background-color: rgba(235, 247, 223, 1);
    width: 70%;
    height: 100%;
    display: flex;

}

.mid-content {
    padding-bottom: 60px;
}

.margin-top {
    padding-top: 40px;
}

.mid-child-top,
.mid-child-last {
    background-color: #f7fbf2;
    display: flex;
    margin: 40px 110px;
}

.mid-child-top img,
.mid-child-last img {
    width: 100px;
    display: flex;
    margin: 10px 30px 10px 10px;
}

.for-mid-table {
    display: flex;
    align-items: center;
    margin-left: 20px;
}

.mid-child {
    background-color: #f7fbf2;
    display: flex;
    justify-content: flex-end;
    margin: 40px 110px;
}

.mid-child img {
    width: 100px;
    display: flex;
    margin: 10px 10px 10px 30px;
}

.buttons-for-footer,
.buttons-for-footer1 {
    padding-top: 40px;
    background: rgba(255, 255, 255, 0.55);
    width: 100%;
    display: flex;
    justify-content: space-around;
}

.buttons-for-footer1 {
    padding-bottom: 20px;
}

footer {
    margin-top: 60px;
}
</style>