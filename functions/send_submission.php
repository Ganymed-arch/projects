<?php
/*
Ganymed hook
$curl = curl_init('https://discord.com/api/webhooks/806036420283203584/lSBwzXoNf5qUy1ac6P32DARv8ao0_yU0-Nj1rcrzNaGMzx6ZPDLDTd66Kd6pZX4GI7CA');

Idle-Setup-Server hook
$curl = curl_init('https://discord.com/api/webhooks/806771666293096498/_BH6btKmT56ZYlidzLjbYn9U7K-WgZ-y42jJhYf706UrAgVbmvRHXaLJgJ0kcKMasqK8');

Test-Bot-channel
$curl = curl_init('https://discord.com/api/webhooks/806435986103336981/ukXqMEwa73GQ0mtKlOFH4aSi66X-7QZBvEuRUwq2ylCHa1KinH7qErHDywmj3QBYzRvR');
####################################################
*/

function basic($url, $inserts = [])
{
  $curl = curl_init($url);

  $cOptions = [
      CURLOPT_POST => 1,
      CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
      CURLOPT_POSTFIELDS => json_encode([
          "username" => "Partnering-Request",
          "avatar_url" => "",
          "content" => "A **PARTNER-REQUEST** just came in!",
          "embeds" => [
              [
                  "author" => [
                      "name" => "",
                      "icon_url" => ""
                  ],
                  "title" => "Invite: ".$inserts['invitation'],
                  "url" => "",
                  "description" => "",
                  "color" => "000",
                  "fields" => [
                      [
                          "name" => "Date",
                          "value" => date('d.m.Y'),
                          "inline" => false
                      ],
                      [
                          "name" => "Username",
                          "value" => $inserts['user-name'],
                          "inline" => true
                      ],
                      [
                          "name" => "User-count",
                          "value" => $inserts['user-count'],
                          "inline" => true
                      ],
                      [
                          "name" => "Server description",
                          "value" => $inserts['server-description'],
                          "inline" => false
                      ],
                  ],
              ]
          ]
      ]),
    ];
    curl_setopt_array($curl, $cOptions);
    curl_exec($curl);
    curl_close($curl);
}

function dev($url, $inserts = [])
{
  $curl = curl_init($url);

  $cOptions = [
    CURLOPT_POST => 1,
    CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
    CURLOPT_POSTFIELDS => json_encode([
      "username" => "Partnering-Request",
      "avatar_url" => "",
      "content" => "A **PARTNER-REQUEST** just came in!",
      "embeds" => [
        [
          "author" => [
            "name" => "",
            "icon_url" => ""
          ],
          "title" => "DEV",
          "url" => "",
          "description" => "",
          "color" => "FFF",
          "fields" => [
            [
              "name" => "Date",
              "value" => date('d.m.Y'),
              "inline" => false
            ],
            [
              "name" => "Username",
              "value" => $inserts['user-name'],
              "inline" => true
            ],
            [
              "name" => "User-count",
              "value" => $inserts['user-count'],
              "inline" => true
            ],
            [
              "name" => "Server description",
              "value" => $inserts['server-description'],
              "inline" => false
            ],
          ],
        ]
      ]
    ]),
  ];
  curl_setopt_array($curl, $cOptions);
  curl_exec($curl);
  curl_close($curl);
}

function checkParams($informations = []): string
{
    $OK = true;

  foreach ($informations as $key => $info){
    if (!strip_tags($info)){
      $OK = false;
    }
  }

  if (intval($informations['user-count']) < 3000){
      return 'failed';
  }
  if (!$OK){
    exit();
  }
  return 'success';
}

/*
 * Diese Funktion bedarf einer scharfen Überarbeitung, damn ist die statisch....gefällt mir gar nicht.
 * Wird aber seinen Zweck fürs erste erfüllen
 * */
function decideAboutHook(){
  if (checkParams($_POST) === 'success'){
    $aUrl = [
      'IdleglancePartnershipS' => 'https://discord.com/api/webhooks/875416057563725884/qea6HTJbsiIShcO9JJLYxTa6IRW3Uyo-HibLw5wfH50RwJF1lUF_f4zNOQs4a_ZJr1ZW'
    ];

    foreach ($aUrl as $key => $sUrl){
      //if ($key !== 'IdleglancePartnership')
        basic($sUrl, $_POST);
    }
  }elseif(checkParams($_POST) === 'failed'){
    $aUrl = [
      'IdleglancePartnershipF' => 'https://discord.com/api/webhooks/875416057563725884/qea6HTJbsiIShcO9JJLYxTa6IRW3Uyo-HibLw5wfH50RwJF1lUF_f4zNOQs4a_ZJr1ZW'
    ];

    foreach ($aUrl as $key => $sUrl){
      //if ($key !== 'IdleglancePartnership-failed')
        basic($sUrl, $_POST);
    }
  }
}

decideAboutHook();