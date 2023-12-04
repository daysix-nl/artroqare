<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block' ); ?>>
<header id="site-header" class="fixed z-[9999] w-full h-[91px] flex items-center bg-transparent duration-300">
    <div class="w-[337px] px-[15px] md:px-[unset] md:w-[728px] lg:w-[1130px] xl:w-[1274px] mx-auto">
        <div class="flex justify-between items-center">
            <a href="/" class="logo">
                <div class="flex items-center">
                    <div class="h-[42.44px] w-[36.19px] md:h-[45px] md:w-[38.37px] lg:h-[52.92px] ld:w-[45.12px]">
                        <svg width="auto" height="100%" viewBox="0 0 45.2 53.0088246" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group">
                                    <path d="M10.371,15.2088246 C9.68,15.2088246 9.12,15.9818246 9.12,16.9348246 C9.12,17.8878246 9.681,18.6598246 10.371,18.6598246 C11.061,18.6598246 11.622,17.8878246 11.622,16.9348246 C11.622,15.9818246 11.062,15.2088246 10.371,15.2088246" id="Path_1" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M24.151,17.8498246 C25.089,17.6788246 25.751,16.9888246 25.624,16.3088246 C25.3299045,15.5393703 24.4844423,15.1353246 23.701,15.3898246 C22.763,15.5608246 22.101,16.2508246 22.228,16.9308246 C22.5221042,17.7003056 23.3673163,18.1046712 24.151,17.8508246" id="Path_2" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M13.094,28.3398246 C13.8386516,28.6925208 14.7290695,28.3996722 15.119,27.6738246 C15.329,27.0158246 14.764,26.2468246 13.855,25.9568246 C13.1106391,25.6042256 12.2205415,25.8971134 11.831,26.6228246 C11.621,27.2808246 12.186,28.0498246 13.094,28.3398246" id="Path_3" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M12.795,37.2588246 C13.739,37.1248246 14.425,36.4588246 14.328,35.7778246 C14.231,35.0968246 13.387,34.6468246 12.443,34.7778246 C11.499,34.9088246 10.813,35.5778246 10.91,36.2588246 C11.007,36.9398246 11.851,37.3888246 12.795,37.2588246" id="Path_4" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M32.535,34.7828246 C31.591,34.6488246 30.747,35.0948246 30.65,35.7828246 C30.553,36.4708246 31.24,37.1298246 32.183,37.2638246 C33.126,37.3978246 33.971,36.9518246 34.068,36.2638246 C34.165,35.5758246 33.478,34.9168246 32.535,34.7828246" id="Path_5" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M19.346,17.2318246 C18.657,17.1758246 18.037,17.8998246 17.959,18.8508246 C17.881,19.8018246 18.377,20.6168246 19.066,20.6728246 C19.755,20.7288246 20.376,20.0038246 20.454,19.0538246 C20.532,18.1038246 20.035,17.2878246 19.346,17.2318246" id="Path_6" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M19.41,9.58482458 C18.9215764,8.92035673 17.9977936,8.7558354 17.31,9.21082458 C16.452,9.62682458 16.001,10.4668246 16.302,11.0888246 C16.7904236,11.7532924 17.7142064,11.9178138 18.402,11.4628246 C19.26,11.0468246 19.711,10.2068246 19.41,9.58482458" id="Path_7" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M22.947,24.7428246 C22.256,24.7158246 21.667,25.4658246 21.63,26.4188246 C21.593,27.3718246 22.122,28.1648246 22.813,28.1918246 C23.504,28.2188246 24.093,27.4678246 24.13,26.5158246 C24.167,25.5638246 23.638,24.7698246 22.948,24.7428246" id="Path_8" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M8.863,20.9168246 C7.85079744,22.5986436 8.33810117,24.7789646 9.97,25.8698246 C10.0087464,25.8953559 10.0564103,25.9035044 10.1014378,25.8922951 C10.1464653,25.8810857 10.1847458,25.8515417 10.207,25.8108246 C11.1365703,24.0821977 10.5450472,21.9282439 8.863,20.9168246" id="Path_9" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M35.812,16.9348246 C35.812,15.9818246 35.252,15.2088246 34.561,15.2088246 C33.87,15.2088246 33.31,15.9818246 33.31,16.9348246 C33.31,17.8878246 33.87,18.6608246 34.561,18.6608246 C35.252,18.6608246 35.812,17.8878246 35.812,16.9348246" id="Path_10" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M31.077,25.9608246 C30.169,26.2508246 29.603,27.0188246 29.814,27.6778246 C30.2048837,28.4014826 31.0939295,28.6924111 31.837,28.3398246 C32.746,28.0498246 33.311,27.2818246 33.101,26.6228246 C32.7110695,25.8969769 31.8206516,25.6041284 31.076,25.9568246" id="Path_11" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M36.182,21.0118246 C34.5763692,22.0843479 34.0493817,24.2018247 34.965,25.9018246 C34.9874705,25.9423118 35.0257425,25.9716519 35.070676,25.9828379 C35.1156095,25.9940239 35.1631703,25.9860514 35.202,25.9608246 C36.8077739,24.8879371 37.3347371,22.7701254 36.419,21.0698246 C36.3965295,21.0293373 36.3582575,20.9999972 36.313324,20.9888113 C36.2683905,20.9776253 36.2208297,20.9855977 36.182,21.0108246" id="Path_12" fill="#064F51" fill-rule="nonzero"></path>
                                    <path d="M39.047,7.27782458 C34.942448,2.4971055 28.8983436,-0.174177702 22.6,0.00882457618 C16.3029,-0.173683088 10.2602208,2.49761994 6.157,7.27782458 C2.13,12.0088246 0,18.6428246 0,26.4688246 C0,34.2948246 2.13,40.9318246 6.157,45.6618246 C10.2602208,50.4420292 16.3029,53.1133322 22.6,52.9308246 C27.022184,53.0147418 31.3638387,51.741213 35.04,49.2818246 C35.063,49.2668246 35.087,49.2538246 35.109,49.2388246 L35.109,49.2388246 C36.5713714,48.2236458 37.8951885,47.0221928 39.047,45.6648246 C43.075,40.9318246 45.2,34.2958246 45.2,26.4688246 C45.2,18.6418246 43.075,12.0088246 39.047,7.27782458 M16.226,50.5588246 C19.0497194,50.0849641 21.4472011,48.2257232 22.609,45.6088246 C23.7703265,48.2208847 26.1632477,50.0772479 28.982,50.5528246 C26.9108175,51.163341 24.7612449,51.4665723 22.602,51.4528246 C20.4441157,51.4658637 18.2959653,51.1626429 16.226,50.5528246 M34.247,48.0398246 C32.0868446,49.4634304 29.3193995,49.5857549 27.0420636,48.3582917 C24.7647276,47.1308285 23.3454389,44.7518929 23.347,42.1648246 L23.347,41.9278246 C23.4417034,40.5064967 23.8832452,39.1300262 24.633,37.9188246 C24.6596817,37.877138 24.7035732,37.8495318 24.7527029,37.8435357 C24.8018326,37.8375395 24.8510754,37.8537789 24.887,37.8878246 C26.4224441,39.2900434 28.7511768,39.3626571 30.371,38.0588246 C29.3292298,36.7657122 27.6245443,36.2059706 26.019,36.6298246 C25.9478074,36.6473914 25.8735633,36.6158669 25.8367596,36.552444 C25.7999558,36.4890212 25.8094239,36.4089191 25.86,36.3558246 C28.4088489,33.7646837 32.2913046,33.0130867 35.623,34.4658246 C35.7047654,34.5019225 35.8003792,34.4659005 35.838,34.3848246 L36.31,33.3558246 C36.3285328,33.3152764 36.3300831,33.2690012 36.3143056,33.2273035 C36.2985281,33.1856059 36.2667329,33.1519479 36.226,33.1338246 C35.5175829,32.8222508 34.7757206,32.5930821 34.015,32.4508246 C33.9547132,32.4405357 33.9051599,32.3975561 33.8864516,32.3393293 C33.8677434,32.2811025 33.8829886,32.2173031 33.926,32.1738246 C34.7098926,31.4087211 35.2783126,30.4505472 35.574,29.3958246 C35.6383335,29.167231 35.6897481,28.9351973 35.728,28.7008246 C35.7348353,28.6565729 35.7235039,28.6114366 35.6965779,28.5756607 C35.6696518,28.5398848 35.6294148,28.5165037 35.585,28.5108246 L34.464,28.3588246 C34.3756177,28.3468617 34.2938775,28.4077226 34.28,28.4958246 C34.25,28.6648246 34.213,28.8338246 34.166,28.9958246 C33.6828905,30.7282699 32.2674802,32.0424138 30.504,32.3958246 L30.504,32.3958246 C28.1501809,32.7711879 26.0010409,33.9559203 24.427,35.7458246 C24.3760081,35.8044206 24.2912004,35.8198211 24.2228622,35.7828945 C24.1545241,35.7459679 24.1209304,35.6665892 24.142,35.5918246 C24.36026,34.8473206 24.6275097,34.1180632 24.942,33.4088246 L25.567,32.0598246 C25.6019296,31.9842735 25.6879153,31.9468697 25.767,31.9728246 C27.7665981,32.5690738 29.9012951,31.6110551 30.785,29.7208246 C29.5416567,29.1382889 28.0920754,29.2002751 26.903,29.8868246 C26.840963,29.9216026 26.7635806,29.9124319 26.7113911,29.8641168 C26.6592016,29.8158016 26.644101,29.7393548 26.674,29.6748246 L29.1,24.4378246 C29.1341803,24.3668206 29.2135701,24.3296328 29.29,24.3488246 C30.9561137,24.747283 32.6646124,23.8750115 33.319,22.2918246 C33.3361005,22.2486966 33.3343724,22.2003804 33.3142343,22.1585844 C33.2940962,22.1167884 33.2573861,22.0853271 33.213,22.0718246 C32.0392592,21.7218987 30.7679845,22.0134302 29.864,22.8398246 C29.946,22.6638246 30.021,22.4868246 30.088,22.3078246 L30.088,22.2988246 L30.316,21.8068246 C31.7545505,18.5653151 32.5066574,15.0611572 32.525,11.5148246 C32.525,11.422593 32.4502316,11.3478246 32.358,11.3478246 L31.229,11.3478246 C31.1389776,11.3478246 31.066,11.4208022 31.066,11.5108246 C31.0548764,13.3760823 30.8297369,15.2339023 30.395,17.0478246 C30.3772366,17.1180479 30.3157505,17.1684743 30.2434085,17.1721488 C30.1710666,17.1758234 30.1047874,17.1318866 30.08,17.0638246 C29.7518812,16.1770629 29.2600085,15.3598759 28.63,14.6548246 C28.6171802,14.641527 28.6070002,14.6259176 28.6,14.6088246 C27.957781,13.1965777 27.9552302,11.5760863 28.593,10.1618246 C28.629646,10.0811252 28.5955461,9.98591097 28.516,9.94682458 L27.5,9.45882458 C27.4597793,9.43911435 27.4133005,9.43649403 27.3711193,9.45155873 C27.3289382,9.46662342 27.2946348,9.49809453 27.276,9.53882458 C26.7683108,10.6538285 26.5687207,11.8845188 26.698,13.1028246 L26.698,13.1028246 C26.2336178,12.8439881 25.7432408,12.6348321 25.235,12.4788246 C25.1586902,12.4549919 25.111427,12.3787746 25.124,12.2998246 C25.4269053,10.1731463 24.0808587,8.15924688 22,7.62582458 C21.6005695,9.17489462 22.1140476,10.8164744 23.325,11.8618246 C23.3761055,11.907827 23.392847,11.9809519 23.366847,12.0446072 C23.340847,12.1082624 23.2776979,12.148756 23.209,12.1458246 C22.2968098,12.1214576 21.3877636,12.2627443 20.526,12.5628246 C20.4841161,12.5779256 20.4499963,12.6091264 20.4312195,12.6494964 C20.4124428,12.6898665 20.4105638,12.736063 20.426,12.7778246 L20.826,13.8398246 C20.8400639,13.880627 20.8698275,13.9141309 20.9086885,13.9329043 C20.9475496,13.9516778 20.9922953,13.9541687 21.033,13.9398246 C23.2693495,13.1698804 25.7492508,13.766258 27.391,15.4688246 C27.4,15.4868246 27.407,15.5048246 27.417,15.5218246 L27.435,15.5128246 C29.0071995,17.1811478 29.5113133,19.5900774 28.74,21.7488246 L28.733,21.7658246 L28.09,23.1388246 C28.0585239,23.2042488 27.9879815,23.2414112 27.9162236,23.2303715 C27.8444656,23.2193318 27.7883555,23.1626845 27.778,23.0908246 C27.5771118,21.8420604 26.6921636,20.8118106 25.488,20.4248246 C24.969711,22.0397765 25.7354998,23.7878845 27.274,24.5018246 C27.314159,24.5197323 27.3455091,24.5529285 27.3610922,24.5940454 C27.3766753,24.6351622 27.3752022,24.6807982 27.357,24.7208246 L23.609,32.8148246 C23.2773155,33.5628598 22.993086,34.3310479 22.758,35.1148246 C22.7370976,35.1840545 22.6733166,35.231422 22.601,35.231422 C22.5286834,35.231422 22.4649024,35.1840545 22.444,35.1148246 C22.207759,34.3263409 21.9221962,33.5534842 21.589,32.8008246 L19.751,28.8338246 L19.745,28.8178246 C18.8239105,26.2941967 19.8818014,23.4759855 22.236,22.1818246 C22.3147901,22.1397866 22.3454624,22.0424353 22.305,21.9628246 L21.79,20.9538246 C21.7695241,20.914098 21.7340627,20.8841676 21.6914612,20.8706552 C21.6488598,20.8571428 21.6026301,20.8611624 21.563,20.8818246 C19.9719001,21.7428877 18.7841253,23.1961693 18.257,24.9268246 C18.2372704,24.9920636 18.179247,25.0382998 18.1112499,25.0429663 C18.0432528,25.0476328 17.979457,25.0097566 17.951,24.9478246 L16.221,21.2118246 C15.8770351,20.4341883 15.5739549,19.6391035 15.313,18.8298246 C15.2886738,18.7472446 15.3323403,18.6599116 15.413,18.6298246 C17.4000599,17.8583112 18.4972288,15.7236627 17.968,13.6588246 C17.9560479,13.6146871 17.9264183,13.5774347 17.8861023,13.5558571 C17.8457863,13.5342796 17.798355,13.5302881 17.755,13.5448246 C16.3780734,14.02274 15.3461862,15.1786958 15.027,16.6008246 C15.0101015,16.6761662 14.9432135,16.7297136 14.866,16.7297136 C14.7887865,16.7297136 14.7218985,16.6761662 14.705,16.6008246 C14.3367817,14.9295787 14.1460577,13.2241242 14.136,11.5128246 C14.1354501,11.4226406 14.0621856,11.3498229 13.972,11.3498246 L12.842,11.3498246 C12.7501592,11.3503745 12.6759984,11.4249821 12.676,11.5168246 C12.6951894,15.0661675 13.4490096,18.5730998 14.89,21.8168246 L15.254,22.6038246 C14.3991669,21.7788505 13.1934864,21.4266797 12.029,21.6618246 C11.9841461,21.6718496 11.945456,21.7000222 11.9221448,21.7396323 C11.8988336,21.7792424 11.8929879,21.8267445 11.906,21.8708246 C12.4353837,23.5987376 14.1591795,24.6705057 15.943,24.3808246 C16.0157662,24.3678001 16.0882519,24.4050667 16.12,24.4718246 L18.393,29.3808246 L18.393,29.3888246 C18.4823787,29.6258454 18.5845283,29.8578519 18.699,30.0838246 L18.712,30.0778246 L18.819,30.3078246 C17.565028,29.2642948 15.8212286,29.0387228 14.343,29.7288246 C15.2379086,31.6416735 17.410763,32.5964126 19.425,31.9618246 C19.5038248,31.9357284 19.5897165,31.9726619 19.625,32.0478246 L20.254,33.4048246 C20.5685526,34.1177984 20.8357978,34.8507185 21.054,35.5988246 C21.0761085,35.6740966 21.0425029,35.7545693 20.9734285,35.7917632 C20.9043541,35.8289571 20.818672,35.8127162 20.768,35.7528246 C19.1954829,33.966762 17.0498559,32.7843335 14.7,32.4088246 L14.7,32.4088246 C12.9360269,32.0559659 11.5200673,30.7416709 11.037,29.0088246 C10.9905297,28.844203 10.9524803,28.6773199 10.923,28.5088246 C10.90912,28.4211632 10.8280215,28.3604501 10.74,28.3718246 L9.619,28.5238246 C9.574523,28.5295209 9.53420524,28.552864 9.50712085,28.5886004 C9.48003646,28.6243367 9.46846111,28.6694636 9.475,28.7138246 C9.51393492,28.9480655 9.56534133,29.180062 9.629,29.4088246 C9.92532127,30.4635039 10.4940417,31.421603 11.278,32.1868246 C11.3210114,32.2303031 11.3362566,32.2941025 11.3175484,32.3523293 C11.2988401,32.4105561 11.2492868,32.4535357 11.189,32.4638246 C10.3718062,32.6142152 9.57618125,32.8644223 8.82,33.2088246 L9.364,34.3908246 C9.40122262,34.4723281 9.49725171,34.5085065 9.579,34.4718246 C12.9237156,33.0135554 16.8218206,33.7772495 19.369,36.3898246 C19.421796,36.4441783 19.4307845,36.5275052 19.3907945,36.5918679 C19.3508045,36.6562305 19.2721168,36.6850821 19.2,36.6618246 C17.5715918,36.1902526 15.8192434,36.7421734 14.755,38.0618246 C16.3933787,39.3800672 18.7529359,39.2883137 20.284,37.8468246 C20.3195323,37.812114 20.3687413,37.7951395 20.4181172,37.8005611 C20.467493,37.8059828 20.5118462,37.8332308 20.539,37.8748246 C21.3078918,39.0915202 21.7644072,40.4792719 21.868,41.9148246 L21.868,42.1678246 C21.8679601,44.7853851 20.4142432,47.1863583 18.0948395,48.399614 C15.7754357,49.6128696 12.974139,49.4376491 10.824,47.9448246 L10.824,47.9448246 C4.924,43.8148246 1.474,36.2568246 1.474,26.4628246 C1.474,11.2818246 9.768,1.47282458 22.605,1.47282458 C35.442,1.47282458 43.733,11.2888246 43.733,26.4688246 C43.733,36.3378246 40.226,43.9358246 34.247,48.0448246" id="Path_13" fill="#064F51" fill-rule="nonzero"></path>
                                    <rect id="Rectangle_1" x="0" y="0.00882457618" width="45" height="53"></rect>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-[7px]">
                        <p class="font-britti text-26 leading-26 font-normal text-[#064F51]">ArtroQare</p>
                    </div>
                </div>
            </a>
            <?php
            if( have_rows('hoofdmenu', 'option') ):
                while( have_rows('hoofdmenu', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('link', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
<<<<<<< HEAD
                <a href="<?php echo $link_url; ?>" class="hidden md:block md:text-18 md:leading-18 lg:text-24 lg:leading-24 font-britti font-normal text-[#064F51] hover:text-[#95CD6C] duration-300" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
=======

                <div class="relative hover-dropdown pt-1">
                     <a href="<?php echo $link_url; ?>" class="hidden md:block md:text-18 md:leading-18 lg:text-24 lg:leading-24 font-britti font-normal text-[#064F51] hover:text-[#95CD6C] duration-300 pb-1" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <ul class="dropdown-menu absolute hidden bg-white py-[35px] px-[25px] border-[20px] space-y-[15px]">
                            <li class=""><a class="md:text-18 md:leading-18 lg:text-24 lg:leading-24 font-britti font-normal text-[#064F51] hover:text-[#95CD6C] duration-300" href="#">Behandeling 1</a></li>
                            <li class=""><a class="md:text-18 md:leading-18 lg:text-24 lg:leading-24 font-britti font-normal text-[#064F51] hover:text-[#95CD6C] duration-300" href="#">Behandeling 2</a></li>
                        </ul>
                </div>
>>>>>>> 1f1288d (Add new files and blocks)
                <?php
                endwhile;
            else :
            endif;
            ?>
            <?php
            $link = get_field('cta_link', 'option');
            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
            ?>
            <?php if (get_field('cta_link', 'option')): ?>   
            <a href="<?php echo $link_url; ?>" class="hidden md:flex w-fit h-[45px] px-[15px] bg-[#FFE863] rounded-[6px] items-center font-britti font-normal md:text-19 lg:text-22 text-[#064F51] hover:bg-[#95CD6C] duration-300"><?php echo $link_text; ?>
                <div class="ml-[15px]">
                    <svg width="15px" height="12.862883px" viewBox="0 0 15 12.862883" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="arrow-right-solid" fill="#064F51" fill-rule="nonzero">
                                <path d="M14.6860874,7.18818014 C15.1046375,6.76963 15.1046375,6.08990457 14.6860874,5.67135443 L9.32864557,0.313912607 C8.91009543,-0.104637536 8.2337184,-0.104637536 7.81516826,0.313912607 C7.39661811,0.732462749 7.39326971,1.41218818 7.81181986,1.83073832 L11.3443831,5.35995312 L1.07148836,5.35995312 C0.478821363,5.35995312 0,5.83877449 0,6.43144149 C0,7.02410849 0.478821363,7.50292985 1.07148836,7.50292985 L11.3410347,7.50292985 L7.81516826,11.0321447 C7.39661811,11.4506948 7.39661811,12.1304202 7.81516826,12.5489704 C8.2337184,12.9675205 8.91344383,12.9675205 9.33199397,12.5489704 L14.6894358,7.19152855 L14.6860874,7.18818014 Z" id="Path"></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
            <?php endif; ?>
            <button class="hamburger-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20">
                    <g id="Group_130" data-name="Group 130" transform="translate(-323 -49)">
                        <line id="Line_20" data-name="Line 20" x2="26" transform="translate(323 68.5)" fill="none" stroke="#064f51" stroke-width="1"/>
                        <line id="Line_30" data-name="Line 30" x2="26" transform="translate(323 49.5)" fill="none" stroke="#064f51" stroke-width="1"/>
                        <line id="Line_31" data-name="Line 31" x2="26" transform="translate(323 58.461)" fill="none" stroke="#064f51" stroke-width="1"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>

</header>

    <div class="menu w-sreen h-[100dvh] blur-header pt-7 px-2 flex flex-col w-full z-50">
        <a class="text-30 leading-60 font-medium text-blue uppercase" href="/">HOME</a>
        <a class="text-30 leading-60 font-medium text-blue uppercase" href="/over-ons">OVER ONS</a>
        <a  class="text-30 leading-60 font-medium text-blue uppercase"href="/nota">NOTA</a>
        <a class="text-30 leading-60 font-medium text-blue uppercase" href="/contact">CONTACT</a>
    </div>



