                <?php
                // Если устройства Android
                if( !preg_match('/iPhone|iPad|iPod/i', $_SERVER ['HTTP_USER_AGENT']) ) {
                    echo '<a href="https://play.google.com/store/apps/details?id=ru.zamzamwallet" class="android_app section-download-btn" data-desc="Скачайте&nbsp;мобильное приложение" target="_blank">Ссылка на гугл стор</a>';
                }
                ?>
                <?php
                // Если устройства iOS
                if( !preg_match('/Android/i', $_SERVER ['HTTP_USER_AGENT']) ) {
                    echo '<a href="https://apps.apple.com/ru/app/zamzam-%D0%B4%D0%B5%D0%BD%D0%B5%D0%B6%D0%BD%D1%8B%D0%B5-%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%8B/id1521900439" class="ios_app section-download-btn" data-desc="Скачайте&nbsp;мобильное приложение" target="_blank">Ссылка на эпл стор</a>';
                }
                ?>