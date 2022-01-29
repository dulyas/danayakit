<script>
import { fade } from 'svelte/transition';
    const catalogItems = [
        {
            name: 'Вертикальные жалюзи',
            descr: 'Вертикальные жалюзи являются самым экономичным вариантом декоративной солнцезащиты. Они идеально подходят для больших окон, визуально расширяют узкие и увеличивают по высоте широкие оконные проемы. Строгий внешний вид и многофункциональность позволяют использовать их повсеместно: в офисах, гостиницах, ресторанах, учебных заведениях, жилых помещениях.',
            url: '/vertical',
        },
        {
            name: 'Рулонные шторы',
            descr: 'Современная альтернатива или дополнение к традиционным шторам - лаконичность форм, легкое управление, многообразие расцветок и фактур тканей для рулонных штор позволяет подобрать декор и степень солнцезащиты для любого помещения на самый взыскательный вкус.',
            url: '/rolled',
        },
        {
            name: 'Горизонтальные жалюзи',
            descr: 'Горизонтальные жалюзи надежно, эффективно регулируют световой поток, обеспечиают оптимальную солнцезащиту и приватность. Простота в уходе и легкость эксплуатации являются неоспоримыми преимуществами горизонтальных жалюзи в любых помещениях.',
            url: '/horizontal',
        }
    ]

</script>



<div class="container">
    <div in:fade="{{duration: 1000}}" class="catalog">

        {#each catalogItems as item}
            <a href={item.url} class="catalog__item">
                <div class="catalog__item-name">{item.name}</div>
                <div class="catalog__item-descr">{item.descr}</div>
            </a>
        {/each}
    </div>
</div>

<style lang='scss'>
    .catalog {
        margin: 0 auto;
        &__item {
            background: rgba(0, 0, 0, 0.5);
            -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
            padding: 15px 40px;
            margin-top: 5vh;
            -webkit-transition: 1s all;
            -o-transition: 1s all;
            transition: 1s all;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                    justify-content: space-between;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center; 
            &:nth-child(2n) {
                .catalog__item-name {
                    -webkit-box-ordinal-group: 2;
                        -ms-flex-order: 1;
                            order: 1;
                    text-align: right;
                }
                .catalog__item-descr {
                    text-align: left;
                }
            }
            &-name {
                width: 30%;
                font-size: 50px;
                color: #FFFFFF;

            }
            &-descr {
                font-size: 23px;
                color: #FFFFFF;
                text-align: right;
                width: 60%;
            }
            &:hover {
                background: rgba(0, 0, 0, 0.75);
            }
        }
    }

    @media (max-width: 1400px) {
        .catalog {
            &__item {
                &-name {
                    font-size: 35px;
                }
                &-descr {
                    font-size: 20px;
                }
            }
        }
    }




    @media (max-width: 1024px) {
        .catalog {
            &__item {
                height: 25%;
                &-name {
                    font-size: 25px;
                }
                &-descr {
                    font-size: 14px;
                }
            }
        }
    }

    @media (max-width: 768px) {
        .catalog {
            &__item {
                margin: 5vh auto 0;
                width: 75%;
                min-height: 100px;
                padding: 2%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                -webkit-box-align: center;
                    -ms-flex-align: center;
                        align-items: center;

                &:nth-child(2n) {
                .catalog__item-name {
                    -webkit-box-ordinal-group: 1;
                        -ms-flex-order: 0;
                            order: 0;
                    text-align: center;
                }
                .catalog__item-descr {
                    display: none;
                }
                }
                &-name {
                    font-size: 25px;
                    text-align: center;
                    width: 100%;
                }
                &-descr {
                    display: none;
                }
            }
        }
    }

    @media (max-width: 320px) {
        .catalog {
            &__item {

                &:nth-child(2n) {
                .catalog__item-name {
                    -webkit-box-ordinal-group: 1;
                        -ms-flex-order: 0;
                            order: 0;
                    text-align: center;
                }
                .catalog__item-descr {
                    display: none;
                }
                }
                &-name {
                    font-size: 20px;
                    text-align: center;
                    width: 100%;
                }
                &-descr {
                    display: none;
                }
            }
        }
    }

</style>