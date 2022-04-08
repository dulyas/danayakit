
<script>
import { fade } from 'svelte/transition';

const re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;

let mail = {
    name: null,
    phone: null,
    message: null
}
let submitStatus;
const submitForm = async (data) => {
    console.log('отправка запроса')
    submitStatus = 'Отправка...'
    const formData = new FormData(data.currentTarget);

    let res = await fetch('./send.php', {
        method: 'POST',
        body: formData
    });
    
    if (res.ok) {
        submitStatus = 'Спасибо, ожидайте звонка!';
    } else {
        submitStatus = 'Что-то пошло не так...'
    }




    mail = {
    name: null,
    phone: null,
    message: null
    }
    setTimeout(() => {
        submitStatus = null;
    }, 3000)

}


</script>




<div class="container">
    <div in:fade="{{duration: 200}}" class="call-wrapper">
        <div class="call call-form">
            <form class="form" enctype="multipart/form-data" method="POST" on:submit|preventDefault={submitForm}>
                <div class="form__descr">
                    Оформите заявку на вызов замерщика или на предварительный расчёт стоимости заказа, заполнив все поля формы.  
                    <br><br>
                    Для расчёта стоимости сообщите тип жалюзи и ориентировочные размеры изделия с обозначением ширины и высоты. 
                    <br><br>
                    В рабочее время мы свяжемся с вами в течении 2-х часов. 
                </div>
                <label class="form-input" for="name" >Ваше имя *<br>
                    <input bind:value={mail.name} name='name' id='name' type="text" required>
                </label>
                <label class="form-input" for="phone" >Контактный телефон *<br>
                    <input bind:value={mail.phone} name='phone' id='phone' type="text" required>
                </label>
                <label class="form-input" for="message">Комментарий<br>
                    <textarea bind:value={mail.message} name="message" id='message' cols="30" rows="10"></textarea>
                </label>
                <button 
                type='submit'
                class="form__button button"
                disabled={submitStatus || !(re.test(mail.phone) && mail.name)}>Отправить</button>
                {#if submitStatus}
                    <div transition:fade|local="{{duration: 200}}" class="form-message">{submitStatus}</div>
                {/if}
            </form>
        </div>
        <div class="call call-descr">
            <div class="call-descr__title">
                Как мы работаем?
            </div>
            <div class="call-descr__text">
                На замер мы привозим каталоги тканей и материалов, из которых изготавливаем рулонные шторы или жалюзи.<br><br>Также во время принятия заказа учитываются предпочтения и пожелания каждого заказчика. Как показала многолетняя практика, заказчики не всегда знают, что именно хотят - пока у них разбегаются глаза при виде каталогов тканей. <br><br>Наши специалисты обладают многолетним опытом по замерам и установкам рулонных штор и жалюзи, поэтому могут быстро и грамотно проконсультировать любого заказчика, выслушав его предпочтения и пожелания. Мы рекомендуем и предлагаем разные варианты, а вы делаете свой выбор.<br><br> Работаем очень оперативно и не заставим вас долго ждать: быстро перезвоним или напишем и согласуем удобное время визита для замера. <br><br>В среднем, скорость изготовления заказа составляет либо 2-3 рабочих дня, либо 3-5 дней — это зависит от разных факторов.<br><br> Обращайтесь к нам и записывайтесь на замер. Для жителей Челябинска он бесплатный при условии заключения договора,  для области стоимость зависит от удалённости от черты  города.
            </div>
        </div>
    </div>
</div>


<style lang='scss'>

    .call-wrapper {
        display: flex;
        justify-content: space-between;
        --button-width: 200px;
        --button-height: 40px;
    }

    .call {
        font-size: 18px;
        background: rgba(0, 0, 0, 0.5);
            -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
                    padding: 26px;
        &-form {
            border-radius: 5px;
            font-style: normal;
        }
        &-descr {
            border-radius: 5px;
            width: 650px;
            color: rgba(255, 255, 255, 0.9);
            &__title {
                font-size: 50px;
                text-align: center;
                color: rgba(255, 255, 255, 0.9);
            }
            &__text {
                color: rgba(255, 255, 255, 0.9);
                margin-top: 10px;
                font-size: 18px;
            }
        }
    }

    .form {
    width: 400px;
    color: rgba(255, 255, 255, 0.685);
    position: relative;
    
    &__descr {
        margin-bottom: 10px;
        color: rgba(255, 255, 255, 0.9);
    }
    &-input {
        display: block;
        margin-top: 15px;
        width: 100%;
        
        &:focus-within {
            color: white;
        }
        input, textarea {
            border-radius: 4px;
            margin-top: 5px;
            border: none;
            color: white;
            height: 30px;
            outline:none;
            padding: 0 5px;
            width: 100%;
            background: rgba(153, 153, 153, 0.23);
            // -webkit-backdrop-filter: blur(50px);
            //         backdrop-filter: blur(50px);
        }
        textarea {
            resize: none;
            height: 90px;
            padding: 5px;
        }
    }
    &__button {
        margin: 15px auto 0;
        width: var(--button-width);
        height: var(--button-height);
        color: rgba(255, 255, 255, 0.774);
        font-size: 27px;
        border: none;
        border-radius: 9px;
        cursor: pointer;
        &:disabled {
            opacity: 0.3;
        }
        &:hover {
            background-color: black;
            color: white;
        }
    }
    &-message {
        z-index: 10;
        padding: 15px;
        text-align: center;
        position: absolute;
        left: 50%;
        transform: translateX(-50%) translateY(-100%);
        background: rgba(0, 0, 0, 0.9);
        min-width: var(--button-width);
        height: var(--button-height);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 9px;
        white-space: nowrap;
    }
}

@media (max-width: 1500px) {
    .call-wrapper {
        display: flex;
        justify-content: space-between;
    }

    .call {
        font-size: 15px;
        background: rgba(0, 0, 0, 0.5);
            -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
                    padding: 26px;
        &-form {
            width: 400px;
            font-style: normal;
        }
        &-descr {
            width: 500px;
            &__title {
                font-size: 35px;
                text-align: center;
            }
            &__text {
                font-size: 13px;
                margin-top: 5px;
            }
        }
    }

    .form {
    width: 350px;
    color: rgba(255, 255, 255, 0.685);
    &__descr {
        color: rgba(255, 255, 255, 0.9);
    }
    &-input {
        display: block;
        margin-top: 4px;
        width: 100%;
        &:focus-within {
            color: white;
        }
        input, textarea {
            margin-top: 4px;
            border: none;
            color: white;
            height: 25px;
            outline:none;
            padding: 0 5px;
        }
        textarea {
            resize: none;
            height: 45px;
            padding: 5px;
        }
    }
    &__button {
        margin: 15px auto 0;
        width: 200px;
        height: 40px;
        color: rgba(255, 255, 255, 0.774);
        font-size: 27px;
        border: none;
        border-radius: 9px;
        cursor: pointer;
        &:disabled {
            opacity: 0.3;
        }
        &:hover {
            background-color: black;
            color: white;
        }
    }
    &-message {
        text-align: center;
    }
}
}

@media (max-width: 800px) {
    .call-wrapper {
        display: block;
    }
    .call { 
        padding: 20px;
        &-form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 0 auto;
        }
        &-descr {
            width: 100%;
            margin: 20px auto 0;
            &__text {
                margin-top: 15px;
            }
        }
    }
    .form {
    width: 100%;
}
}
</style>