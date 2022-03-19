<script>
    import { fade } from 'svelte/transition';
</script>


<div in:fade|local={{duration: 200}} class="container about-wrapper">
    <section class="about">
        <div class="about__title">О компании</div>
        <div class="about__text">Фирма «Даная» основана 19 января 2001 года в г. Челябинске как производственная компания, изготавливающая следующие виды декоративных солнцезащитных систем: вертикальные жалюзи, горизонтальные жалюзи, рулонные шторы
        <br><br>
        Собственное производство, оснащённое современным и высокотехнологичным оборудованием, позволяет выпускать продукцию премиального качества в любых объёмах в самые сжатые сроки. Все товары, предлагаемые нашей компанией, изготавливаются из комплектующих и материалов класса «Люкс», тем самым обеспечивая 100% гарантию качества.
        <br><br>
        Работая с нами, вы получаете весь спектр профессиональных услуг по внутренней солнцезащите – от снятия замеров до сверхточного монтажа.
        Мы гарантируем вам: высокий уровень сервиса,  широкий ассортимент предлагаемых товаров и услуг, соответствующий современному уровню качества,  кратчайшие сроки исполнения. 
        <br><br>
        Профессиональная установка жалюзи и рулонных штор в Челябинске – это преображение квартиры, дома или офиса по очень выгодной цене!
        </div>
    </section>
    <!-- <section class="about">
        <div class="about__title">Наши преимущества</div>
        <div class="about__text"></div>
    </section> -->
</div>

<style lang='scss'>



    .about {
        background: rgba(0, 0, 0, 0.5);
            -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
        padding: 27px 67px;
        margin-bottom: 59px;
        &__title {
            text-align: center;
            font-weight: 300;
            font-size: 45px;
        }   
        &__text {
            margin-top: 10px;
            font-weight: 300;
            font-size: 18px;
            line-height: 20px;
        } 
    }
    @media (max-width: 1500px) {
        .about {
        &__title {
            font-size: 32px;
        }   
        &__text {
            margin-top: 10px;
            font-weight: 300;
            font-size: 13px;
            line-height: 20px;
        } 
    }
    }
    @media (max-width: 500px) {
        .about {
            padding: 22px;
        &__title {
            font-size: 32px;
        }   
        &__text {
            margin-top: 10px;
            font-weight: 300;
            font-size: 13px;
            line-height: 20px;
        } 
    }
    }
</style>