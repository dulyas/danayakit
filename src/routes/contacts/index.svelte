<script>
    import { fade } from 'svelte/transition';
    import Vk from '$lib/footer/vk.svg';
    import Inst from '$lib/footer/inst.svg';

</script>
<svelte:head>
    <meta name="description" content="Жалюзи и рулонные шторы по индивидуальным размерам. Срок изготовления 3-5 дней. Звоните и заказывайте!" />
	<title>Жалюзи в Челябинске от производителя – Фирма Даная</title>
</svelte:head>
<div in:fade|local="{{duration: 200}}" class="container contacts-wrapper">
    <div class="contacts">
        <a href="tel:+73512315500" class="contacts__phone contacts__item">
            +7 (351) 231 55 00
        </a>
        <div class="contacts__email contacts__item">
            danaya.74@mail.ru
        </div>
        <div class="contacts__adress contacts__item">
            ул. Клары Цеткин, д. 11
        </div>
        <div class="contacts__worktime contacts__item">
            График работы:
            Пн-Пт
            с 10:00 до 19:00
        </div>
        <a href="https://vk.com/danayajaluzi" class="contacts__soc">
            <Vk/> /danayajaluzi
        </a>
        <a href="https://www.instagram.com/jaluzi174" class="contacts__soc">
            <Inst/> /jaluzi174
        </a>
    </div>
        <div
        class="contacts__map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/danaya/1072479778/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Даная</a><a href="https://yandex.ru/maps/56/chelyabinsk/category/jalousies_shutters_and_roller_blinds/184107989/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Жалюзи и рулонные шторы в Челябинске</a><a href="https://yandex.ru/maps/56/chelyabinsk/category/shutters/184107733/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Рольставни в Челябинске</a><iframe title='map' src="https://yandex.ru/map-widget/v1/-/CCU5ILU6CC" width="100%" height="100%" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
</div>

<style lang="scss">
    .contacts-wrapper {
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
    }

    .contacts {
        width: 410px;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        font-size: 32px;
        text-align: center;
        padding: 30px;
        &__item {
            &:not(:first-child) {
                margin-top: 35px;
            }
        }
        &__phone {
            font-size: 38px;
        }
        &__soc {
            margin-top: 25px;
            display: flex;
                    align-items: center;
                    justify-content: center;
        }
        &__map {
            height: 66vh;
            width: 650px;
        }
        a {
            &:hover {
                :global(svg path) {
                    transition: .6s;
                    fill-opacity: 1;
                }
            }
        }
        
    }

    @media (max-width: 1470px) {
        .contacts {
            font-size: 27px;
            width: 42%;
            &__map {
                width: 500px;
                height: 69vh;
            }
            &__phone {
                font-size: 35px;
            }
            &__item {
            &:not(:first-child) {
                margin-top: 20px;
            }
        }
        }
    }




    @media (max-width: 800px) {
        .contacts-wrapper {
            display: block;
            width: 100%;
            margin: 0 auto;
        }
        .contacts {
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        font-size: 30px;
        text-align: center;
        padding: 15px;
        font-size: 25px;
        &__phone {
            font-size: 38px;
        }
        &__soc {
            display: flex;
            align-items: center;
        }
        &__map {
            margin-top: 15px;
            height: 36vh;
            width: 100%;
        }
    }
    }

    @media (max-width: 632px) {
        .contacts {
            font-size: 15px;
            &__phone {
                font-size: 25px;
            }
            &__map {
                margin-top: 15px;
                height: 40vh;
            }
            &__soc {
                margin-top: 15px;
            }
        }
    }
</style>