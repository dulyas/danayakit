<script>
import { fade } from 'svelte/transition';

</script>

<div in:fade="{{duration: 1000}}" class="call">
    <form on:submit|preventDefault={() => console.log('211')} action="" class="form">
        <label class="form-input" for="name">Ваше имя *<br>
            <input id='name'  type="text">
        </label>
        <label class="form-input" for="phone">Контактный телефон *<br>
            <input id='phone'  type="text">
        </label>
        <label class="form-input" for="message">Комментарий<br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </label>
        <button class="form__button button">Отправить</button>
    </form>
</div>

<style lang="scss">
    .call {
        min-height: 70vh;
        height: 70vh;
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        text-align: left;
        font-size: 15px;

    }
    .form {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        padding: 20px;
        border-radius: 8%;
        width: 300px;
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
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