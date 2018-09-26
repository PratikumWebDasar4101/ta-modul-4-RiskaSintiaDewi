session_start();

$user = array(
	"username" => "admin",
	"password" => 123
);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: form_belanja.php");
}else {
	header("Location: login.php");
}
