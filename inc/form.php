<?PHP
include 'conn.php';

$errors = [
    'gitUserError' => '',
];

$gitUser = '';

if (isset($_POST['submit'])) {
    
    $gitUser = $_POST['gitUser'];

    if (empty($gitUser)) {
        $errors['gitUserError'] = 'Please Enter GitHub Username.';
    }

    if (!array_filter($errors)) {
    $gitUser = mysqli_real_escape_string($conn, $_POST['gitUser'] ?? '');

    $apiUrl = "https://api.github.com/users/$gitUser/repos";
    
    $opts = [
        "http" => [
            "header" => "User-Agent: PHP"
        ]
    ];
    $context = stream_context_create($opts);
    $response = file_get_contents($apiUrl, false, $context);
    $repos = json_decode($response, true);


    $reposCount = is_array($repos) ? count($repos) : 0;


    $sql = "INSERT INTO users(gitUser, repos_count)
            VALUES ('$gitUser', $reposCount)";

    if (mysqli_query($conn, $sql)) {
        echo "User Added with $reposCount repos";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

}




