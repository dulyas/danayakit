<script>
import Hamburger from 'svelte-hamburgers';
let open = false;
import Menu from './Menu.svelte';
import { browser } from '$app/env';


$:  if (browser) {
        if (open) {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
        }


const menu = [
        {name: 'Контакты',
        url: '/contacts'},
        {name: 'Каталог',
        url: '/catalog'},
        {name: 'О компании',
        url: '/about'},
        {name: 'Галерея',
        url: '/gallery'},
        {name: 'Вызвать замерщика',
        url: '/call'},
        ]




</script>


<div class="header">
    <a on:click={() => open = false} href="/" class="">
        <h2 class="nav__logo">Фирма <span>Даная</span></h2>
    </a>
    <div class="burger">
        <Hamburger
        bind:open
        --color="white" />
    </div>
    <nav class="nav">
        {#each menu as item, i}
        <div class="nav-item">
            <a class='' href={item.url}>{item.name}</a>
        </div>
        {/each}
    </nav>
</div>
<Menu menu={menu} bind:open />

<style lang="scss">


.header {
		min-height: 75px;
		background: rgba(0, 0, 0, 0.5);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
	}

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        position: relative;
        right: 15%;
        &-item {
            font-size: 18px;
            margin: 0 25px;
            text-align: center;
        }
        a {
            position: relative;
            color: #ffffff; /*задаём цвет ссылки*/
            cursor: pointer;
            line-height: 1; /*задаём высоту строки*/
            text-decoration: none;
                &::after {
                display: block;
                position: absolute;
                left: 0; /*изменить на right:0;, чтобы изменить направление подчёркивания */
                width: 0;/*задаём длинну линии до наведения курсора*/
                height: 1px; /*задаём ширину линии*/
                background-color: #ffffff; /*задаём цвет линии*/
                content: "";
                -webkit-transition: width 0.3s ease-out;
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
    left: 40%;
    font-size: 25px;
    font-weight: normal;
    -webkit-transition: 1s all;
    transition: 1s all;
    span {
        font-family: "CorridaCTT";
        font-size: 60px;
        position: relative;
        top: 22px;
    }
    &:hover {
                -webkit-transform: scale(1.05);
                        transform: scale(1.05);
    }
}


.burger {
    display: none;
}

@media (max-width: 1470px) {
    .header {
        height: 67px;
        min-height: 45px;
        .nav {
            right: 0;
            &-item {
                font-size: 16px;
            }
        }
        .nav__logo {
        position: relative;
        left: 15%;
        }
    }
}

@media (max-width: 1260px) {
    .header {
        .nav {
            display: none;
        }
    }

    .burger {
        display: block;
        position: relative;
        right: 2%;
    }
}

@media (max-width: 360px) {
    .nav__logo {
        font-size: 0;
    }
}
</style>