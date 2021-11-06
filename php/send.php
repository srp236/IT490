<?php

function forwardRequest($url, $data) {
    $result = [
        'status' => NULL,
        'last_url' => NULL,
        'response' => NULL
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $result['response'] = curl_exec($ch);
    $result['status'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $result['last_url'] = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close ($ch);
    return $result;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Do the stuff you want to do on your own server here!

    $result = forwardRequest("http://www.recipe.com/testRabbitMQClient.php", $_POST);

    if ($result['status'] === 200) {
        header('Location: http://www.recipe.com/IT490/html/home.html');
    } else {
        header('Location: http://www.recipe.com/IT490/html/login.html');
    }
} else {
    header('Location: http://www.recipe.com/IT490/html/index.html');
}

?>