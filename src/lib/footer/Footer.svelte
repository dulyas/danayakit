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
        </a>
    </div>
</div>


<style lang='scss'>
.footer {
    height: 8vh;
    background: rgba(0, 0, 0, 0.5);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-backdrop-filter: blur(4px);
            backdrop-filter: blur(4px);
    &-info {
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        line-height: 18px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        text-align: center;

        color: #FFFFFF;

  }
}

.soc__items {
    position: absolute;
    right: 15px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
        a {
            margin: 0 2px;
        }
        &-worktime {
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 18px;
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
            display: none;
            height: 12vh;
        }
    }
</style>