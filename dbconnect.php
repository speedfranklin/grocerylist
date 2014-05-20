<? //Generates a needed items list for a specific entry
$link = new mysqli("localhost", "breakingthe", "speedin2014!", "breakingthestyles");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>