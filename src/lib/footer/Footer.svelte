<script>
    import vkSrc from '$lib/footer/vk.svg';
    import instSrc from '../../img/icons/inst.svg';
</script>


<div class="footer">
    <div class="footer-info">
        ИНН: 212411347999 ОГРНИП: 318774600060521 ООО “Даная” г. Челябинск, ул. Клары Цеткин, д. 11 тел.: +7 900 555 35 35  © 2020-2022
    </div>
    <div class="soc__items">
        <div class="soc__items-worktime">
            пн-пт, 9:00-21:00 <br>
            сб-вс, 9:00-19:00
        </div>
        <a href="https://vk.com/danayajaluzi">
            <img src={vkSrc} class="header__icon" alt="vk">
        </a>
        <a href="https://vk.com/danayajaluzi">
            <img src={instSrc} class="header__icon" alt="instagram">
    </div>
</div>


<style lang='scss'>
.footer {
    height: 8vh;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(4px);
    &-info {
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        line-height: 18px;
        display: flex;
        align-items: center;
        text-align: center;

        color: #FFFFFF;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
}

.soc__items {
    position: absolute;
    right: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
        a {
            margin: 0 2px;
        }
        &-worktime {
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 18px;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
            margin-right: 15px;
        }
    }

    @media (max-width: 1400px) {
        .footer-info {
            display: none;
        }
    }
    @media (max-width: 480px) {
        .footer {
            height: 12vh;
        }
    }

</style>