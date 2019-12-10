<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$realm = 'Restricted area';
$users = ['admin' => '12345678', 'guest' => 'guest'];
$digest = $_SERVER['PHP_AUTH_DIGEST'] ?? false;
if (false === $digest) {
    require_auth($realm);
    exit;
}

$data = http_digest_parse($digest);
if (null === $data || !isset($users[$data['username']])) {
    require_auth($realm);
    exit;
}

// generate the valid response
$a1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
$a2 = md5($_SERVER['REQUEST_METHOD'] . ':' . $data['uri']);
$valid_response = md5($a1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$a2);
if ($data['response'] !== $valid_response) {
    require_auth($realm);
    exit;
}
// ok, valid username & password
printf("<h1>You are logged in as %s</h1>", $data['username']);

// function to parse the http auth header
function http_digest_parse($txt): ?array
{
    // protect against missing data
    $needed_parts = ['nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1];
    $data = [];
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt,$matches, PREG_SET_ORDER);
    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }
    return $needed_parts ? null : $data;
}

function require_auth($realm): void
{
    $nonce = bin2hex(random_bytes(12));
    header($_SERVER["SERVER_PROTOCOL"] . ' 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="' . $realm .
           '",qop="auth",nonce="' . $nonce . '",opaque="' .
           md5($realm) . '"'
    );
    echo '<p>This page requires authentication!</p>';
}
