<?php
// Read the contents of the JSON file into a string
$jsonString = file_get_contents('./assets/data.json');
// Decode the JSON string into a PHP associative array
$data = json_decode($jsonString, true);
// Access the data
$user_post = json_decode(file_get_contents("php://input"));
// checking user request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($user_post->id) && $user_post->id < 19) {
        echo json_encode($data[$user_post->id - 1]);
    } else {
        echo json_encode($data);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Iraqi Cities Api | المدن العراقية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" media="screen" href="./assets/main.css" />
    </head>

    <body>
        <div>
            <h1 class="header">Welcome to Iraqi Cities API</h1>
            <div class="container">
                <div>
                    <img class="snippt" src="./assets/fetchall.png" alt="fetchall code snippt" />
                    <img class="snippt" src="./assets/fetchbyid.png" alt=" fetch by id code snippt" />
                </div>
                <img class="snippt" src="./assets/res.png" alt="result code snippt" />
            </div>
        </div>
        <a class="me" target='_blank' href="http://t.me/m98jk" title="Developer telegram"><img src="./assets/tele.svg" alt="telegram icon" width="50rem" height="50rem" /></a>
    </body>

    </html>
<?php endif ?>