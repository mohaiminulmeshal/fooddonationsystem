<?php session_start();	require './components/header_volunteer.php';
require './model/donation.php';

$content = '';

if (isset($_POST["status-pickup"])) {
    model_donation_edit_status($_POST["donation_id"], "Pickup in Progress");
}
if (isset($_POST["status-Delivered"])) {
    model_donation_edit_status($_POST["donation_id"], "Delivered");
}

$donation_data = model_donation_fetch_on_user($_SESSION['id']);

while ($row = mysqli_fetch_array($donation_data)) {
    $content .= '
    <tr style="border-width: 2px">
      <td scope="row" style="border-width: 2px">' . $row["User_ID"] . '</td>
      <td style="border-width: 2px">' . $row["Item"] . '</td>
      <td style="border-width: 2px"><img src="public/uploadimage/' . $row["image"] . '" width = 125 height = 125 title="' . $row["image"] . '"></td>
      <td style="border-width: 2px">' . $row["Amount"] . '</td>
      <td style="border-width: 2px">' . $row["Address"] . '</td>
      <td style="border-width: 2px">' . $row["Status"] . '</td>
      <td style="border-width: 2px">
        <form action="ordernoti" class="d-flex" method="POST">
          <input type="hidden" name="donation_id" value="' . $row["Donation_ID"] . '">
          <button name="status-pickup" class="btn btn-primary m-1" type="submit">Pickup in Progress</button>
          <button name="status-Delivered" class="btn btn-primary m-1" type="submit">Delivered</button>
        </form>
      </td>
    </tr>
  ';
}

require './view/ordernoti.php';
require './view/search_html.php';
require './components/footer.php';
