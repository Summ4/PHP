
$host = "localhost";
$username = "CRUD_Homework";
$password = "CRUD";
$database = "Database";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];
$question = $_POST["question"];
$answer = $_POST["answer"];

if (empty($id)) {

    $sql = "INSERT INTO quiz (question, answer) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $question, $answer);
    $stmt->execute();
} else {

    $sql = "UPDATE quiz SET question = ?, answer = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $question, $answer, $id);
    $stmt->execute();
}

$stmt->close();
$conn->close();

header("Location: index1.php");
?>
