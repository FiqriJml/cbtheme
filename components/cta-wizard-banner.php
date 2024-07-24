<?php
$data = getData();
$tasks = isset($data['tasks']) ? $data['tasks'] : array();
?>
<div class="hero" style="background-image: url(<?php echo $data['bg_image']; ?>);">
    <div class="left">
        <div class="heading">
            <?php if (!empty($data['heading'])): ?>
                <h1><?php echo $data['heading']; ?></h1>
            <?php endif; ?>
            <div class="label">
                <?php if (!empty($data['text-price'])): ?>
                    <h1><?php echo $data['text-price']; ?></h1>
                <?php endif; ?>
                <div>
                    <?php if (!empty($data['pricing'])): ?>
                        <h1 class="price"><?php echo $data['pricing']; ?></h1>
                    <?php endif; ?>
                    <span>
                        <?php if (!empty($data['tag-price'])): ?>
                            <p><?php echo $data['tag-price']; ?></p>
                        <?php endif; ?>

                    </span>
                </div>
            </div>
        </div>
        <button class="call-to-action">Get Started <i class="fa fa-arrow-right"></i></button>
        <div class="content-banner">
            <p>We do everything so you don’t have to:</p>
            <?php if (!empty($tasks)): ?>
                <div class="tasks">
                    <?php foreach ($tasks as $task): ?>
                        <span><i class="fas fa-check"></i><?php echo esc_html($task['task']); ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="banner-footer">
                <div class="rated">
                    <span>Rated Excellent</span>
                    <svg width="129" height="24" viewBox="0 0 129 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2701_518)">
                            <path d="M24.1875 0H0V24H24.1875V0Z" fill="#00B67A" />
                            <path d="M50.3906 0H26.2031V24H50.3906V0Z" fill="#00B67A" />
                            <path d="M76.5938 0H52.4062V24H76.5938V0Z" fill="#00B67A" />
                            <path d="M102.797 0H78.6094V24H102.797V0Z" fill="#00B67A" />
                            <path d="M129 0H116.906V24H129V0Z" fill="#C1C1C6" />
                            <path d="M116.906 0H104.812V24H116.906V0Z" fill="#00B67A" />
                            <path
                                d="M12.0937 16.175L15.7722 15.25L17.3091 19.95L12.0937 16.175ZM20.5593 10.1H14.0841L12.0937 4.04999L10.1033 10.1H3.62808L8.86871 13.85L6.87828 19.9L12.1189 16.15L15.3439 13.85L20.5593 10.1Z"
                                fill="white" />
                            <path
                                d="M38.2971 16.175L41.9756 15.25L43.5125 19.95L38.2971 16.175ZM46.7627 10.1H40.2875L38.2971 4.04999L36.3066 10.1H29.8314L35.0721 13.85L33.0816 19.9L38.3222 16.15L41.5472 13.85L46.7627 10.1Z"
                                fill="white" />
                            <path
                                d="M64.5002 16.175L68.1787 15.25L69.7156 19.95L64.5002 16.175ZM72.9658 10.1H66.4906L64.5002 4.04999L62.5097 10.1H56.0345L61.2752 13.85L59.2847 19.9L64.5254 16.15L67.7504 13.85L72.9658 10.1Z"
                                fill="white" />
                            <path
                                d="M90.7033 16.175L94.3818 15.25L95.9187 19.95L90.7033 16.175ZM99.1689 10.1H92.6937L90.7033 4.04999L88.7129 10.1H82.2377L87.4783 13.85L85.4879 19.9L90.7285 16.15L93.9535 13.85L99.1689 10.1Z"
                                fill="white" />
                            <path
                                d="M116.906 16.175L120.585 15.25L122.122 19.95L116.906 16.175ZM125.372 10.1H118.897L116.906 4.04999L114.916 10.1H108.441L113.681 13.85L111.691 19.9L116.932 16.15L120.157 13.85L125.372 10.1Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2701_518">
                                <rect width="129" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <div class="review">
                    <span><?php echo $data['reviews_count'] ?> reviews on</span>
                    <svg width="131" height="32" viewBox="0 0 131 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M34.4066 11.3402H47.6503V13.7951H42.4357V27.6334H39.5775V13.7951H34.3848L34.4066 11.3402ZM47.083 15.8371H49.5267V18.1182H49.5703C49.6576 17.7923 49.8103 17.4882 50.0285 17.184C50.2467 16.8799 50.5085 16.5975 50.8358 16.3585C51.1412 16.0978 51.4903 15.9023 51.8831 15.7502C52.254 15.5982 52.6467 15.5113 53.0394 15.5113C53.3449 15.5113 53.5631 15.533 53.6722 15.533C53.7813 15.5547 53.9122 15.5764 54.0213 15.5764V18.0747C53.8467 18.0313 53.6503 18.0096 53.454 17.9878C53.2576 17.9661 53.0831 17.9444 52.8867 17.9444C52.4503 17.9444 52.0358 18.0313 51.6431 18.2051C51.2503 18.3789 50.9231 18.6396 50.6176 18.9654C50.334 19.313 50.094 19.7258 49.9194 20.2254C49.7449 20.7251 49.6576 21.3117 49.6576 21.9634V27.5683H47.0394L47.083 15.8371ZM66.0213 27.6334H63.4468V25.9824H63.4031C63.0759 26.5907 62.5959 27.0469 61.9631 27.4162C61.3304 27.7855 60.6758 27.9593 60.0213 27.9593C58.4722 27.9593 57.3376 27.59 56.6395 26.8079C55.9413 26.0476 55.5922 24.8744 55.5922 23.332V15.8371H58.2104V23.0713C58.2104 24.1141 58.4067 24.8527 58.8213 25.2655C59.214 25.7 59.7813 25.9172 60.5013 25.9172C61.0468 25.9172 61.5049 25.8303 61.8759 25.6565C62.2468 25.4827 62.5522 25.2655 62.7704 24.9831C63.0104 24.7007 63.1631 24.3531 63.2722 23.962C63.3813 23.571 63.425 23.1365 63.425 22.6803V15.8371H66.0432V27.6334H66.0213ZM70.4723 23.8534C70.5595 24.6138 70.8432 25.1351 71.345 25.461C71.8468 25.7651 72.4577 25.9172 73.1559 25.9172C73.3959 25.9172 73.6796 25.8955 73.985 25.852C74.2905 25.8086 74.5959 25.7434 74.8578 25.6348C75.1414 25.5262 75.3596 25.3741 75.5341 25.1569C75.7087 24.9396 75.7959 24.6789 75.7741 24.3531C75.7523 24.0272 75.6432 23.7448 75.4032 23.5275C75.1632 23.3103 74.8796 23.1582 74.5305 23.0062C74.1814 22.8758 73.7668 22.7672 73.3087 22.6803C72.8505 22.5934 72.3923 22.4848 71.9123 22.3762C71.4323 22.2675 70.9523 22.1372 70.4941 21.9851C70.0359 21.833 69.6432 21.6375 69.2723 21.3551C68.9232 21.0944 68.6177 20.7686 68.4213 20.3558C68.2032 19.943 68.0941 19.4651 68.0941 18.8568C68.0941 18.2051 68.2468 17.6837 68.5741 17.2492C68.8795 16.8147 69.2941 16.4671 69.7741 16.2065C70.2541 15.9458 70.7995 15.7502 71.3886 15.6416C71.9777 15.533 72.545 15.4895 73.0686 15.4895C73.6796 15.4895 74.2687 15.5547 74.8141 15.6851C75.3596 15.8154 75.8832 16.0109 76.3196 16.3151C76.7778 16.5975 77.1487 16.9885 77.4323 17.4447C77.7378 17.9009 77.9123 18.4658 77.9996 19.1175H75.2723C75.1414 18.4875 74.8578 18.0747 74.4214 17.8575C73.9632 17.6403 73.4614 17.5316 72.8723 17.5316C72.6977 17.5316 72.4577 17.5534 72.2177 17.5751C71.9559 17.6185 71.7377 17.662 71.4977 17.7489C71.2795 17.8358 71.0832 17.9661 70.9305 18.1182C70.7777 18.2703 70.6905 18.4875 70.6905 18.7482C70.6905 19.0741 70.7995 19.313 71.0177 19.5085C71.2359 19.7041 71.5195 19.8561 71.8905 20.0082C72.2396 20.1385 72.6541 20.2472 73.1123 20.3341C73.5705 20.421 74.0505 20.5296 74.5305 20.6382C75.0105 20.7468 75.4687 20.8772 75.9268 21.0292C76.385 21.1813 76.7996 21.3768 77.1487 21.6593C77.4978 21.9199 77.8032 22.2458 78.0214 22.6368C78.2396 23.0279 78.3487 23.5275 78.3487 24.0924C78.3487 24.7875 78.196 25.3741 77.8687 25.8738C77.5414 26.3517 77.1269 26.7645 76.625 27.0686C76.1232 27.3727 75.5341 27.59 74.9232 27.7421C74.2905 27.8724 73.6796 27.9593 73.0686 27.9593C72.3268 27.9593 71.6286 27.8724 70.9959 27.6986C70.3632 27.5248 69.7959 27.2641 69.3377 26.9383C68.8795 26.5907 68.5086 26.1779 68.2468 25.6565C67.985 25.1569 67.8322 24.5486 67.8104 23.8317H70.4505V23.8534H70.4723ZM79.0905 15.8371H81.076V12.2744H83.6942V15.8154H86.0505V17.7489H83.6942V24.0489C83.6942 24.3313 83.716 24.5486 83.7378 24.7658C83.7596 24.9613 83.8251 25.1351 83.8905 25.2655C83.9778 25.3958 84.1087 25.5045 84.2615 25.5696C84.436 25.6348 84.6542 25.6782 84.9596 25.6782C85.1342 25.6782 85.3305 25.6782 85.5051 25.6565C85.6796 25.6348 85.876 25.6131 86.0505 25.5696V27.59C85.7669 27.6334 85.4833 27.6552 85.1996 27.6769C84.916 27.7203 84.6542 27.7203 84.3487 27.7203C83.6505 27.7203 83.1051 27.6552 82.6905 27.5248C82.276 27.3945 81.9487 27.1989 81.7087 26.96C81.4687 26.6993 81.316 26.3951 81.2287 26.0258C81.1414 25.6565 81.0978 25.2003 81.076 24.7224V17.7706H79.0905V15.7937V15.8371ZM87.8833 15.8371H90.3488V17.4447H90.3924C90.7633 16.7496 91.2651 16.2716 91.9197 15.9675C92.5742 15.6633 93.2724 15.5113 94.0579 15.5113C94.9961 15.5113 95.8033 15.6633 96.5015 16.0109C97.1997 16.3368 97.767 16.7713 98.2252 17.3578C98.6834 17.9227 99.0324 18.5961 99.2506 19.3565C99.4688 20.1168 99.5997 20.9423 99.5997 21.7896C99.5997 22.5934 99.4906 23.3537 99.2943 24.0924C99.0761 24.831 98.7706 25.5044 98.3561 26.0693C97.9415 26.6341 97.4179 27.0903 96.7633 27.4379C96.1088 27.7855 95.367 27.9593 94.4942 27.9593C94.1233 27.9593 93.7306 27.9158 93.3597 27.8507C92.9888 27.7855 92.6179 27.6769 92.2688 27.5248C91.9197 27.3727 91.5924 27.1772 91.3088 26.9383C91.0033 26.6993 90.7633 26.4169 90.5669 26.1127H90.5233V32H87.9051V15.8371H87.8833ZM97.0252 21.7461C97.0252 21.2248 96.9597 20.7034 96.807 20.2037C96.6761 19.7041 96.4579 19.2696 96.1742 18.8785C95.8906 18.4875 95.5415 18.1834 95.1488 17.9444C94.7342 17.7054 94.2542 17.5968 93.7306 17.5968C92.6397 17.5968 91.8106 17.9661 91.2433 18.7265C90.6979 19.4868 90.4142 20.5079 90.4142 21.7679C90.4142 22.3762 90.4797 22.9193 90.6324 23.4189C90.7851 23.9186 90.9815 24.3531 91.2869 24.7224C91.5706 25.0917 91.9197 25.3741 92.3342 25.5913C92.7488 25.8086 93.207 25.9172 93.7524 25.9172C94.3633 25.9172 94.8433 25.7869 95.2579 25.5479C95.6724 25.3089 95.9997 24.9831 96.2833 24.6138C96.5452 24.2227 96.7415 23.7882 96.8506 23.2886C96.9597 22.7672 97.0252 22.2675 97.0252 21.7461ZM101.629 11.3402H104.247V13.7951H101.629V11.3402ZM101.629 15.8371H104.247V27.6334H101.629V15.8371ZM106.582 11.3402H109.2V27.6334H106.582V11.3402ZM117.185 27.9593C116.247 27.9593 115.396 27.8072 114.654 27.4814C113.913 27.1555 113.302 26.7427 112.778 26.1996C112.276 25.6565 111.883 24.9831 111.622 24.2227C111.36 23.4624 111.207 22.6151 111.207 21.7244C111.207 20.8337 111.338 20.0082 111.622 19.2479C111.883 18.4875 112.276 17.8358 112.778 17.2709C113.28 16.7278 113.913 16.2933 114.654 15.9892C115.396 15.6851 116.247 15.5113 117.185 15.5113C118.123 15.5113 118.974 15.6633 119.716 15.9892C120.458 16.2933 121.069 16.7278 121.593 17.2709C122.094 17.814 122.487 18.4875 122.749 19.2479C123.011 20.0082 123.164 20.8337 123.164 21.7244C123.164 22.6368 123.033 23.4624 122.749 24.2227C122.465 24.9831 122.094 25.6348 121.593 26.1996C121.091 26.7427 120.458 27.1772 119.716 27.4814C118.974 27.7855 118.145 27.9593 117.185 27.9593ZM117.185 25.8955C117.753 25.8955 118.276 25.7651 118.691 25.5262C119.127 25.2872 119.454 24.9613 119.738 24.5703C120.022 24.1793 120.218 23.7231 120.349 23.2451C120.48 22.7455 120.545 22.2458 120.545 21.7244C120.545 21.2248 120.48 20.7251 120.349 20.2254C120.218 19.7258 120.022 19.2913 119.738 18.9003C119.454 18.5092 119.105 18.2051 118.691 17.9661C118.254 17.7272 117.753 17.5968 117.185 17.5968C116.618 17.5968 116.094 17.7272 115.68 17.9661C115.243 18.2051 114.916 18.5309 114.633 18.9003C114.349 19.2913 114.153 19.7258 114.022 20.2254C113.891 20.7251 113.825 21.2248 113.825 21.7244C113.825 22.2458 113.891 22.7455 114.022 23.2451C114.153 23.7448 114.349 24.1793 114.633 24.5703C114.916 24.9613 115.265 25.2872 115.68 25.5262C116.116 25.7869 116.618 25.8955 117.185 25.8955ZM123.949 15.8371H125.934V12.2744H128.553V15.8154H130.909V17.7489H128.553V24.0489C128.553 24.3313 128.574 24.5486 128.596 24.7658C128.618 24.9613 128.684 25.1351 128.749 25.2655C128.836 25.3958 128.967 25.5045 129.12 25.5696C129.294 25.6348 129.513 25.6782 129.818 25.6782C129.993 25.6782 130.189 25.6782 130.364 25.6565C130.538 25.6348 130.734 25.6131 130.909 25.5696V27.59C130.625 27.6334 130.342 27.6552 130.058 27.6769C129.774 27.7203 129.513 27.7203 129.207 27.7203C128.509 27.7203 127.964 27.6552 127.549 27.5248C127.134 27.3945 126.807 27.1989 126.567 26.96C126.327 26.6993 126.174 26.3951 126.087 26.0258C126 25.6565 125.956 25.2003 125.934 24.7224V17.7706H123.949V15.7937V15.8371Z"
                            fill="white" />
                        <path
                            d="M31.3529 11.3401H19.3747L15.6874 0L11.9783 11.3401L0 11.3184L9.68734 18.3353L5.97822 29.6754L15.6656 22.6584L25.3529 29.6754L21.6656 18.3353L31.3529 11.3401Z"
                            fill="#00B67A" />
                        <path d="M22.4946 20.8987L21.6655 18.3352L15.6873 22.6583L22.4946 20.8987Z" fill="#005128" />
                    </svg>

                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <img src="<?php echo $data['image'] ?>" alt="">
    </div>
</div>