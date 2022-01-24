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
        height: 80vh;
        &__item {
            list-style-type: none;
            width: 1344px;
            height: 210px;
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
                font-weight: 300;
                width: 30%;
                font-size: 56px;
                color: #FFFFFF;
                text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
  
            }
            &-descr {
                font-style: normal;
                font-weight: 300;
                font-size: 25px;
                color: #FFFFFF;
                text-align: right;
                width: 50%;
            }
            &:hover {
                background: rgba(0, 0, 0, 0.75);
            }
        }
    }


</style>