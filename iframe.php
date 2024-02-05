<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotdMC Result</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" href="favicon.png" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php

    use HuoHua\MotdMC;

    require __DIR__ . '/motd.php';
    $IP = $_GET["ip"];
    $Port = (int)$_GET["port"];
    $motdMC = new MotdMC($IP, $Port);
    if (isset($_GET["java"])) {
        $reply = $motdMC->motdJE();
    } else {
        $reply = $motdMC->motdBE();
    }

    $current_time = time();
    ?>

    <?php if ($reply['code'] == 200) : ?>
        <div class="center">
            <div class="card">
                <h5 class="card-header"><?php echo $reply["data"]["HostName"]; ?></h5>
                <div class="card-body">
                    <p class="card-text">
                        <svg t="1706959476982" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1489" width="16" height="16">
                            <path d="M600.677917 904.431138h268.263473c19.928144 0 33.724551 13.796407 33.724551 30.658682s-13.796407 30.658683-33.724551 30.658683h-268.263473c4.598802-9.197605 7.664671-19.928144 7.664671-30.658683s-3.065868-19.928144-7.664671-30.658682z m-93.508982-45.988024c41.389222 0 76.646707 35.257485 76.646706 76.646706s-35.257485 76.646707-76.646706 76.646707-76.646707-35.257485-76.646707-76.646707 35.257485-76.646707 76.646707-76.646706z m-30.658683-15.329342h61.317365v-61.317365h-61.317365v61.317365z m-334.17964 61.317366h272.862275c-4.598802 9.197605-7.664671 19.928144-7.664671 30.658682s3.065868 21.461078 7.664671 30.658683h-272.862275c-19.928144 0-33.724551-13.796407-33.724551-30.658683s15.329341-30.658683 33.724551-30.658682z m610.107784-766.467066h61.317365v-61.317365h-61.317365v61.317365z m-76.646707-61.317365c-16.862275 0-30.658683 13.796407-30.658682 30.658682s13.796407 30.658683 30.658682 30.658683 30.658683-13.796407 30.658683-30.658683-13.796407-30.658683-30.658683-30.658682z m-107.305389 0c-16.862275 0-30.658683 13.796407-30.658683 30.658682s13.796407 30.658683 30.658683 30.658683 30.658683-13.796407 30.658683-30.658683-13.796407-30.658683-30.658683-30.658682z m291.257485 137.964071h-705.1497c-24.526946 0-45.988024-19.928144-45.988024-47.520958v-118.035928c0-24.526946 19.928144-47.520958 45.988024-47.520958h705.1497c24.526946 0 45.988024 19.928144 45.988024 47.520958v118.035928c0 27.592814-21.461078 47.520958-45.988024 47.520958z m-107.305389 199.281438h61.317365v-61.317366h-61.317365v61.317366z m-76.646707-61.317366c-16.862275 0-30.658683 13.796407-30.658682 30.658683s13.796407 30.658683 30.658682 30.658683 30.658683-13.796407 30.658683-30.658683c0-15.329341-13.796407-30.658683-30.658683-30.658683z m-107.305389 0c-16.862275 0-30.658683 13.796407-30.658683 30.658683s13.796407 30.658683 30.658683 30.658683 30.658683-13.796407 30.658683-30.658683c1.532934-15.329341-13.796407-30.658683-30.658683-30.658683z m291.257485 137.964072h-705.1497c-24.526946 0-45.988024-19.928144-45.988024-47.520958v-118.035928c0-24.526946 19.928144-47.520958 45.988024-47.520958h705.1497c24.526946 0 45.988024 19.928144 45.988024 47.520958v118.035928c0 27.592814-21.461078 47.520958-45.988024 47.520958z m-107.305389 199.281437h61.317365v-61.317365h-61.317365v61.317365z m-76.646707-61.317365c-16.862275 0-30.658683 13.796407-30.658682 30.658683s13.796407 30.658683 30.658682 30.658682 30.658683-13.796407 30.658683-30.658682-13.796407-30.658683-30.658683-30.658683z m-107.305389 0c-16.862275 0-30.658683 13.796407-30.658683 30.658683s13.796407 30.658683 30.658683 30.658682 30.658683-13.796407 30.658683-30.658682c1.532934-16.862275-13.796407-30.658683-30.658683-30.658683z m291.257485 137.964072h-705.1497c-24.526946 0-45.988024-19.928144-45.988024-47.520958v-118.035928c0-24.526946 19.928144-47.520958 45.988024-47.520958h705.1497c24.526946 0 45.988024 19.928144 45.988024 47.520958v118.035928c0 24.526946-21.461078 47.520958-45.988024 47.520958z" p-id="1490" fill="#8a8a8a"></path>
                        </svg>
                        <span class="text"><?php echo $IP . ":" . $Port; ?></span>
                    </p>
                    <!--IP-->
                    <p class="card-text">
                        <svg t="1706959537505" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2949" width="16" height="16">
                            <path d="M843 927.1H181.9c-46.1 0-83.9-37.7-83.9-83.9V182.1c0-46.1 37.7-83.9 83.9-83.9H843c46.1 0 83.9 37.7 83.9 83.9v661.2c0 46.1-37.7 83.8-83.9 83.8z" fill="#58D598" p-id="2950"></path>
                            <path d="M266.8 289.7h163.7v163.7H266.8zM594.2 289.7h163.7v163.7H594.2zM430.5 453.4v90.9h-77v245.5h71.1V708h175.6v81.8h71.1V544.3h-77.1v-90.9z" fill="#17AD8A" p-id="2951"></path>
                        </svg>
                        <span class="text"><?php echo $reply["data"]["GameName"]; ?>: <?php echo $reply["data"]["Version"]; ?> | Protocol: <?php echo $reply["data"]["Protocol"]; ?></span>
                        <!--Game Version &Proctol-->
                    </p>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg><small class="text-muted"> Last updated at <?php echo date("Y-m-d H:i:s ") ?></small></p>
                    <button type="button" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-modem" viewBox="0 0 16 16">
                            <path d="M5.5 1.5A1.5 1.5 0 0 1 7 0h2a1.5 1.5 0 0 1 1.5 1.5v11a1.5 1.5 0 0 1-1.404 1.497c.35.305.872.678 1.628 1.056A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.224-.947c.756-.378 1.277-.75 1.628-1.056A1.5 1.5 0 0 1 5.5 12.5v-11ZM7 1a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-11A.5.5 0 0 0 9 1H7Z" />
                            <path d="M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm0 2a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm0 2a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm0 2a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                        </svg>
                        游戏模式: <span class="badge text-bg-danger"><?php echo $reply["data"]["GameMode"]; ?></span>
                    </button>
                    <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                        在线人数: <span class="badge text-bg-success"><?php echo $reply["data"]["Players"]; ?> / <?php echo $reply["data"]["MaxPlayers"]; ?></span>
                    </button>
                    <button type="button" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                        </svg>
                        地图名: <span class="badge text-bg-warning"><?php echo $reply["data"]["Map"]; ?></span>
                    </button>

                    <?php if (isset($_GET["auto"])) : ?>
                    <a href="minecraft://?addExternalSever=<?php echo $IP . ":" . $Port; ?>"  class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                            <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z" />
                            <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                    </svg> 加入服务器</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById("loading").className = "center hidden"
        </script>
    <?php endif; ?>

    <?php if ($reply['code'] != 200) : ?>
        <div class="center">
            <div class="card">
                <h5 class="card-header">Motd请求失败！ Code:<?php echo $reply['code']; ?></h5>
                <div class="card-body">
                    <span class="text">Code: <?php echo $reply['code']; ?></span>
                    </p>
                    <!--IP-->
                    <p class="card-text">
                        <span class="text">Error Msg: <?php echo $reply["data"]; ?></span>
                        <!--Game Version &Proctol-->
                    </p>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg><small class="text-muted"> Last updated at <?php echo date("Y-m-d H:i:s ") ?></small></p>

                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById("loading").className = "center hidden"
        </script>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-ep+dxp/oz2RKF89ALMPGc7Z89QFa32C8Uv1A3TcEK8sMzXVysblLA3+eJWTzPJzT" crossorigin="anonymous"></script>
</body>

</html>