<?php session_start();
require './components/header_ngo.php';
require './model/donation.php';

$content = '';

if (isset($_POST["status-pending"])) {
    model_donation_edit_status($_POST["donation_id"], "Pending");
}
if (isset($_POST["status-accepted"])) {
    model_donation_edit_status($_POST["donation_id"], "Accepted");
}
if (isset($_POST["status-rejected"])) {
    model_donation_edit_status($_POST["donation_id"], "Rejected");
}

$donation_data = model_donation_fetch_on_user($_SESSION['id']);

while ($row = mysqli_fetch_array($donation_data)) {
    $content .= '
      <tr style="border-width: 2px">
        <td scope="row" style="border-width: 2px">' . $row["Donation_ID"] . '</td>
        <td style="border-width: 2px">' . $row["User_ID"] . '</td>
        <td style="border-width: 2px">' . $row["Item"] . '</td>
        <td style="border-width: 2px"><img src="public/uploadimage/' . $row["image"] . '" width = 125 height = 125 title="' . $row["image"] . '"></td>
        <td style="border-width: 2px">' . $row["Amount"] . '</td>
        <td style="border-width: 2px">' . $row["Address"] . '</td>
        <td style="border-width: 2px">' . $row["Status"] . '</td>
        <td style="border-width: 2px">
          <form action="managedonat" class="d-flex" method="POST">
            <input type="hidden" name="donation_id" value="' . $row["Donation_ID"] . '">
            <button name="status-pending" class="btn btn-primary m-1" type="submit">Pending</button>
            <button name="status-accepted" class="btn btn-primary m-1" type="submit">Accepted</button>
            <button name="status-rejected" class="btn btn-primary m-1" type="submit">Rejected</button>
          </form>
        </td>
      </tr>
    ';
}

require './view/search_html.php';
require './view/managedonat.php';
require './components/footer.php';
