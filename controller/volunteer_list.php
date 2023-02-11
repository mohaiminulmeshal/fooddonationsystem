<?php session_start();
require './components/header_ngo.php';
require './model/volunteer.php';

$content = '';

if (isset($_POST["status-assigned"])) {
    model_vol_edit_status($_POST["id"], "Assigned");
}
if (isset($_POST["status-unassigned"])) {
    model_vol_edit_status($_POST["id"], "Unassigned");
}

$vol_data = model_vol_fetch_all();

while ($row = mysqli_fetch_array($vol_data)) {
    $content .= '
    <tr style="border-width: 2px">
      <td scope="row" style="border-width: 2px">' . $row["id"] . '</td>
      <td style="border-width: 2px">' . $row["name"] . '</td>
      <td style="border-width: 2px">' . $row["status"] . '</td>
      <td style="border-width: 2px">
        <form action="volunteer_list" class="d-flex" method="POST">
          <input type="hidden" name="id" value="' . $row["id"] . '">
          <button name="status-assigned" class="btn btn-primary m-1" type="submit">Assigned</button>
          <button name="status-unassigned" class="btn btn-primary m-1" type="submit">Unassigned</button>
        </form>
      </td>
    </tr>';
}

require './view/volunteer_list.php';
require './components/footer.php';
