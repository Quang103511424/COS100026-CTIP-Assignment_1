<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">

  <meta charset="utf-8">
  <meta name="description"  content="Enhancements Page">
  <meta name="keywords"     content="HTML, tags, Enhancements">
  <meta name="author"     content="Jason D'Souza">
  <title>Attempts Table; Query Result</title>
</head>
<body>


<?php 
	require_once ("settings.php"); 
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

	if (!$conn) { echo "<p>Database connection failed.</p>";}
	else {
		$sql_table = "attempts";
		$options =  mysqli_escape_string($conn, $_POST["options"]);
		$Studentid =  mysqli_escape_string($conn, $_POST["Studentid"]);
		$LName =  mysqli_escape_string($conn, $_POST["LName"]);
		$FName =  mysqli_escape_string($conn, $_POST["FName"]);
		$AttemptNum =  mysqli_escape_string($conn, $_POST["AttemptNum"]);
		$newscore =  mysqli_escape_string($conn, $_POST["newscore"]);


		if ($options == 'A') {
			$query = "SELECT * FROM attempts";
			$result = mysqli_query($conn, $query);

			echo "<table border=\"2\">\n";
				echo "<tr>\n ";
				"<th scope=\"co1\">AttemptId</th>\n";
				"<th scope=\"co1\">DateAndTime</th>\n";
				"<th scope=\"co1\">FirstName</th>\n";
				"<th scope=\"co1\">LastName</th>\n";
				"<th scope=\"co1\">StudentNumber</th>\n";
				"<th scope=\"co1\">Attempts</th>\n";
				"<th scope=\"co1\">Score</th>\n";
				"<tr>\n";

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>\n";
					echo "<td>", $row["AttemptId"],"</td>\n";
					echo "<td>", $row["DateAndTime"],"</td>\n";
					echo "<td>", $row["FirstName"],"</td>\n";
					echo "<td>", $row["LastName"],"</td>\n";
					echo "<td>", $row["StudentNumber"],"</td>\n";
					echo "<td>", $row["Attempts"],"</td>\n";
					echo "<td>", $row["Score"],"</td>\n";
					echo "</tr>\n";
					}
				echo "</table>\n";
				mysqli_free_result($result);
		}

		elseif ($options == 'B') {
			$query = "SELECT * FROM attempts WHERE StudentNumber = $Studentid OR FirstName = $FName AND LastName = $LName";
			$result = @mysqli_query($conn, $query);
			echo "<table border=\"2\">\n";
				echo "<tr>\n ";
				"<th scope=\"co1\">AttemptId</th>\n";
				"<th scope=\"co1\">DateAndTime</th>\n";
				"<th scope=\"co1\">FirstName</th>\n";
				"<th scope=\"co1\">LastName</th>\n";
				"<th scope=\"co1\">StudentNumber</th>\n";
				"<th scope=\"co1\">Attempts</th>\n";
				"<th scope=\"co1\">Score</th>\n";
				"<tr>\n";

				while ($row = @mysqli_fetch_assoc($result)) {
					echo "<tr>\n";
					echo "<td>", $row["AttemptId"],"</td>\n";
					echo "<td>", $row["DateAndTime"],"</td>\n";
					echo "<td>", $row["FirstName"],"</td>\n";
					echo "<td>", $row["LastName"],"</td>\n";
					echo "<td>", $row["StudentNumber"],"</td>\n";
					echo "<td>", $row["Attempts"],"</td>\n";
					echo "<td>", $row["Score"],"</td>\n";
					echo "</tr>\n";
					}
				echo "</table>\n";
		}

		elseif ($options == 'C') {
			$query = "SELECT AttemptId, FirstName, LastName FROM attempts
						WHERE Score = 100 AND Attempts = 1";
			$result = mysqli_query($conn, $query);

			echo "<table border=\"2\">\n";
				echo "<tr>\n ";
				"<th scope=\"co1\">AttemptId</th>\n";
				"<th scope=\"co1\">FirstName</th>\n";
				"<th scope=\"co1\">LastName</th>\n";
				"<tr>\n";

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>\n";
					echo "<td>", $row["AttemptId"],"</td>\n";
					echo "<td>", $row["FirstName"],"</td>\n";
					echo "<td>", $row["LastName"],"</td>\n";
					echo "</tr>\n";
					}
				echo "</table>\n";
				mysqli_free_result($result);
		}

		elseif ($options == 'D') {
			$query = "SELECT AttemptId, FirstName, LastName FROM attempts
						WHERE Score < 50 AND Attempts = 2";
			$result = mysqli_query($conn, $query);

			echo "<table border=\"2\">\n";
				echo "<tr>\n ";
				"<th scope=\"co1\">AttemptId</th>\n";
				"<th scope=\"co1\">FirstName</th>\n";
				"<th scope=\"co1\">LastName</th>\n";
				"<tr>\n";

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>\n";
					echo "<td>", $row["AttemptId"],"</td>\n";
					echo "<td>", $row["FirstName"],"</td>\n";
					echo "<td>", $row["LastName"],"</td>\n";
					echo "</tr>\n";
					}
				echo "</table>\n";
				mysqli_free_result($result);
		}

		elseif ($options == 'E') {
			$query = "DELETE FROM attempts
						WHERE StudentNumber = $Studentid";
			$result = mysqli_query($conn, $query);
		}

		elseif ($options == 'F') {
			$query = "UPDATE attempts
						SET Score = $newscore
						WHERE AttemptId = $AttemptNum AND StudentNumber = $Studentid";
			$result = mysqli_query($conn, $query);
		}
		mysqli_close($conn);
	}
?>
</body>
</html>