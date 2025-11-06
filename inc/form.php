<?php
include 'conn.php';

$errors = [
    'gitUserError' => '',
];

$gitUser = '';

if (isset($_POST['get'])) {
    $gitUser = $_POST['gitUser'];

    if (empty($gitUser)) {
        $errors['gitUserError'] = 'Please Enter GitHub Username.';
    }

    if (!array_filter($errors)) {
        $gitUser = mysqli_real_escape_string($conn, $gitUser);
        $apiUrl = "https://api.github.com/users/$gitUser/repos";

        $opts = [
            "http" => [
                "header" => "User-Agent: PHP"
            ]
        ];
        $context = stream_context_create($opts);
        $response = file_get_contents($apiUrl, false, $context);
        $repos = json_decode($response, true);

        if (is_array($repos)) {
            foreach ($repos as $repo) {
                $name = mysqli_real_escape_string($conn, $repo['name']);
                $url = mysqli_real_escape_string($conn, $repo['html_url']);

                $sql = "INSERT INTO repos (repo_name, repo_url, gitUser)
                        VALUES ('$name', '$url', '$gitUser')";
                mysqli_query($conn, $sql);
            }
            echo "All repos for <b>$gitUser</b> have been saved successfully!";
        } else {
            echo "Couldn't fetch repos for this username.";
        }
    }
}
?>
