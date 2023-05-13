<template>
    <div class="container">
        <PageLayout>
            <div class="mid__info">
                <div class="HIGHtext">Визначення бонсай</div>
                <img class="left-photo" src='@/assets/robert-guss.png' alt="robert-guss.png">
                <div class="mid__info-container-top">
                    <div class="fix">
                        <img src="@/assets/bon-sai.png" alt="bon-sai.png">
                        <table>
                            <tr>
                                <td class="text-mid__info">«Бон» (лівий ієрогліф) – плоска чаша </td>
                            </tr>
                            <tr>
                                <td class="text-mid__info">«Сай» (правий ієрогліф) – означає</td>
                            </tr>
                            <tr>
                                <td class="text-mid__info">дерево або рослину, що посаджено</td>
                            </tr>
                            <tr>
                                <td class="text-mid__info">як алебарда або пика</td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-mid__info-exception">Тож «бонсай» – «дерево у плоскому сосуді»</div>
                    <div class="maybe-fix">
                        <div class="fix1">
                            <table>
                                <tr>
                                    <td class="text-mid__info-last">Слово «бонсай» є японським, але саме мистецтво</td>
                                </tr>
                                <tr>
                                    <td class="text-mid__info-last">виникло у китайській імпереії до 700 року до н.є</td>
                                </tr>
                                <tr>
                                    <td class="text-mid__info-last">та початково мало назву "пенчин". Китайці</td>
                                </tr>
                                <tr>
                                    <td class="text-mid__info-last">задопомогою спеціальних методів вирощувати</td>
                                </tr>
                                <tr>
                                    <td class="text-mid__info-last">карликові дерева у контейнерах</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mid__info-container-bot">
                    <div>
                        <table>
                            <tr class="text-mid__info-last">
                                <td>На початку тільки еліта мала можливість</td>
                            </tr>
                            <tr class="text-mid__info-last">
                                <td>отримати пенчин з місцевих дерев, зібраних</td>
                            </tr>
                            <tr class="text-mid__info-last">
                                <td>у природі. Ці дерева розповсюджувались по</td>
                            </tr>
                            <tr class="text-mid__info-last">
                                <td>усьому Китаю у вигляді подарунків</td>
                            </tr>
                        </table>
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

.text-mid__info {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    margin-left: 15px;
    margin-right: 15px;
    font-weight: bold;
    font-size: 24px;
}

.text-mid__info-last {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    margin-left: 15px;
    margin-right: 15px;
    font-weight: bold;
    font-size: 24px;
    text-align: right;
}

.text-mid__info-exception {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-weight: bold;
    font-size: 24px;
    display: inline-flex;
    flex-direction: column;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left: 100px;
}

.HIGHtext {
    font-size: 32px;
    display: flex;
    justify-content: center;
    margin: 40px 0;
}

.mid__info-container-top {
    background-color: #e6f4d9;
    display: flex;
    margin-left: 540px;
    margin-right: 140px;
    padding-left: 100px;
    flex-direction: column;
}

.mid__info-container-top img {
    width: 12.1rem;
    height: 10%;
    margin-top: 20px;
    margin-right: 30px;
}

.mid__info-container-bot {
    background-color: #e6f4d9;
    display: flex;
    justify-content: flex-end;
    margin-left: 320px;
    margin-right: 300px;
    margin-top: -100px;
    padding-right: 30px;
    padding-left: 100px;
    padding-top: 130px;
    padding-bottom: 30px;
}

.left-photo {
    display: flex;
    float: left;
    position: absolute;
    margin-left: 50px;
    top: 70px;
    left: 50px;
    width: 40%;
}

.fix {
    display: flex;
    flex-direction: row;
    margin-top: 30px;
    padding-right: 20px;
}

.fix1 {
    display: flex;
    justify-content: flex-end;
    margin: auto;
}

.maybe-fix {
    display: flex;
    padding-left: 50px;
    padding-bottom: 30px;
}

.mid__info {
    margin-bottom: 80px;
}
</style>