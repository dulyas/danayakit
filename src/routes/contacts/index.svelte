<script>
    import { fade } from 'svelte/transition';
    import vkSrc from '$lib/footer/vk.svg';
    import instSrc from '$lib/footer/inst.svg';

</script>

<div in:fade="{{duration: 1000}}" class="container contacts-wrapper">
    <div class="contacts">
        <div class="contacts__phone">
            +7 (351) 231 55 00
        </div>
        <div class="contacts__email">
            danaya.74@mail.ru
        </div>
        <div class="contacts__adress">
            ул. Клары Цеткин, д. 11
        </div>
        <div class="contacts__worktime">
            График работы:
            Пн-Пт
            с 9:00 до 18:00
        </div>
        <a href="https://vk.com/danayajaluzi" class="contacts__soc">
            <img src={vkSrc} alt=""><span>/danayajaluzi</span>
        </a>
        <a href="https://https://www.instagram.com/jaluzi174" class="contacts__soc">
            <img src={instSrc} alt=""><span>/jaluzi174</span>
        </a>
    </div>
        <div class="contacts__map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/danaya/1072479778/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Даная</a><a href="https://yandex.ru/maps/56/chelyabinsk/category/jalousies_shutters_and_roller_blinds/184107989/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Жалюзи и рулонные шторы в Челябинске</a><a href="https://yandex.ru/maps/56/chelyabinsk/category/shutters/184107733/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Рольставни в Челябинске</a><iframe src="https://yandex.ru/map-widget/v1/-/CCU5ILU6CC" width="100%" height="100%" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
</div>

<style lang="scss">
    .contacts-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        margin: 3% auto;
    }

    .contacts {
        width: 40%;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        font-size: 30px;
        text-align: center;
        padding: 0 15px;
        &__phone {
            font-size: 56px;
        }
        &__soc {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            img {
                margin-right: 5px;
            }
        }
        &__map {
            height: 70vh;
            width: 55%;
        }
    }

    @media (max-width: 800px) {
        .contacts-wrapper {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        }
        .contacts {
        width: 80%;
        height: 60vh;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        font-size: 30px;
        text-align: center;
        padding: 0 15px;
        &__phone {
            font-size: 56px;
        }
        &__soc {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            img {
                margin-right: 5px;
            }
        }
        &__map {
            height: 60vh;
            width: calc(80% + 25px);
        }
    }
    }

    @media (max-width: 632px) {
        .contacts {
            font-size: 15px;
            height: 50vh;
            &__phone {
                font-size: 25px;
            }
            &__map {
                height: 50vh;
            }
        }
    }
</style>