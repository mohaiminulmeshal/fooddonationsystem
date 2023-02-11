<?php session_start();
require './components/header_ngo.php';
require './model/donation.php';

$content = '';

$search = $_POST['search'];
$result = model_donation_fetch_search($search);

while ($row = mysqli_fetch_array($result)) {
    $content .= '<tr style="border-width: 2px">
			<td scope="row" style="border-width: 2px">' . $row["Donation_ID"] . '</td>
			<td style="border-width: 2px">' . $row["User_ID"] . '</td>
			<td style="border-width: 2px">' . $row["Item"] . '</td>
			<td style="border-width: 2px">' . $row["Amount"] . '</td>
			<td style="border-width: 2px">' . $row["Address"] . '</td>
			<td style="border-width: 2px">' . $row["Status"] . '</td>
		</tr>';
}

require './view/search.php';
require './components/footer.php';
