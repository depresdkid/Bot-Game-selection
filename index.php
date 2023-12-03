<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container" style="max-width: 540px;">
            <div class="game-table mt-5">
                <div class="game-table-row">
                    <div class="row">
                        <div class="col-1">
                            <div class="game-table__col">
                                <div class="top-number">#1</div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="game-table__col">
                                <div class="game-table__col-img"></div>
                                <div class="game-table__col-title">Minecraft</div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="game-table__col like">
                                <div class="game-table__col-like">
                                    <img width="26px" src="/assets/images/like.png" alt="">
                                </div>
                                <div class="game-table__col-like-count">12</div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="game-table__col add">
                                <button>
                                    <div class="game-table__col-plus">
                                        <svg width="26px" height="26px" viewBox="0 0 1024 1024" class="plus-icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M725.333333 192c-89.6 0-168.533333 44.8-213.333333 115.2C467.2 236.8 388.266667 192 298.666667 192 157.866667 192 42.666667 307.2 42.666667 448c0 253.866667 469.333333 512 469.333333 512s469.333333-256 469.333333-512c0-140.8-115.2-256-256-256z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="game-table__col delete">
                                <button>
                                    <div class="game-table__col-delete">
                                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19 5L5 19M5.00001 5L19 19" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-btn">
                <button class="btn btn-gradient">Добавить</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="container" style="max-width: 540px;">
            <div class="footer">
                <div class="footer-date">
                    <div>Последнее обновление</div>
                    <div>30.11.23 12:00</div>
                </div>
                <div class="footer-reset">
                    <div>Сброс статистики</div>
                    <div>30.11.23 12:00</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>