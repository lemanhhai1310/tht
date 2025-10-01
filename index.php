<?php
$data["title"] = "Home";
require "partials/header.php"; ?>
<div class="uk-section-small home__section">
    <div class="uk-container">
        <div class="" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-6@l uk-grid-small uk-grid-24-l" uk-grid>
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <div>
                                <div class="uk-cover-container rounded-8px">
                                    <img uk-img data-src="https://picsum.photos/178/78?random=<?= $i ?>" alt="" uk-cover="">
                                    <canvas width="178" height="78"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                                <div class="uk-text-center item-3px text-18364D fz-14 exo-2-600 lh-142">Số 2/2025</div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

        </div>
        <hr class="uk-hr divider">
        <div uk-grid>
            <div class="uk-width-1-3@l">

            </div>
            <div class="uk-width-expand">

            </div>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-child-width-1-2 uk-grid-small uk-grid-35-l uk-child-width-1-5@l" uk-grid>
            <?php for ($i = 0; $i < 5; $i++) { ?>
            <div>
                <div class="uk-cover-container rounded-15px">
                    <img uk-img data-src="https://picsum.photos/214/117?random=<?= $i ?>" alt="" uk-cover="">
                    <canvas width="214" height="117"></canvas>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="uk-section-small uk-section-muted">
    <div class="uk-container">
        <!--        Tạp chí nổi bật-->
        <h2 class="fz-28 exo-2-700 text-2BBEF9 uk-margin-remove">Tạp chí nổi bật</h2>
        <div class="item-30px uk-grid-97-l" uk-grid>
            <div class="uk-width-3-5@l">
                <div class="uk-grid-small uk-child-width-1-2@l" uk-grid>
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                    <div>
                        <div class="uk-cover-container uk-border-rounded">
                            <img data-src="https://picsum.photos/341/481?random=<?= $i ?>" uk-img alt="" uk-cover="">
                            <canvas width="341" height="481"></canvas>
                        </div>
                        <div class="item-15px exo-2-500 text-18364D"><a href="" class="uk-link-toggle">Tạp chí khoa học - Số 06/2025</a></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="item-30px" uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <div class="uk-slider-items uk-child-width-1-2 uk-grid-small uk-grid-58-l" uk-grid>
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <div>
                                        <div class="item-18px">
                                            <div class="uk-cover-container">
                                                <img uk-img data-src="https://picsum.photos/152/219?random=<?= $i ?>" alt="" uk-cover>
                                                <canvas width="152" height="219"></canvas>
                                                <a href="" class="uk-position-cover"></a>
                                            </div>
                                            <div class="fz-14 exo-2-600 lh-142 text-161616 item-10px"><a href="" class="uk-link-toggle">Tạp chí Khoa học Xã hội Việt Nam Số. 2/2025</a></div>
                                        </div>
                                        <div class="item-18px">
                                            <div class="uk-cover-container">
                                                <img uk-img data-src="https://picsum.photos/152/219?random=<?= $i ?>" alt="" uk-cover>
                                                <canvas width="152" height="219"></canvas>
                                                <a href="" class="uk-position-cover"></a>
                                            </div>
                                            <div class="fz-14 exo-2-600 lh-142 text-161616 item-10px"><a href="" class="uk-link-toggle">Tạp chí Khoa học Xã hội Việt Nam Số. 2/2025</a></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                                <div class="home__slidernav uk-border-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                        <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                                    </svg>
                                </div>
                            </a>
                            <a class="uk-position-center-right uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                                <div class="home__slidernav uk-border-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                        <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                                <div class="home__slidernav uk-border-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                        <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                                    </svg>
                                </div>
                            </a>
                            <a class="uk-position-center-right-out uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                                <div class="home__slidernav uk-border-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                        <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                                    </svg>
                                </div>
                            </a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                </div>
            </div>
        </div>
        <!--        /Tạp chí nổi bật-->
        <div class="item-45px">
            <a href=""><img data-src="assets/images/bannerimage471.png" uk-img alt=""></a>
        </div>
        <div class="uk-child-width-1-3@l item-45px" uk-grid>
            <?php for ($i = 0; $i < 3; $i++) { ?>
            <div>
                <h4 class="home__title1 fz-18 exo-2-700 uk-text-uppercase lh-133 text-2BBEF9">Tạp chí có nhiều lượt mua</h4>
                <div class="item-26px">
                    <?php for ($j = 0; $j < 5; $j++) { ?>
                    <div class="home__nhieu__item">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container">
                                    <img uk-img data-src="https://picsum.photos/97/120?random=<?= $j ?>" alt="" uk-cover>
                                    <canvas width="97" height="120"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h6 class="fz-14 exo-2-500 lh-142 text-161616"><a href="" class="uk-link-toggle">Nghiên cứu ảnh hưởng của điện gió công suất nhỏ vào lưới điện hạ thế</a></h6>
                                <div class="fz-12 text-656565">Đào Thị Thu Hà , Lê Đức Thắng, Vũ Công Thành</div>
                                <div class="uk-flex-bottom item-15px" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="fz-14 exo-2-700 text-18364D">72,000đ</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="uk-flex-bottom uk-grid-small" uk-grid>
                                            <div>
                                                <div class="fz-11 text-FF853F">89 lượt mua</div>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect width="23.5059" height="23.5059" rx="6" fill="#2BBEF9"/>
                                                        <path d="M12.6406 10.1019C12.9859 10.1019 13.2685 9.81937 13.2685 9.47402V8.21819H14.5243C14.8697 8.21819 15.1522 7.93563 15.1522 7.59027C15.1522 7.24492 14.8697 6.96236 14.5243 6.96236H13.2685V5.70653C13.2685 5.36117 12.9859 5.07861 12.6406 5.07861C12.2952 5.07861 12.0127 5.36117 12.0127 5.70653V6.96236H10.7568C10.4115 6.96236 10.1289 7.24492 10.1289 7.59027C10.1289 7.93563 10.4115 8.21819 10.7568 8.21819H12.0127V9.47402C12.0127 9.81937 12.2952 10.1019 12.6406 10.1019Z" fill="white"/>
                                                        <path d="M9.50102 15.7532C8.81031 15.7532 8.25146 16.3183 8.25146 17.009C8.25146 17.6997 8.81031 18.2648 9.50102 18.2648C10.1917 18.2648 10.7568 17.6997 10.7568 17.009C10.7568 16.3183 10.1917 15.7532 9.50102 15.7532Z" fill="white"/>
                                                        <path d="M15.7803 15.7532C15.0896 15.7532 14.5308 16.3183 14.5308 17.009C14.5308 17.6997 15.0896 18.2648 15.7803 18.2648C16.471 18.2648 17.0361 17.6997 17.0361 17.009C17.0361 16.3183 16.471 15.7532 15.7803 15.7532Z" fill="white"/>
                                                        <path d="M10.1921 12.6136H14.87C15.341 12.6136 15.7554 12.3562 15.9689 11.9669L18.0913 8.11774C18.2608 7.81634 18.1478 7.43331 17.8464 7.26377C17.545 7.10051 17.1619 7.20726 16.9987 7.50866L14.87 11.3578H10.4621L7.95671 6.06445C7.85624 5.84468 7.63019 5.70654 7.39158 5.70654H6.3618C6.01645 5.70654 5.73389 5.9891 5.73389 6.33446C5.73389 6.67981 6.01645 6.96237 6.3618 6.96237H6.98972L9.25021 11.7282L8.40252 13.2604C7.94415 14.1018 8.54695 15.1253 9.50138 15.1253H16.4084C16.7538 15.1253 17.0364 14.8427 17.0364 14.4974C17.0364 14.152 16.7538 13.8694 16.4084 13.8694H9.50138L10.1921 12.6136Z" fill="white"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="item-35px">
                    <a href="" class="home__nhieu__btn fz-14 text-18364D uk-button uk-button-small uk-button-default uk-width">
                        <span class="uk-margin-small-right">Xem thêm</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <rect width="16" height="16" rx="8" fill="#FF853F"/>
                            <path d="M10.5832 5.99992L7.99657 8.58659L5.4099 5.99992C5.28535 5.87509 5.11625 5.80493 4.9399 5.80493C4.76356 5.80493 4.59446 5.87509 4.4699 5.99992C4.2099 6.25992 4.2099 6.67992 4.4699 6.93992L7.5299 9.99992C7.7899 10.2599 8.2099 10.2599 8.4699 9.99992L11.5299 6.93992C11.7899 6.67992 11.7899 6.25992 11.5299 5.99992C11.2699 5.74659 10.8432 5.73992 10.5832 5.99992Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<!--Tạp chí miễn phí-->
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="fz-28 exo-2-700 text-2BBEF9 uk-margin-remove">Tạp chí miễn phí</h2>
        <div class="item-30px" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <div class="uk-slider-items uk-child-width-1-3 uk-child-width-1-6@l uk-grid-small uk-grid-30-l" uk-grid>
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <div>
                                <div class="uk-cover-container">
                                    <img uk-img data-src="https://picsum.photos/174/245?random=<?= $i ?>" alt="" uk-cover>
                                    <canvas width="174" height="245"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                                <div class="fz-14 exo-2-600 lh-142 text-161616 item-10px"><a href="" class="uk-link-toggle">Tạp chí Khoa học Xã hội Việt Nam Số. 2/2025</a></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__slidernav-icon home__slidernav-position" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__slidernav-icon home__slidernav-position" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

        </div>
    </div>
</div>
<!--/Tạp chí miễn phí-->
<!--Danh sách các gói đọc-->
<div class="uk-section-small uk-section-muted">
    <div class="uk-container">
        <h2 class="fz-28 exo-2-700 text-2BBEF9 uk-margin-remove">Danh sách các gói đọc</h2>
        <div class="item-39px uk-child-width-auto@l uk-child-width-1-2 uk-flex-center uk-grid-small uk-grid-24-l" uk-grid>
            <div>
                <div class="uk-card width-197px uk-card-default rounded-15px uk-overflow-hidden">
                    <div class="uk-card-header home__goidoc__header @10ngay uk-light uk-text-center">
                        <h4 class="uk-text-uppercase fz-20 exo-2-900">Gói 10 ngày</h4>
                    </div>
                    <div class="home__goidoc__body uk-card-body uk-text-center">
                        <div class="home__goidoc__body__box uk-cover-container uk-border-circle uk-flex-inline uk-light uk-background-secondary">
                            <canvas width="102" height="102"></canvas>
                            <div class="uk-position-cover">
                                <h5 class="fz-36 exo-2-700 uk-margin-remove lh-133 home__goidoc__price">50</h5>
                                <div class="divider-1 uk-margin-auto" style="max-width: 80%"></div>
                                <div class="fz-11 uk-text-uppercase item-3px">nghìn/10 ngày</div>
                            </div>
                        </div>
                        <div class="uk-text-uppercase lh-171 exo-2-500 fz-14 text-656565 item-16px">mua ngay gói</div>
                        <div class="exo-2-500 text-2BBEF9 item-2px">50.000đ</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card width-197px uk-card-default rounded-15px uk-overflow-hidden">
                    <div class="uk-card-header home__goidoc__header @1thang uk-light uk-text-center">
                        <h4 class="uk-text-uppercase fz-20 exo-2-900">Gói 1 tháng</h4>
                    </div>
                    <div class="home__goidoc__body uk-card-body uk-text-center">
                        <div class="home__goidoc__body__box uk-cover-container uk-border-circle uk-flex-inline uk-light uk-background-secondary">
                            <canvas width="102" height="102"></canvas>
                            <div class="uk-position-cover">
                                <h5 class="fz-36 exo-2-700 uk-margin-remove lh-133 home__goidoc__price">150</h5>
                                <div class="divider-1 uk-margin-auto" style="max-width: 80%"></div>
                                <div class="fz-11 uk-text-uppercase item-3px">nghìn/tháng</div>
                            </div>
                        </div>
                        <div class="uk-text-uppercase lh-171 exo-2-500 fz-14 text-656565 item-16px">mua ngay gói</div>
                        <div class="exo-2-500 text-2BBEF9 item-2px">150.000đ</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card width-197px uk-card-default rounded-15px uk-overflow-hidden">
                    <div class="uk-card-header home__goidoc__header @3thang uk-light uk-text-center">
                        <h4 class="uk-text-uppercase fz-20 exo-2-900">Gói 3 tháng</h4>
                    </div>
                    <div class="home__goidoc__body uk-card-body uk-text-center">
                        <div class="home__goidoc__body__box uk-cover-container uk-border-circle uk-flex-inline uk-light uk-background-secondary">
                            <canvas width="102" height="102"></canvas>
                            <div class="uk-position-cover">
                                <h5 class="fz-36 exo-2-700 uk-margin-remove lh-133 home__goidoc__price">450</h5>
                                <div class="divider-1 uk-margin-auto" style="max-width: 80%"></div>
                                <div class="fz-11 uk-text-uppercase item-3px">nghìn/tháng</div>
                            </div>
                        </div>
                        <div class="uk-text-uppercase lh-171 exo-2-500 fz-14 text-656565 item-16px">mua ngay gói</div>
                        <div class="exo-2-500 text-2BBEF9 item-2px">450.000đ</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card width-197px uk-card-default rounded-15px uk-overflow-hidden">
                    <div class="uk-card-header home__goidoc__header @6thang uk-light uk-text-center">
                        <h4 class="uk-text-uppercase fz-20 exo-2-900">Gói 6 tháng</h4>
                    </div>
                    <div class="home__goidoc__body uk-card-body uk-text-center">
                        <div class="home__goidoc__body__box uk-cover-container uk-border-circle uk-flex-inline uk-light uk-background-secondary">
                            <canvas width="102" height="102"></canvas>
                            <div class="uk-position-cover">
                                <h5 class="fz-36 exo-2-700 uk-margin-remove lh-133 home__goidoc__price">800</h5>
                                <div class="divider-1 uk-margin-auto" style="max-width: 80%"></div>
                                <div class="fz-11 uk-text-uppercase item-3px">nghìn/tháng</div>
                            </div>
                        </div>
                        <div class="uk-text-uppercase lh-171 exo-2-500 fz-14 text-656565 item-16px">mua ngay gói</div>
                        <div class="exo-2-500 text-2BBEF9 item-2px">800.000đ</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card width-197px uk-card-default rounded-15px uk-overflow-hidden">
                    <div class="uk-card-header home__goidoc__header @12thang uk-light uk-text-center">
                        <h4 class="uk-text-uppercase fz-20 exo-2-900">Gói 12 tháng</h4>
                    </div>
                    <div class="home__goidoc__body uk-card-body uk-text-center">
                        <div class="home__goidoc__body__box uk-cover-container uk-border-circle uk-flex-inline uk-light uk-background-secondary">
                            <canvas width="102" height="102"></canvas>
                            <div class="uk-position-cover">
                                <h5 class="fz-36 exo-2-700 uk-margin-remove lh-133 home__goidoc__price">1.500</h5>
                                <div class="divider-1 uk-margin-auto" style="max-width: 80%"></div>
                                <div class="fz-11 uk-text-uppercase item-3px">nghìn/tháng</div>
                            </div>
                        </div>
                        <div class="uk-text-uppercase lh-171 exo-2-500 fz-14 text-656565 item-16px">mua ngay gói</div>
                        <div class="exo-2-500 text-2BBEF9 item-2px">1.500.000đ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Danh sách các gói đọc-->
<div class="uk-section-small">
    <div class="uk-container">
        <!--        Các tác giả nổi bật-->
        <h2 class="fz-28 exo-2-700 text-2BBEF9 uk-margin-remove">Các tác giả nổi bật</h2>
        <div class="item-30px" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <div class="uk-slider-items uk-child-width-1-3 uk-child-width-1-8@l uk-grid-small uk-grid-30-l" uk-grid>
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <div>
                                <div class="uk-flex uk-flex-center">
                                    <div class="uk-cover-container uk-border-circle uk-flex-inline">
                                        <img style="filter: grayscale(100%);" uk-img data-src="https://picsum.photos/100/100?random=<?= $i ?>" alt="" uk-cover>
                                        <canvas width="100" height="100"></canvas>
                                    </div>
                                </div>
                                <div class="uk-text-center uk-margin-top fz-14 exo-2-600 lh-142 text-18364D">
                                    GS.TS <br>
                                    Nguyễn Hữu Đức
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__slidernav-icon home__slidernav-position" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__slidernav-icon home__slidernav-position" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

        </div>
        <!--        /Các tác giả nổi bật-->
        <hr class="uk-hr divider">
        <!--        Sách nổi bật-->
        <h2 class="fz-28 exo-2-700 text-2BBEF9 uk-margin-remove">Sách nổi bật</h2>
        <div class="item-30px" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <div class="uk-slider-items uk-child-width-1-3 uk-child-width-1-8@l uk-grid-small uk-grid-30-l" uk-grid>
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                        <div>
                            <div class="uk-cover-container">
                                <img uk-img data-src="https://picsum.photos/122/172?random=<?= $i ?>" alt="" uk-cover>
                                <canvas width="122" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                            <div class="fz-14 exo-2-600 lh-142 text-161616 item-10px"><a href="" class="uk-link-toggle">Từ điển khoa học hóa học</a></div>
                            <div class="uk-flex-middle uk-grid-5 item-4px" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="fz-14 exo-2-700 text-18364D">72,000đ</div>
                                </div>
                                <div class="uk-width-auto">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect width="23.5059" height="23.5059" rx="6" fill="#2BBEF9"/>
                                            <path d="M12.6401 10.1019C12.9854 10.1019 13.268 9.81937 13.268 9.47402V8.21819H14.5238C14.8692 8.21819 15.1517 7.93563 15.1517 7.59027C15.1517 7.24492 14.8692 6.96236 14.5238 6.96236H13.268V5.70653C13.268 5.36117 12.9854 5.07861 12.6401 5.07861C12.2947 5.07861 12.0122 5.36117 12.0122 5.70653V6.96236H10.7563C10.411 6.96236 10.1284 7.24492 10.1284 7.59027C10.1284 7.93563 10.411 8.21819 10.7563 8.21819H12.0122V9.47402C12.0122 9.81937 12.2947 10.1019 12.6401 10.1019Z" fill="white"/>
                                            <path d="M9.50053 15.7529C8.80982 15.7529 8.25098 16.3181 8.25098 17.0088C8.25098 17.6995 8.80982 18.2646 9.50053 18.2646C10.1912 18.2646 10.7564 17.6995 10.7564 17.0088C10.7564 16.3181 10.1912 15.7529 9.50053 15.7529Z" fill="white"/>
                                            <path d="M15.7798 15.7529C15.0891 15.7529 14.5303 16.3181 14.5303 17.0088C14.5303 17.6995 15.0891 18.2646 15.7798 18.2646C16.4705 18.2646 17.0357 17.6995 17.0357 17.0088C17.0357 16.3181 16.4705 15.7529 15.7798 15.7529Z" fill="white"/>
                                            <path d="M10.1916 12.6136H14.8696C15.3405 12.6136 15.7549 12.3562 15.9684 11.9669L18.0908 8.11774C18.2603 7.81634 18.1473 7.43331 17.8459 7.26377C17.5445 7.10051 17.1615 7.20726 16.9982 7.50866L14.8696 11.3578H10.4616L7.95622 6.06445C7.85575 5.84468 7.6297 5.70654 7.39109 5.70654H6.36131C6.01596 5.70654 5.7334 5.9891 5.7334 6.33446C5.7334 6.67981 6.01596 6.96237 6.36131 6.96237H6.98923L9.24972 11.7282L8.40204 13.2604C7.94366 14.1018 8.54646 15.1253 9.50089 15.1253H16.408C16.7533 15.1253 17.0359 14.8427 17.0359 14.4974C17.0359 14.152 16.7533 13.8694 16.408 13.8694H9.50089L10.1916 12.6136Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small home__slidernav-icon" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right uk-position-small home__slidernav-icon" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__slidernav-icon home__slidernav-position" href uk-slidenav-previous uk-slider-item="previous">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M9.48196 5.35236H2.12339L4.21482 3.15636C4.38196 2.98086 4.38196 2.69286 4.21482 2.51736C4.13475 2.4331 4.02604 2.38574 3.91267 2.38574C3.79931 2.38574 3.6906 2.4331 3.61053 2.51736L0.786246 5.48286C0.619103 5.65836 0.619103 5.94186 0.786246 6.11736L3.61053 9.08286C3.77767 9.25836 4.04767 9.25836 4.21482 9.08286C4.38196 8.90736 4.38196 8.62386 4.21482 8.44836L2.12339 6.25236H9.48196C9.71767 6.25236 9.91053 6.04986 9.91053 5.80236C9.91053 5.55486 9.71767 5.35236 9.48196 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__slidernav-icon home__slidernav-position" href uk-slidenav-next uk-slider-item="next">
                        <div class="home__slidernav uk-border-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 10 12" fill="none">
                                <path d="M0.517796 5.35236H7.87637L5.78494 3.15636C5.6178 2.98086 5.6178 2.69286 5.78494 2.51736C5.86501 2.4331 5.97372 2.38574 6.08708 2.38574C6.20045 2.38574 6.30915 2.4331 6.38922 2.51736L9.21351 5.48286C9.38065 5.65836 9.38065 5.94186 9.21351 6.11736L6.38922 9.08286C6.22208 9.25836 5.95208 9.25836 5.78494 9.08286C5.6178 8.90736 5.6178 8.62386 5.78494 8.44836L7.87637 6.25236H0.517796C0.282082 6.25236 0.0892239 6.04986 0.0892239 5.80236C0.0892239 5.55486 0.282082 5.35236 0.517796 5.35236Z" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

        </div>
        <!--        /Sách nổi bật-->
        <hr class="uk-hr divider">
        <!--        Tin tức nổi bật-->
        <h2 class="fz-28 exo-2-700 text-2BBEF9 uk-margin-remove">Tin tức nổi bật</h2>
        <div class="uk-child-width-1-2@l uk-grid-50-l item-23px" uk-grid>
            <div>
                <div uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <div class="uk-slider-items uk-child-width-1-1">
                                <div>
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img uk-img data-src="https://picsum.photos/550/330?random=" alt="" uk-cover>
                                        <canvas width="550" height="330"></canvas>
                                    </div>
                                    <div class="fz-13 text-3161C2 item-10px">16/02/2025</div>
                                    <div class="fz-18 exo-2-500 text-161616 lh-133 item-15px"><a href="" class="uk-link-toggle">Cơ sở dữ liệu thống kê quốc gia - Chuyển đổi toàn diện việc sản  xuất và sử dụng thông tin thống kê</a></div>
                                    <div class="fz-14 text-3D3D3D lh-142 uk-margin-top">Giai đoạn 2021-2025, ngành Thống kê tích cực triển khai nhiều phần việc nhằm thực hiện Chiến lược phát triển Thống kê Việt Nam theo Quyết định số...</div>
                                </div>
                            </div>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                </div>
            </div>
            <div>
                <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="item-22px uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-rounded">
                            <img uk-img data-src="https://picsum.photos/163/113?random=<?= $i ?>" alt="" uk-cover="">
                            <canvas width="163" height="113"></canvas>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="fz-13 text-3161C2">16/02/2025</div>
                        <div class="item-13px fz-16 text-161616 exo-2-500"><a href="" class="uk-link-toggle">Viện Công nghệ - HaUI tổ chức thành công hai hội thảo khoa học công nghệ nằm trong nhiệm vụ Khoa học Công nghệ</a></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!--        /Tin tức nổi bật-->
    </div>
</div>
<?php require "partials/footer.php";