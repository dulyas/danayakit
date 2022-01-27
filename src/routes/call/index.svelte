<script>
import { fade } from 'svelte/transition';


const Email = { send: function (a) { return new Promise(function (n, e) { a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send"; var t = JSON.stringify(a); Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) { n(e) }) }) }, ajaxPost: function (e, n, t) { var a = Email.createCORSRequest("POST", e); a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () { var e = a.responseText; null != t && t(e) }, a.send(n) }, ajax: function (e, n) { var t = Email.createCORSRequest("GET", e); t.onload = function () { var e = t.responseText; null != n && n(e) }, t.send() }, createCORSRequest: function (e, n) { var t = new XMLHttpRequest; return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t } };

let mail = {
    name: null,
    phone: null,
    message: null,
}

let msg = null;

function sendEmail () {
    msg = 'Отправка...';
    Email.send({
    Host : "smtp.yandex.ru",
    Username : "T.SAMOYLOVA998@yandex.ru",
    Password : "Gosu100500",
    To : 'd.str1ke@yandex.ru',
    From : "T.SAMOYLOVA998@yandex.ru",
    Subject : "Новый заказ на сайте",
    Body : `Имя: ${mail.name}, Телефон: ${mail.phone}, Сообщение: ${mail.message}`
}).then(
message => {
    msg = 'Спасибо, ожидайте звонка!';
    setTimeout(() => {
        msg = null;
        mail = {
            name: null,
            phone: null,
            message: null,
        }
    },
    2500);
    }
).catch(
error => {
    msg = 'Что-то пошло не так, попробуйте еще раз или позвоните нам';
    setTimeout(() => {
        msg = null;
        mail = {
            name: null,
            phone: null,
            message: null,
        }
    },
    2500);
    }
);
}




</script>

<div on:submit|preventDefault={sendEmail} in:fade="{{duration: 1000}}" class="call">
    <form class="form">
        <label class="form-input" for="name" >Ваше имя *<br>
            <input bind:value={mail.name} name='name' id='name' type="text" required>
        </label>
        <label class="form-input" for="phone" >Контактный телефон *<br>
            <input bind:value={mail.phone} name='phone' id='phone' type="text" required>
        </label>
        <label class="form-input" for="message">Комментарий<br>
            <textarea bind:value={mail.message} name="message" id='message' cols="30" rows="10"></textarea>
        </label>
        <button class="form__button button">Отправить</button>
        {#if msg}
            <div class="form-message">{msg}</div>
        {/if}
    </form>
</div>


<!-- 
<div in:fade="{{duration: 1000}}" class="call">
    <form action="https://formsubmit.co/ddulyas@gmail.com" class="form" method="POST">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_next" value="http://localhost:3000/thank">
        <input type="hidden" name="_subject" value="New submission!">
        <label class="form-input" for="name" >Ваше имя *<br>
            <input name='name'  type="text" required>
        </label>
        <label class="form-input" for="phone" >Контактный телефон *<br>
            <input name='phone'  type="text" required>
        </label>
        <label class="form-input" for="message">Комментарий<br>
            <textarea name="text" id="" cols="30" rows="10"></textarea>
        </label>
        <button class="form__button button">Отправить</button>
    </form>
</div> -->

<style lang="scss">
    .call {
        min-height: 70vh;
        height: 70vh;
        max-width: 1400px;
        margin: 0 auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        text-align: left;
        font-size: 15px;

    }
    .form {
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        padding: 20px;
        border-radius: 8%;
        width: 280px;
        height: 250px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        color: rgba(255, 255, 255, 0.685);
        &-input {
            display: block;
            text-align: center;
            margin-top: 5px;
            width: 90%;
            &:focus-within {
                color: white;
            }
            input, textarea {
                margin-top: 5px;
                background-color: rgba(255, 255, 255, 0.295);
                border: none;
                color: white;
                height: 30px;
                border-radius: 8px;
                outline:none;
                padding: 0 5px;
                width: 100%;
            }
            textarea {
                resize: none;
                height: 50px;
                padding: 5px;
            }
        }
        &__button {
            margin: 15px auto 0;
            width: 200px;
            height: 40px;
            color: white;
            font-size: 20px;
            border: none;
            cursor: pointer;
            &:hover {
                background-color: black;
            }
        }
    }
</style>