

<script>
    import { fade } from 'svelte/transition';
</script>


<div in:fade="{{duration: 200}}" class="container home">
    <h1>Жалюзи в Челябинске</h1>
    <div class="buttons">
        <a href="/catalog" class="button main-btn-item">
            Перейти в каталог
        </a>
        <a href="/call" class="button main-btn-item">
            Вызвать замерщика
        </a>
    </div>
</div>



<style lang='scss'>

h1 {
    font-size: 120px;
    margin-top: 15vh;
    @media (max-width: 1400px) {
        margin-top: 10vh;
    }
}

.buttons {
    margin-top: 8vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    width: 80%;
}

.main-btn-item {
    width: 425px;
	height: 87px;
    font-size: 35px;
}

@media (max-width: 1450px) {
    h1 {
        font-size: 100px;
        width: 70%;
    }
    .buttons {
    width: 100%;
}
}


@media (max-width: 1050px) {
    h1 {
        width: auto;
    }

    .home {
        text-align: center;
    }
    .buttons {
        margin: 0 auto;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
        .main-btn-item {
            margin-top: 25px;
            font-size: 25px;
        }
    }
}

@media (max-width: 668px) {
    h1 {
        font-size: 50px;
        margin-top: 15vh;
        text-align: center;
    }
    .main-btn-item {
            font-size: 25px;
        }
        .buttons {
            width: 80%;
        .main-btn-item {
            height: 55px;
        }
    }    
}

@media (max-width: 350px) {
    h1 {
        font-size: 35px;
        text-align: center;
        padding: 0;
    }
    .buttons {
        .main-btn-item {
            margin-top: 25px;
            font-size: 18px;
            height: 55px;
        }
    }
}
</style>