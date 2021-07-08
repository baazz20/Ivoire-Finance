<?php include('includes/headers.php') ?>

        <title>Parametre</title>

    </head>
    <body>
        <!-- side bar -->
        <?php include('includes/navbar.php') ?>

        




            </div>

            <div class="Center">
                <H1 id="Text-Menu">Parametre</H1>

                    <div class="Account-Nav">
                        <div class="Account-Profil" onclick="OpenModalProfil()">
                            <a id="Account-Police" style="color: #FFFFFF;">Profil</a>
                        </div>
                        <div class="Account-Coordonnees" onclick="OpenModalCoor()">
                            <a id="Account-Police">Coordonnées</a>
                        </div>
                        <div class="Account-Securite" onclick="OpenModalSecur()" >
                            <a id="Account-Police">Securité</a>
                        </div>
                        <div class="Account-Paiement" onclick="OpenModalPaie()">
                            <a id="Account-Police1">Moyen de paiement</a>
                        </div>
                    </div>
        
                    
                    <div class="Account-Menu-Coordonnee">
                        <label id="Menu-Label">Coordonnées</label>
                        <div class="Account-Menu-TextField">
        
                            <div class="Account-Menu-Mail">
                                <label for="Naiss">Adresse e-mail</label>
                                <input type="text" id="Account-Menu-Input-Naiss" name="Naiss" required>
                            </div>
        
                            <div class="Account-Menu-Tel">
                                <label for="Sexe">Numero de télephone</label>
                                <input type="text" id="Account-Menu-Input-Sexe" name="Sexe" required>
                            </div>
                        </div>
        
                        <div class="Mod-Btn2">
                            <a id="Account-Police2">Modifier</a>
                        </div>
        
                    </div>
        
        
                    <div class="Account-Menu-Securite">
                        <label id="Menu-Label">Securité</label>
                        <div class="Account-Menu-TextField">
                            <div class="Account-Menu-Moyen">
                                <label for="Prénom">Moyen utilisé</label>
                                <input type="text" id="Account-Menu-Input-Moyen" name="Prénom" required>
                            </div>
        
                            <div class="Account-Menu-Naiss">
                                <label for="Naiss">Mot de passe</label>
                                <input type="text" id="Account-Menu-Input-Naiss" name="Naiss" required>
                            </div>
        
                            <div class="Account-Menu-Sexe">
                                <label for="Sexe">Nouveau Mot de passe</label>
                                <input type="text" id="Account-Menu-Input-Sexe" name="Sexe" required>
                            </div>
                        </div>
        
                        <div class="Mod-Btn">
                            <a id="Account-Police2">Modifier</a>
                        </div>
        
                    </div>
        
        
        
        
                    <div class="Account-Menu-Paiement">
                        <label id="Menu-Label">Moyen de paiement</label>
                        <div class="Account-Menu-TextField">
                            <div class="Account-Menu-Moyen">
                                <label for="Prénom">Choisir un moyen de paiement </label>
                                <div class="Moyen-Paiement">
                                    <div id="Visa">
                                        <svg width="172" height="143" viewBox="0 0 172 143" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                            <rect x="41.3229" y="41.3229" width="89.3541" height="60.3541" rx="14.5524" fill="white" stroke="#D9D9D9" stroke-width="2.64589"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9293 82.6779H62.3559L58.1765 66.7549C57.9781 66.0225 57.5569 65.3749 56.9374 65.0698C55.3911 64.3028 53.6873 63.6924 51.8286 63.3846V62.7715H60.807C62.0461 62.7715 62.9754 63.6924 63.1303 64.7619L65.2988 76.2476L70.8695 62.7715H76.2881L67.9293 82.6779ZM79.3859 82.6779H74.1222L78.4565 62.7715H83.7201L79.3859 82.6779ZM90.53 68.2862C90.6849 67.2141 91.6143 66.6011 92.6985 66.6011C94.4023 66.4472 96.2583 66.755 97.8073 67.5193L98.7366 63.2334C97.1877 62.6203 95.4839 62.3125 93.9377 62.3125C88.8289 62.3125 85.1115 65.0698 85.1115 68.8966C85.1115 71.8079 87.7447 73.3365 89.6034 74.2573C91.6143 75.1756 92.3887 75.7886 92.2338 76.7068C92.2338 78.0842 90.6849 78.6972 89.1387 78.6972C87.28 78.6972 85.4213 78.2381 83.7202 77.4711L82.7908 81.7597C84.6495 82.524 86.6604 82.8318 88.5191 82.8318C94.2475 82.9831 97.8073 80.2284 97.8073 76.0938C97.8073 70.887 90.53 70.5818 90.53 68.2862ZM116.229 82.6779L112.049 62.7715H107.56C106.631 62.7715 105.701 63.3846 105.392 64.3028L97.6523 82.6779H103.071L104.152 79.7693H110.81L111.43 82.6779H116.229ZM108.335 68.1324L109.881 75.6347H105.547L108.335 68.1324Z" fill="#172B85"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_d" x="0" y="0" width="172" height="143" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="20"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                            </filter>
                                            </defs>
                                        </svg>
                                    </div>
        
                                    <div id="Mastercard">
                                        <svg width="172" height="143" viewBox="0 0 172 143" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                            <rect x="41.3229" y="41.3229" width="89.3541" height="60.3541" rx="14.5524" fill="white" stroke="#D9D9D9" stroke-width="2.64589"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M86.5187 85.6246C83.3866 88.3238 79.3237 89.9533 74.884 89.9533C64.9778 89.9533 56.9473 81.8406 56.9473 71.833C56.9473 61.8254 64.9778 53.7126 74.884 53.7126C79.3237 53.7126 83.3866 55.3421 86.5187 58.0414C89.6509 55.3421 93.7138 53.7127 98.1534 53.7127C108.06 53.7127 116.09 61.8254 116.09 71.833C116.09 81.8406 108.06 89.9533 98.1534 89.9533C93.7138 89.9533 89.6509 88.3238 86.5187 85.6246Z" fill="#ED0006"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M86.5188 85.6246C90.3754 82.301 92.8209 77.3555 92.8209 71.833C92.8209 66.3105 90.3754 61.365 86.5188 58.0414C89.6509 55.3421 93.7138 53.7126 98.1535 53.7126C108.06 53.7126 116.09 61.8254 116.09 71.833C116.09 81.8406 108.06 89.9533 98.1535 89.9533C93.7138 89.9533 89.6509 88.3238 86.5188 85.6246Z" fill="#F9A000"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M86.5188 58.0413C90.3754 61.3649 92.8208 66.3103 92.8208 71.8328C92.8208 77.3553 90.3754 82.3007 86.5188 85.6243C82.6622 82.3007 80.2168 77.3553 80.2168 71.8328C80.2168 66.3103 82.6622 61.3649 86.5188 58.0413Z" fill="#FF5E00"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_d" x="0" y="0" width="172" height="143" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="20"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                            </filter>
                                            </defs>
                                        </svg>
                                            
                                    </div>
        
                                    <div id="Orangemoney">
                                        <svg width="172" height="143" viewBox="0 0 172 143" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_d)">
                                            <rect x="41.3229" y="41.3229" width="89.3541" height="60.3541" rx="14.5524" fill="white" stroke="#D9D9D9" stroke-width="2.64589"/>
                                            <rect width="60" height="34" transform="translate(56 54)" fill="url(#pattern0)"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_d" x="0" y="0" width="172" height="143" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="20"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                            </filter>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0" transform="translate(0 -0.382353) scale(0.002 0.00352941)"/>
                                            </pattern>
                                            <image id="image0" width="500" height="500" xlink:href="data:image/jpeg;base64,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"/>
                                            </defs>
                                        </svg>
                                            
                                            
                                    </div>
        
                                    <div id="Mtnmonnaie">
                                        <img src= "mtn.svg">
                                    </div>
        
                                    <div id="Moovmonnaie">
                                        <img src= "moov.svg">
                                    </div>
        
                                    <div id="ApplePay">
                                        <svg width="172" height="143" viewBox="0 0 172 143" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                            <rect x="41.3229" y="41.3229" width="89.3541" height="60.3541" rx="14.5524" fill="white" stroke="#D9D9D9" stroke-width="2.64589"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M65.1819 61.9008C64.4097 62.8245 63.1742 63.5531 61.9386 63.449C61.7842 62.2 62.3891 60.873 63.0969 60.0533C63.8692 59.1036 65.2205 58.427 66.3145 58.375C66.4432 59.676 65.9413 60.951 65.1819 61.9008ZM66.3015 63.6966C65.213 63.6332 64.2198 64.0275 63.4175 64.3459C62.9013 64.5509 62.4641 64.7244 62.1315 64.7244C61.7583 64.7244 61.3031 64.5416 60.7919 64.3363C60.1222 64.0674 59.3566 63.7599 58.5536 63.7746C56.7132 63.8007 55.0014 64.8545 54.0619 66.5328C52.1314 69.8895 53.56 74.8594 55.4262 77.5916C56.3399 78.9446 57.4339 80.4278 58.8754 80.3758C59.5095 80.3516 59.9657 80.1559 60.4378 79.9534C60.9813 79.7202 61.5459 79.478 62.4275 79.478C63.2786 79.478 63.8185 79.7139 64.3368 79.9404C64.8296 80.1557 65.3029 80.3624 66.0054 80.3497C67.4984 80.3237 68.4379 78.9967 69.3517 77.6436C70.3378 76.1914 70.7712 74.7741 70.8369 74.559L70.8446 74.5341C70.8431 74.5325 70.8309 74.5269 70.8094 74.517L70.8094 74.517C70.4797 74.3644 67.9601 73.1984 67.936 70.0716C67.9117 67.4471 69.9345 66.1174 70.2529 65.9081C70.2722 65.8954 70.2853 65.8868 70.2912 65.8823C69.0042 63.9568 66.9964 63.7486 66.3015 63.6966ZM76.6363 80.2064V59.9233H84.1654C88.0522 59.9233 90.7678 62.6295 90.7678 66.5846C90.7678 70.5397 88.0007 73.2719 84.0624 73.2719H79.7509V80.2064H76.6363ZM79.7507 62.5772H83.3415C86.0442 62.5772 87.5886 64.0343 87.5886 66.5974C87.5886 69.1604 86.0442 70.6306 83.3286 70.6306H79.7507V62.5772ZM101.051 77.7733C100.227 79.3605 98.4128 80.3623 96.4565 80.3623C93.5607 80.3623 91.5401 78.6189 91.5401 75.9909C91.5401 73.3888 93.4964 71.8926 97.1129 71.6714L101 71.4373V70.3184C101 68.6661 99.9315 67.7684 98.0267 67.7684C96.4565 67.7684 95.3111 68.588 95.0794 69.837H92.2737C92.3638 67.2089 94.8091 65.2964 98.1168 65.2964C101.682 65.2964 103.998 67.1829 103.998 70.1102V80.2062H101.116V77.7733H101.051ZM97.2929 77.9553C95.6327 77.9553 94.5773 77.1487 94.5773 75.9127C94.5773 74.6377 95.5941 73.8961 97.5375 73.779L101 73.5579V74.7028C101 76.6023 99.4036 77.9553 97.2929 77.9553ZM113.561 81.0001C112.312 84.5519 110.884 85.7228 107.846 85.7228C107.615 85.7228 106.843 85.6968 106.662 85.6448V83.2119C106.855 83.2379 107.332 83.2639 107.576 83.2639C108.953 83.2639 109.726 82.6784 110.202 81.1562L110.485 80.2585L105.208 65.4919H108.464L112.132 77.4743H112.197L115.865 65.4919H119.031L113.561 81.0001Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_d" x="0" y="0" width="172" height="143" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="20"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                            
                                    </div>
        
                                    <div id="Paypal">
                                        <svg width="172" height="143" viewBox="0 0 172 143" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d)">
                                            <rect x="41.3229" y="41.3229" width="89.2291" height="60.3541" rx="14.5524" fill="white" stroke="#D9D9D9" stroke-width="2.64589"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M79.4905 88.4269L80.087 84.623L78.7583 84.5918H72.4137L76.823 56.5211C76.8367 56.4361 76.8811 56.3572 76.946 56.301C77.0111 56.2449 77.0942 56.2141 77.1811 56.2141H87.8791C91.4309 56.2141 93.8819 56.956 95.1613 58.4206C95.7613 59.1077 96.1434 59.8259 96.3283 60.6159C96.5223 61.4451 96.5254 62.4356 96.3363 63.6439L96.3226 63.7318V64.5061L96.9225 64.8474C97.4276 65.1165 97.8292 65.4244 98.1372 65.777C98.6502 66.3646 98.9821 67.1113 99.1224 67.9963C99.2674 68.9066 99.2195 69.9902 98.9822 71.2167C98.7084 72.6275 98.2659 73.8563 97.6682 74.8616C97.1187 75.7879 96.4184 76.5565 95.5869 77.1518C94.793 77.7176 93.8499 78.1471 92.7835 78.422C91.7501 78.6921 90.5719 78.8284 89.2796 78.8284H88.4471C87.8519 78.8284 87.2737 79.0436 86.8197 79.4295C86.3645 79.8234 86.0636 80.3616 85.9712 80.9502L85.9083 81.2928L84.8544 87.9977L84.8068 88.2437C84.794 88.3216 84.7723 88.3605 84.7403 88.3868C84.7119 88.4108 84.671 88.4269 84.6311 88.4269H79.4905Z" fill="#28356A"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M97.4912 63.8208C97.4596 64.0258 97.4229 64.2352 97.382 64.4505C95.9712 71.7234 91.1444 74.2359 84.98 74.2359H81.8412C81.0873 74.2359 80.4518 74.7854 80.3346 75.5321L78.2724 88.6657C78.1961 89.1561 78.5724 89.5978 79.065 89.5978H84.6321C85.2911 89.5978 85.8512 89.117 85.955 88.4642L86.0096 88.1803L87.0578 81.5018L87.1252 81.1355C87.2277 80.4805 87.789 79.9993 88.4481 79.9993H89.2806C94.6742 79.9993 98.8966 77.8008 100.131 71.4382C100.646 68.7804 100.379 66.5611 99.0151 65.0002C98.6024 64.5297 98.0903 64.139 97.4912 63.8208Z" fill="#298FC2"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M96.0148 63.2301C95.7991 63.1669 95.5768 63.1098 95.3487 63.0582C95.1193 63.0078 94.8845 62.9632 94.6427 62.9241C93.7964 62.7868 92.869 62.7217 91.8758 62.7217H83.4907C83.284 62.7217 83.0879 62.7685 82.9125 62.8532C82.5256 63.0399 82.2384 63.4075 82.1688 63.8575L80.3849 75.2015L80.3337 75.5322C80.451 74.7855 81.0864 74.236 81.8403 74.236H84.9791C91.1435 74.236 95.9704 71.7222 97.3811 64.4506C97.4233 64.2354 97.4588 64.0259 97.4904 63.8209C97.1335 63.6307 96.747 63.4681 96.3307 63.3295C96.2278 63.2952 96.1218 63.2622 96.0148 63.2301Z" fill="#22284F"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M82.1692 63.8577C82.2388 63.4077 82.526 63.0401 82.9129 62.8547C83.0896 62.7697 83.2844 62.7228 83.4911 62.7228H91.8762C92.8694 62.7228 93.7968 62.7883 94.6431 62.9256C94.8849 62.9644 95.1197 63.0093 95.3491 63.0596C95.5772 63.111 95.7995 63.1684 96.0152 63.2312C96.1222 63.2633 96.2283 63.2967 96.3321 63.3297C96.7484 63.4683 97.1352 63.6322 97.4921 63.8211C97.9119 61.1335 97.4886 59.3035 96.0414 57.6465C94.4456 55.822 91.566 55.0413 87.8809 55.0413H77.1826C76.43 55.0413 75.7878 55.5907 75.6715 56.3387L71.2156 84.6982C71.1278 85.2592 71.5587 85.7654 72.1223 85.7654H78.7269L82.1692 63.8577Z" fill="#28356A"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_d" x="0" y="0" width="171.875" height="143" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                            <feOffset/>
                                            <feGaussianBlur stdDeviation="20"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                            </filter>
                                            </defs>
                                            </svg>
                                            
                                    </div>
        
                                </div>
                            </div>
                        </div>
        
                        <div class="Mod-Btn">
                            <a id="Account-Police2">Modifier</a>
                        </div>
        
                    </div>
        
        
                    <div class="Account-Menu-Profil">
                        <label id="Menu-Label">Profil</label>
                        <div class="Account-Menu-TextField">
                            <div class="Account-Menu-Prenom">
                                <label for="Prénom">Prénom</label>
                                <input type="text" id="Account-Menu-Input-Prenom" name="Prénom" required>
                            </div>
        
                            <div class="Account-Menu-Nom">
                                <label for="Nom">Nom</label>
                                <input type="text" id="Account-Menu-Input-Nom" name="Nom" required>
                            </div>
        
                            <div class="Account-Menu-Naiss">
                                <label for="Naiss">Date de naissance</label>
                                <input type="text" id="Account-Menu-Input-Naiss" name="Naiss" required>
                            </div>
        
                            <div class="Account-Menu-Sexe">
                                <label for="Sexe">Sexe</label>
                                <input type="text" id="Account-Menu-Input-Sexe" name="Sexe" required>
                            </div>
                        </div>
        
                        <div class="Mod-Btn">
                            <a id="Account-Police2">Modifier</a>
                        </div>
        
                    </div>
        
        
        

                

            </div>

        </div>


        

<?php include('includes/footer.php') ?>