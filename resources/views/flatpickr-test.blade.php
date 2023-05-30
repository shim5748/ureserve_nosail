<!DOCTYPE html>
<html lang="en">
<head>
    <!-- headセクションのコード -->
</head>
<body>
    <!-- bodyセクションのコード -->

    <!-- Flatpickrを使用したいinput要素 -->
    <input type="text" class="datepicker">

    <!-- スクリプトの読み込み -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/flatpickr.js') }}"></script>
    <script>
        // Flatpickrの初期化
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('.datepicker');
        });
    </script>
</body>
</html>
