<script>
import Hamburger from 'svelte-hamburgers';
let open = false;
import Menu from './Menu.svelte';
import { createEventDispatcher } from 'svelte';




function handleMenu() {
    console.log(open);
}
</script>

<svelte:head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/svelte-hamburgers@3/dist/css/base.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/svelte-hamburgers@3/dist/css/types/spin.css" />
</svelte:head>

<div class="header">
    <a href="/" class="">
        <h2 class="nav__logo">Фирма <span>Даная</span></h2>
    </a>
    <div class="burger" on:click={handleMenu}>
        <div class="menu">
            Меню
        </div>
        <Hamburger
        bind:open
        --color="white" />
    </div>
    <nav class="nav">
        <div class="nav-item">
            <a href="/catalog">Каталог</a>
        </div>
        <div class="nav-item">
            <a href="/catalog">Галерея</a>
        </div>
        <div class="nav-item">
            <a href="/catalog">О компании</a>
        </div>        
        <div class="nav-item">
            <a href="/catalog">Контакты</a>
        </div>
        <div class="nav-item">
            <a href="/catalog">Вызвать замерщика</a>
        </div>
    </nav>
</div>
<Menu bind:open />

<style lang="scss">


	.header {
		min-height: 8vh;
		background: rgba(0, 0, 0, 0.35);
        display: flex;
        align-items: center;
	}

    .nav {
        display: flex;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        &-item {
            font-style: normal;
            font-weight: 300;
            font-size: 18px;
            margin: 0 25px;
        }
        a {
            position: relative;
            color: #ffffff; /*задаём цвет ссылки*/
            cursor: pointer;
            line-height: 1; /*задаём высоту строки*/
            text-decoration: none; /*убираем подчёркивание*/
                &::after {
                display: block;
                position: absolute;
                left: 0; /*изменить на right:0;, чтобы изменить направление подчёркивания */
                width: 0;/*задаём длинну линии до наведения курсора*/
                height: 1px; /*задаём ширину линии*/
                background-color: #ffffff; /*задаём цвет линии*/
                content: "";
                transition: width 0.3s ease-out; /*задаём время анимации*/
            }
                &:hover:after, &:focus:after {
                    width: 100%; 
                }
            }
        }

    .nav__logo {
    position: relative;
    bottom: 15px;
    right: -80px;
    font-size: 25px;
    font-weight: normal;
    transition: 1s all;
    span {
        font-family: 'Marck Script';
        font-size: 60px;
        position: relative;
        top: 22px;
    }
    &:hover {
        transform: scale(1.2);
    }
}

.burger {
    display: none;
}


@media (max-width: 1663px) {
    .nav {
        display: none;
    }
    .burger {
        display: flex;
        align-items: center;
        position: absolute;
        right: 15px;
    }
}

@media (max-width: 526px) {
    .nav__logo {
        right: -15px;
    }
}
@media (max-width: 407px) {
    .nav__logo {
        font-size: 0;
    }

}

</style>