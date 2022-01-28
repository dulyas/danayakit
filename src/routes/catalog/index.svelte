<script context="module">
	export const prerender = true;
</script>

<script>
import { fade } from 'svelte/transition';
</script>


<div class="container">
    <div in:fade="{{duration: 1000}}" class="catalog">
        <a href="/vertical" class="catalog__item">
            <div class="catalog__item-name">Вертикальные жалюзи</div>
            <div class="catalog__item-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
        </a>
        <a href="/rolled" class="catalog__item">
            <div class="catalog__item-name">Рулонные жалюзи</div>
            <div class="catalog__item-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
        </a>
        <a href="/horizontal" class="catalog__item">
            <div class="catalog__item-name">Горизонтальные жалюзи</div>
            <div class="catalog__item-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <div>
        </a>
    </div>
</div>

<style lang='scss'>
    .catalog {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        min-height: 70vh;
        margin: 0 auto;
        &__item {
            background: rgba(0, 0, 0, 0.5);
            -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
            padding: 15px 40px;
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
                text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
  
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