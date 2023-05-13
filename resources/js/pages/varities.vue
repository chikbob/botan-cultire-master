<template>
    <div class="background">
        <PageLayout>
            <div class="all-content">
                <div class="center">
                    <div class="text-left">ФІКУС</div>
                    <div class="for-img"><img class="size" src='@/assets/fikus.png'></div>
                </div>

                <div class="center-table">
                    <table>
                        <tr>
                            <td><text class="white-text-table">Розміщення:</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Бонсай з фікуса - це "кімнатна" рослина, що не витримує
                                    морози.</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Фікусу необхідно багато світла, але прямі сонячні промені не
                                    повинні на нього потрапляти.</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Рослина віддає перевагу підвищеній вологості повітря.</text></td>
                        </tr>
                        <tr>
                            <td><text class="white-text-table">Полив:</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Фікус поливають у звичайному режимі,</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">для цього йому ідеально підходить м'яка вода кімнатної
                                    температури.</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Чим тепліші умови - тим більше води потрібно фікусу.</text></td>
                        </tr>
                        <tr>
                            <td><text class="white-text-table">Добрива:</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Влітку удобрюється раз в один-два тижні, а взимку - кожні
                                    два-чотири.</text></td>
                        </tr>
                        <tr>
                            <td><text class="white-text-table">Пересадка:</text></td>
                        </tr>
                        <tr>
                            <td><text class="text-table">Пересаджувати фікус необхідно навесні кожний другий рік.</text>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="all-content-back">

                <div class="center-table-back">
                    <table>
                        <tr>
                            <td text class="white-text-table-back"><text>Розміщення:</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>Тримати олівець на відкритому, сонячному місці увесь рік.
                                    Неможна тримати</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>у закритому приміщені. Взимку хвоя може набувати фіолетового
                                    кольору,</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>Але навесні повернеться до нормального стану.</text></td>
                        </tr>
                        <tr>
                            <td class="white-text-table-back"><text>Полив:</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>Не поливати занадто часто, коріння не люблять підвищену
                                    вологу. Можна оприскувати.</text></td>
                        </tr>
                        <tr>
                            <td class="white-text-table-back"><text>Добрива:</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>Протягом вегетативного періода додавати щомісяця звичайні
                                    гранульовані</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>органічні добрива або рідкі раз у тиждень.</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>Для пришвидшення росту навесні можна підвищити рівень
                                    азоту.</text></td>
                        </tr>
                        <tr>
                            <td class="white-text-table-back"><text>Пересадка:</text></td>
                        </tr>
                        <tr>
                            <td class="text-table-back"><text>Проводиться раз у два роки. Коріння обрізати обережно.</text>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="center">
                    <div class="for-img-back"><img class="size1" src='@/assets/mojevelnik.png'></div>
                    <div class="text-right">ЯЛІВЕЦЬ</div>
                </div>
            </div>
        </PageLayout>
    </div>
</template>

<script setup>
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
</script>

<style lang="scss" scoped>
.text,
.HIGHtext,
.LOWtext {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    margin-left: 15px;
    margin-right: 15px;
    font-weight: bold;
    font-size: 18px;
}

.HIGHtext {
    font-size: 42px;
    text-align: center;
}

.LOWtext {
    text-align: end;
}

.text-left,
.text-right {
    font-family: 'Book Antiqua';
    font-size: 32px;
    writing-mode: tb-rl;
    text-align: center;
}

.text-left {
    transform: rotate(180deg);
    margin-left: 60px;
    margin-right: 45px;
}

.text-right {
    margin-right: 60px;
}

.for-img,
.for-img-back {
    display: flex;
    justify-content: center;
}

.for-img-back {
    margin-right: 40px;
    justify-content: flex-end;
    padding-right: 20px;
}

.for-img img {
    margin: auto;
}

.for-img-back img {
    display: flex;
}

.size {
    width: 50%;
}

.size1 {
    width: 60%;
}

.center {
    display: flex;
}

.text-table {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
}

.white-text-table {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
}

.text-table-back {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
}

.white-text-table-back {
    font-family: 'Book Antiqua';
    color: #222e21;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
}

.white-text-table {
    color: white;
}

.white-text-table-back {
    color: white;
}

.text-table-back {
    text-align: end;
}

.white-text-table-back {
    text-align: end;
}

.all-content {
    display: flex;
    margin-top: 40px;
    margin-bottom: 50px;
}

.all-content-back {
    display: flex;
    justify-content: flex-end;
    align-items: center;

    margin-bottom: 60px;
}

.center-table {
    margin-top: 10px;
    margin-left: -80px;
    display: table;
}

.center-table-back {
    display: table;
    margin-right: -180px;
    margin-top: 10px;
    margin-bottom: 20px;
}

.background {
    background: url('@/assets/background-plants.png');
    width: 100%; 
    background-size: 100% 100%; 
    background-repeat: no-repeat; 
    position: absolute;
}
</style>