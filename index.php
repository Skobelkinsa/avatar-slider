<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
<div class="comments">
    <div class="container review-box">
        <div class="cbox-header__block">
            <h2 data-w-id="d1a0fd46-729e-0efc-cc8c-193b2f5d60bb" class="h2 earnings"><strong><?=($_SERVER["REQUEST_URI"]=="/")?"Нас":"Лазер"?></strong> уже выбрали</h2>
            <h2 class="cbox-header__h2"></h2>
            <div class="blue-line"></div>
        </div>
        <div class="review-mask">
            <div class="swiper-wrapper">
                <div class="comments_item swiper-slide">
                    <img
                            class="comments_item-avatar"
                            data-lazy="./images/avatars/1.png"
                            alt="Юрец Удалец"
                    />
                    <div class="comments_item-footer">
                        <div class="comments_item-name">Юрец Удалец</div>
                        <div class="comments_item-desc">Тату-мастер, г.Москва</div>
                    </div>
                </div>
                <div class="comments_item swiper-slide">
                    <img
                            class="comments_item-avatar"
                            data-lazy="./images/avatars/2.png"
                            alt="Владимир  Лазарев"
                    />
                    <div class="comments_item-footer">
                        <div class="comments_item-name">Владимир  Лазарев</div>
                        <div class="comments_item-desc">Врач косметолог,
                            г. Магнитогорск</div>
                    </div>
                </div>
                <div class="comments_item swiper-slide">
                    <img
                            class="comments_item-avatar"
                            data-lazy="./images/avatars/3.png"
                            alt="Слава Курбатов"
                    />
                    <div class="comments_item-footer">
                        <div class="comments_item-name">Слава Курбатов</div>
                        <div class="comments_item-desc">Тату-мастер, г.Ижевск</div>
                    </div>
                </div>
                <div class="comments_item swiper-slide">
                    <img
                            class="comments_item-avatar"
                            data-lazy="./images/avatars/1.png"
                            alt="Юрец Удалец"
                    />
                    <div class="comments_item-footer">
                        <div class="comments_item-name">Юрец Удалец</div>
                        <div class="comments_item-desc">Тату-мастер, г.Москва</div>
                    </div>
                </div>
                <div class="comments_item swiper-slide">
                    <img
                            class="comments_item-avatar"
                            data-lazy="./images/avatars/2.png"
                            alt="Владимир  Лазарев"
                    />
                    <div class="comments_item-footer">
                        <div class="comments_item-name">Владимир  Лазарев</div>
                        <div class="comments_item-desc">Врач косметолог,
                            г. Магнитогорск</div>
                    </div>
                </div>
                <div class="comments_item swiper-slide">
                    <img
                            class="comments_item-avatar"
                            data-lazy="./images/avatars/3.png"
                            alt="Слава Курбатов"
                    />
                    <div class="comments_item-footer">
                        <div class="comments_item-name">Слава Курбатов</div>
                        <div class="comments_item-desc">Тату-мастер, г.Ижевск</div>
                    </div>
                </div>

            </div>
            <div class="left-arrow w-slider-arrow-left">
                <div class="slider-button-left"><img src="images/ic-arrow-left.svg" alt=""></div>
            </div>
            <div class="right-arrow w-slider-arrow-right">
                <div class="slider-button-right"><img src="images/ic-arrow-right.svg" alt=""></div>
            </div>
            <div class="compare-slide-nav w-slider-nav w-round"></div>
        </div>
        <!-- Add Arrows -->
        <div class="comments_arrow"></div>
    </div>
</div>
<style>
    .comments {
        position: relative;
        margin-bottom: 30px; width: 100%;}
    .comments_item {
        outline: none;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: flex-end; }
    @media (max-width: 1200px) {
        .comments_item {
            padding: 0 30px; } }
    .comments_item-footer {
        background-color: white;
        padding: 20px;
        max-width: 180px;
        min-height: 150px;
        position: absolute;
        right: 0;
        bottom: 30px; }
    .comments_item-avatar {
        margin: 0 auto 130px; }
    .comments_item-name {
        color: black;
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 10px; }
    .comments_item-desc {
        color: #84888f;
        font-size: 16px; }
    .comments_button {
        position: absolute;
        outline: none;
        border: 0;
        z-index: 1;
        top: 50%;
        margin-top: calc(50px / 2 - 50px);
        width: 50px;
        height: 50px;
        border-radius: 100%;
        box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.2);
        overflow: hidden;
        cursor: pointer; }
    @media (max-width: 840px) {
        .comments_button {
            display: none; } }
    .comments_button:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAUCAMAAACOLiwjAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABUUExURUdwTEy06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06ky06hIjW4MAAAAbdFJOUwAuiH789hbOBAmidKppslu+U8cPTELTN9wc8drVDVsAAABWSURBVBjTVc9XCsBQCETRvLSX3vvd/z4DQQPj1xFEnSTxCjH8Ph+iey+4bvNWcJTmOSe6x5xlNfcw1eYWBncGXWVOoXFrI2O6QFfrUX1HH9UIGu6L/QL22QXbZlGhZwAAAABJRU5ErkJggg==");
        background-position: center;
        background-repeat: no-repeat; }
    .comments_button--left {
        left: -4%; }
    .comments_button--right {
        right: -4%; }
    .comments_button--right:before {
        transform: rotate(180deg); }
    .comments .container {
        position: relative; margin: 0 auto; }
    .comments .cbox-header__block {
        margin-bottom: 40px; }
    .comments .slick-arrow {
        top: calc(50% - 60px); }
    .comments .slick-dots li button{display: none}
    .comments .slick-dots li{
        list-style: none;
        width: 8px;
        height: 8px;
        border-radius: 100%;
        background-color: rgba(229,229,229,1);
        margin-left: 30px;
    }
    .comments .slick-dots .slick-active{background-color: #ff4d44}
    .comments .right-arrow{padding-bottom: 50px;}
    .comments .left-arrow{padding-bottom: 50px;}
    .comments .slick-dots{
        display: flex;
        justify-content: center;
    }
</style>
<script>
    $(function () {
        $('.comments .swiper-wrapper').slick({
            prevArrow: $('.comments .slider-button-right'),
            nextArrow: $('.comments .slider-button-left'),
            lazyLoad: 'ondemand',
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2
                    }
                }]
        });
    });
</script>
</body>
</html>