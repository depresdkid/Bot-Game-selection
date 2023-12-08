<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <div class="container" style="max-width: 420px;">
            <div class="game-table mt-5">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <div class="game-card <?php echo $i == 1 ? 'top' : ''; ?> animate__animated">
                        <button class="delete-btn">
                            <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 5L5 19M5.00001 5L19 19" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="like-btn">
                            <div>
                                <div class="game-table__col like">
                                    <div class="game-table__col-like">
                                        <img width="23px" src="/assets/images/like.png" alt="">
                                    </div>
                                    <div class="game-card-like__count">12</div>
                                </div>
                            </div>
                            <div class="game-card__plus">
                                <svg width="23px" height="23px" viewBox="0 0 1024 1024" class="plus-icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M725.333333 192c-89.6 0-168.533333 44.8-213.333333 115.2C467.2 236.8 388.266667 192 298.666667 192 157.866667 192 42.666667 307.2 42.666667 448c0 253.866667 469.333333 512 469.333333 512s469.333333-256 469.333333-512c0-140.8-115.2-256-256-256z" />
                                </svg>
                            </div>
                        </button>
                        <div class="row">
                            <div class="col-6">
                                <div>Minecraft</div>
                                <div>Песочница</div>
                                <div>Кол-во игроков: 4+</div>
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="add-btn">
                <button class="btn btn-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="container" style="max-width: 420px;">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>