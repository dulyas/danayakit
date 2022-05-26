<script>
import { getContext } from "svelte/internal";
import { fade } from 'svelte/transition';
const isMobile = getContext('isMobile')


</script>

<svelte:head>
    <meta name="description" content="Жалюзи и рулонные шторы по индивидуальным размерам. Срок изготовления 3-5 дней. Звоните и заказывайте!" />
	<title>Жалюзи в Челябинске от производителя – Фирма Даная</title>
</svelte:head>

<div 
class:mobile={$isMobile}
class="container about" in:fade={{duration: 200}}>
    <div class="about-header">
        <div class="about-top">
            О Компании
        </div>
        <div 
        class:mobile={$isMobile}
        class="about-middle">
            Фирма «Даная» основана 19 января 2001 года в г. Челябинске как производственная компания, изготавливающая следующие виды декоративных солнцезащитных систем: вертикальные жалюзи, горизонтальные жалюзи, рулонные шторы<br><br>
            Собственное производство, оснащённое современным и высокотехнологичным оборудованием, позволяет выпускать продукцию премиального качества в любых объёмах в самые сжатые сроки. Все товары, предлагаемые нашей компанией, изготавливаются из комплектующих и материалов класса «Люкс», тем самым обеспечивая 100% гарантию качества.<br><br>
            Работая с нами, вы получаете весь спектр профессиональных услуг по внутренней солнцезащите – от снятия замеров до сверхточного монтажа.
            Мы гарантируем вам: высокий уровень сервиса,  широкий ассортимент предлагаемых товаров и услуг, соответствующий современному уровню качества,  кратчайшие сроки исполнения.<br><br>Профессиональная установка жалюзи и рулонных штор в Челябинске – это преображение квартиры, дома или офиса по очень выгодной цене!
        </div>
    </div>
    <div class="about-bottom">
        <div 
        class:mobile={$isMobile}
        class="buttons">
            <a href="/gallery" class="button main-btn-item">
                Наши работы
            </a>
            <a href="/call" class="button main-btn-item">
                Вызвать замерщика
            </a>
        </div>
    </div>
</div>




<style lang="scss">
.about {
    max-height: 70vh;
    &.mobile {
        max-height: none;
    }
    &-header {
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        padding: 5px;
    }
    
    &-top {
    width: 100%;
    font-family: 'Sansation Light';
    font-style: normal;
    font-weight: 300;
    font-size: 50px;
    line-height: 56px;
    display: flex;
    align-items: center;
    text-align: center;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 150px;
    border-radius: 5px;
    background: url('../../img/header-bg.jpg') center center / cover no-repeat;
    text-shadow: 0px -5px 20px #000000;
    @media (max-width: 1400px) {
        height: 100px;
    }
    }
    &-middle {
        margin: 20px 50px;
        font-family: 'Sansation Light';
        font-style: normal;
        font-weight: 300;
        font-size: 20px;
        line-height: 20px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
        &.mobile {
            margin: 20px 25px;
        }
        @media (max-width: 1400px) {
            font-size: 13px;
            margin: 20px 50px 10px;
        }
    }
}

.buttons {
    margin: 45px auto 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-around;
    width: 100%;
    
    @media (max-width: 1400px) {
            margin: 30px auto 0;
        }

    &.mobile {
        display: block;
        .main-btn-item {
            width: 80%;
            margin: 0 auto;
            &:last-child {
                margin-top: 15px;
            }
        }
    }
    
}

.main-btn-item {
    width: 425px;
	height: 87px;
    font-size: 35px;
    @media (max-width: 1400px) {
        font-size: 27px;
        height: 65px;
    }
}
</style>