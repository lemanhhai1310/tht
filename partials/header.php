<?php $projectName = "Nền tảng Xuất bản Tạp chí điện tử, Tạp chí in, Quản lý tạo lập Sách điện tử & Phát hành"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="assets/uikit/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="assets/uikit/dist/js/uikit.min.js"></script>
    <script src="assets/uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header">
        <div class="header__top uk-section-xsmall">
            <div class="uk-container">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div><span class="fz-13 text-3D3D3D">Hotline:</span> <a href="" class="fz-14 text-2BBEF9 exo-2-700">(+84) 987 15 6688</a></div>
                    </div>
                    <div class="uk-width-auto">
                        <ul class="uk-subnav uk-subnav-divider" uk-margin>
                            <li class="uk-visible@s">
                                <a href="#" class="uk-flex-middle" style="text-transform: inherit;">
                                    <svg style="position: relative;top: -2px;left: -2px" xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                                        <path d="M19 3.35208H17.8432V2.58161C17.8432 1.15808 16.6765 0 15.2424 0C13.8082 0 12.6415 1.15808 12.6415 2.58161V3.35204H11.4848V5.90883C10.4312 5.40081 9.24949 5.11526 8.00162 5.11526C3.58952 5.11526 0 8.67821 0 13.0577C0 17.4371 3.58947 21 8.00158 21C12.4136 21 16.0032 17.4371 16.0032 13.0577C16.0032 12.0582 15.8156 11.1015 15.4745 10.2198H19L19 3.35208ZM13.8811 2.58161C13.8811 1.8366 14.4918 1.23047 15.2423 1.23047C15.9929 1.23047 16.6036 1.8366 16.6036 2.58161V3.35204H13.8811L13.8811 2.58161ZM4.69838 18.9123V17.2459C4.69838 15.9024 5.79956 14.8093 7.15308 14.8093H8.85003C10.2036 14.8093 11.3047 15.9024 11.3047 17.2459V18.9123C10.3273 19.4578 9.20048 19.7695 8.00158 19.7695C6.80263 19.7695 5.67584 19.4578 4.69838 18.9123ZM8.00158 13.5788C7.16812 13.5788 6.49008 12.9058 6.49008 12.0786C6.49008 11.2513 7.16812 10.5783 8.00158 10.5783C8.83499 10.5783 9.51304 11.2513 9.51304 12.0786C9.51304 12.9058 8.83499 13.5788 8.00158 13.5788ZM14.7635 13.0577C14.7635 15.0244 13.9068 16.7963 12.5444 18.025V17.2459C12.5444 15.6705 11.5383 14.324 10.1305 13.806C10.5191 13.335 10.7527 12.7334 10.7527 12.0785C10.7527 10.5728 9.51857 9.34779 8.00162 9.34779C6.48462 9.34779 5.25048 10.5728 5.25048 12.0785C5.25048 12.7334 5.48411 13.335 5.87274 13.806C4.46487 14.324 3.45878 15.6705 3.45878 17.2459V18.025C2.09632 16.7963 1.23965 15.0244 1.23965 13.0577C1.23965 9.35673 4.27306 6.34573 8.00162 6.34573C9.2749 6.34573 10.4668 6.6972 11.4848 7.3071V10.2198H14.1286C14.5357 11.0822 14.7635 12.044 14.7635 13.0577ZM17.7603 8.98935H15.8622V6.17064H14.6225V8.98935H12.7244V4.58255H17.7603L17.7603 8.98935Z" fill="#2BBEF9"/>
                                    </svg>
                                    <span class="fz-13">Đăng nhập / Đăng ký</span>
                                </a>
                            </li>
                            <li>
                                <div class="uk-inline" style="text-transform: inherit">
                                    <div class="fz-13 uk-flex uk-flex-middle" style="gap:3px;">
                                        <img src="assets/images/flag_vi.png" alt="">
                                        <span>Tiếng Việt</span>
                                        <span uk-drop-parent-icon></span>
                                    </div>
                                    <div class="uk-dropdown header__lang__dropnav" uk-drop="mode: click">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="#">Tiếng Việt</a></li>
                                            <li><a href="#">English</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-auto@s uk-text-center">
                                    <img src="assets/images/Logo-1-1024x625-1.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="exo-2-700 text-0054A5 width-386px fz-18"><?= $projectName ?></div>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@s">
                            <form class="header__formSearch uk-search uk-search-default uk-search-medium">
                                <input class="uk-search-input" type="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                                <button class="uk-search-icon-flip" uk-search-icon></button>
                            </form>
                        </div>
                        <ul class="uk-navbar-nav header__navRight">
                            <li>
                                <a href="#">
                                    <div class="uk-flex uk-flex-column uk-flex-middle">
                                        <div class="my-class">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                                <path d="M2.87451 5.74967C3.40159 5.74967 3.8335 6.18157 3.8335 6.70866V18.2087C3.83367 18.7356 4.26453 19.1667 4.7915 19.1667H16.2915C16.8185 19.1667 17.2493 19.5977 17.2495 20.1247C17.2495 20.6518 16.8186 21.0837 16.2915 21.0837H3.8335C2.77933 21.0837 1.9165 20.2208 1.9165 19.1667V6.70866C1.9165 6.18168 2.34758 5.74985 2.87451 5.74967ZM19.1665 1.91666C20.2207 1.91666 21.0835 2.77949 21.0835 3.83366V15.3337C21.0833 16.3877 20.2206 17.2497 19.1665 17.2497H7.6665C6.61245 17.2497 5.74969 16.3877 5.74951 15.3337V3.83366C5.74951 2.77949 6.61234 1.91666 7.6665 1.91666H19.1665ZM9.5835 12.4587C9.05641 12.4587 8.62451 12.8896 8.62451 13.4167C8.62451 13.9437 9.05641 14.3747 9.5835 14.3747H13.4165C13.9436 14.3747 14.3745 13.9437 14.3745 13.4167C14.3745 12.8896 13.9436 12.4587 13.4165 12.4587H9.5835ZM9.5835 8.62467C9.05641 8.62467 8.62451 9.05657 8.62451 9.58366C8.62469 10.1106 9.05652 10.5417 9.5835 10.5417H17.2495C17.7765 10.5417 18.2083 10.1106 18.2085 9.58366C18.2085 9.05657 17.7766 8.62467 17.2495 8.62467H9.5835ZM9.5835 4.79166C9.05652 4.79166 8.62469 5.22274 8.62451 5.74967C8.62451 6.27676 9.05641 6.70866 9.5835 6.70866H17.2495C17.7766 6.70866 18.2085 6.27676 18.2085 5.74967C18.2083 5.22274 17.7765 4.79166 17.2495 4.79166H9.5835Z" fill="#2BBEF9"/>
                                            </svg>
                                        </div>
                                        <div class="uk-navbar-subtitle fz-13">Gửi bài viết</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="uk-flex uk-flex-column uk-flex-middle">
                                        <div class="my-class">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M17.5049 3.6775C18.9547 3.6775 20.4945 3.89766 21.7744 4.46754C22.5043 4.79749 22.995 5.50729 22.9951 6.31715V17.5974C22.9951 18.9074 21.7746 19.8678 20.5146 19.5378C19.5348 19.2879 18.495 19.1775 17.4951 19.1775C15.9351 19.1775 14.2746 19.4274 12.9346 20.0974C12.3446 20.3973 11.6644 20.3974 11.0645 20.0974C9.72452 19.4376 8.06474 19.1775 6.50488 19.1775C5.505 19.1775 4.46525 19.2879 3.48535 19.5378C2.22535 19.8578 1.00488 18.8974 1.00488 17.5974V6.31715C1.00502 5.50738 1.49485 4.79754 2.22461 4.46754C3.51461 3.89754 5.05488 3.6775 6.50488 3.6775C8.45488 3.6775 10.5549 4.0775 12.0049 5.1775C13.4549 4.0775 15.5549 3.6775 17.5049 3.6775ZM17.5049 5.6775C15.8049 5.6775 13.3549 6.3275 12.0049 7.1775V18.6873C13.3549 17.8373 15.8049 17.1873 17.5049 17.1873C18.2748 17.1873 19.0547 17.2475 19.8047 17.3875C20.4245 17.4974 21.0046 17.0377 21.0049 16.408V6.93726C21.0048 6.46744 20.6649 6.05785 20.2051 5.95777C19.3351 5.76777 18.4249 5.6775 17.5049 5.6775Z" fill="#18364D"/>
                                            </svg>
                                        </div>
                                        <div class="uk-navbar-subtitle fz-13">Số hiện tại</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="uk-flex uk-flex-column uk-flex-middle">
                                        <div class="my-class">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M7.42236 16.958C8.4307 16.958 9.25537 17.7837 9.25537 18.792C9.25519 19.8002 8.43059 20.625 7.42236 20.625C6.41414 20.625 5.59832 19.8002 5.59814 18.792C5.59814 17.7837 6.41403 16.958 7.42236 16.958ZM16.5894 16.958C17.5975 16.9582 18.4224 17.7838 18.4224 18.792C18.4222 19.8001 17.5974 20.6248 16.5894 20.625C15.5811 20.625 14.7653 19.8002 14.7651 18.792C14.7651 17.7837 15.581 16.958 16.5894 16.958ZM4.34229 2.29199C4.69062 2.29199 5.02081 2.49362 5.16748 2.81445L8.82471 10.542H15.2603L18.3677 4.92285C18.606 4.48285 19.165 4.3271 19.605 4.56543C20.0447 4.81298 20.2097 5.37163 19.9624 5.81152L16.8638 11.4307C16.5522 11.9989 15.9476 12.3749 15.2603 12.375H8.43115L7.42236 14.208H17.5054C18.0095 14.208 18.4224 14.6208 18.4224 15.125C18.4224 15.6292 18.0095 16.042 17.5054 16.042H7.42236C6.02913 16.042 5.14898 14.5476 5.81787 13.3193L7.05615 11.082L3.75537 4.125H2.83936C2.33519 4.125 1.92236 3.71217 1.92236 3.20801C1.92254 2.70399 2.3353 2.29199 2.83936 2.29199H4.34229ZM12.0054 1.375C12.5095 1.375 12.9224 1.78783 12.9224 2.29199V4.125H14.7554C15.2595 4.125 15.6724 4.53783 15.6724 5.04199C15.6722 5.54601 15.2594 5.95801 14.7554 5.95801H12.9224V7.79199C12.9222 8.29601 12.5094 8.70801 12.0054 8.70801C11.5015 8.70783 11.0895 8.2959 11.0894 7.79199V5.95801H9.25537C8.75146 5.95783 8.33953 5.5459 8.33936 5.04199C8.33936 4.53793 8.75135 4.12518 9.25537 4.125H11.0894V2.29199C11.0894 1.78793 11.5014 1.37518 12.0054 1.375Z" fill="#656565"/>
                                            </svg>
                                        </div>
                                        <div class="uk-navbar-subtitle fz-13">Giỏ hàng</div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </nav>
        <div class="uk-container">
            <nav class="uk-navbar-container header__navbar uk-light uk-flex-center" uk-navbar>
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#" uk-icon="icon: home"></a></li>
                        <li>
                            <a href="#">Giới thiệu</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Số hiện tại</a></li>
                        <li><a href="#">Tạp chí điện tử</a></li>
                        <li><a href="#">Tác giả - Phản biện</a></li>
                        <li><a href="#">Ai trợ lý ảo hỗ trợ</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>