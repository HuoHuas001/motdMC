<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotdMC</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" href="favicon.png" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="center">
        <div class="card position-absolute start-50 translate-middle" style="width:95%;max-width:55rem;margin:auto;height:35%;top:20%">
            <iframe id="iframe" src="loading.html" style="width:95%;height:100%;margin-top:2%" class="center"></iframe>
        </div>

        <div class="card position-absolute top-50 start-50 translate-middle" style="width:95%;max-width:55rem"> <!--大卡片-->
            <div class="card-body">
                <div>
                    <form action="iframe.php" method="get" id="query">
                        <div class="input-group mb-3">
                            <span class="input-group-text">IP</span>
                            <input type="text" id="ip" name="ip" class="form-control" placeholder="Server IP" aria-label="Server IP" value="play.easecation.net">
                            <span class="input-group-text">:</span>
                            <input type="text" id="port" name="port" class="form-control" placeholder="Server Port" aria-label="Server Port" value="19132">
                        </div>
                        <div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button" onclick="query()">查询</button>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="java" name="java">
                                <label class="form-check-label" for="java">查询Java Edition服务器</label>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="card position-absolute bottom-0 start-50 translate-middle" style="width:95%;max-width:55rem;">
            <div class="input-group mb-3">
                <span class="input-group-text">宽</span>
                <input type="text" class="form-control" placeholder="Width" aria-label="Width" value="500px">
                <span class="input-group-text">高</span>
                <input type="text" class="form-control" placeholder="Height" aria-label="Height" value="195px">
                <span class="input-group-text"></span>
                <button class="btn btn-outline-secondary" type="button" onclick="gen()">生成代码</button>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="auto" name="auto">
                <label class="form-check-label" for="java">一键加入按钮</label>
            </div>
            <div class="input-group">
                <span class="input-group-text">卡片代码</span>
                <textarea class="form-control" aria-label="Code" id="code"></textarea>
            </div>
        </div>
    </div>





    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-ep+dxp/oz2RKF89ALMPGc7Z89QFa32C8Uv1A3TcEK8sMzXVysblLA3+eJWTzPJzT" crossorigin="anonymous"></script>
</body>

</html>