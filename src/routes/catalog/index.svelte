<script context="module">
	export const prerender = true;
</script>

<script>
import { fade } from 'svelte/transition';
</script>


<ul in:fade="{{duration: 1000}}" class="catalog">
    <a href="/vertical" class="catalog__item">
        <div class="catalog__item-name">Вертикальные жалюзи</div>
        <div class="catalog__item-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
    </a>
    <a href="/rolled" class="catalog__item">
        <div class="catalog__item-name">Рулонные жалюзи</div>
        <div class="catalog__item-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
    </a>
    <a href="" class="catalog__item">
        <div class="catalog__item-name">Горизонтальные жалюзи</div>
        <div class="catalog__item-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <div>
    </a>
</ul>

<style lang='scss'>
    .catalog {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        min-height: 77vh;
        max-width: 1400px;
        width: 80%;
        margin: 1% auto;
        &__item {
            list-style-type: none;
            max-height: 210px;
            height: 27%;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            padding: 13px 68px;
            transition: 1s all;
            display: flex;
            justify-content: space-between;
            align-items: center; 
            &:nth-child(2n) {
                .catalog__item-name {
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
                width: 50%;
            }
            &:hover {
                background: rgba(0, 0, 0, 0.75);
            }
        }
    }

    @media (max-width: 1400px) {
        .catalog {
            &__item {
                text-align: center;
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
                height: 25%;
                width: 80%;
                display: flex;
                justify-content: center;
                align-items: center;
                &:nth-child(2n) {
                .catalog__item-name {
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
                height: 25%;
                width: 60%;
                &:nth-child(2n) {
                .catalog__item-name {
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