<?php session_start();
require './components/header.php';
require './model/donation.php';


$content = '';

$id = $_SESSION['id'];

if (isset($_POST["Cancel"])) {
    model_donation_delete($_POST["donation_delete"]);
}

if (isset($_POST["Edit_Item"])) {
    model_donation_edit_item($_POST["Donation_ID"], $_POST["donation_edit_item"]);
}

if (isset($_POST["Edit_Amount"])) {
    model_donation_edit_amount($_POST["Donation_ID"], $_POST["donation_edit_amount"]);
}

$result = model_donation_fetch($id);

while ($row = mysqli_fetch_array($result)) {
    if ($row["Status"] != "Pending") {
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
            <form action="donor_donations" class="d-flex" method="POST">
              <input type="hidden" name="donation_delete" value="' . $row["Donation_ID"] . '">
              <button name="Cancel" class="btn btn-primary m-1" type="submit">Cancel</button>
            </form>
          </td>
        </tr>';
    } else {
        $content .= '
        <tr style="border-width: 2px">
          <td scope="row" style="border-width: 2px">' . $row["Donation_ID"] . '</td>
          <td style="border-width: 2px">' . $row["User_ID"] . '</td>
          <td class="m-0" style="border-width: 2px">
            <form action="donor_donations" class="d-flex" method="POST">
              <input type="textc" style="width: 100%; height: 100%; border-width: 0; color: white; 	background-color: transparent;" name="donation_edit_item" value="' . $row["Item"] . '" />
              <input type="hidden" name="Donation_ID" value="' . $row["Donation_ID"] . '">
              <input name="Edit_Item" class="d-none" type="submit" />
            </form>
          </td>
          <td style="border-width: 2px">
              <form action="donor_donations" class="d-flex" method="POST">
                <input type="text" style="width: 100%; height: 100%; border-width: 0; color: white;   background-color: transparent;" name="donation_edit_amount" value="' . $row["Amount"] . '" />
              <input type="hidden" name="Donation_ID" value="' . $row["Donation_ID"] . '">
              <input name="Edit_Text" class="d-none" type="submit" />
              </form>
            </td>
          <td style="border-width: 2px">' . $row["Address"] . '</td>
          <td style="border-width: 2px">' . $row["Status"] . '</td>
          <td style="border-width: 2px">
            <form action="donor_donations" class="d-flex" method="POST">
              <input type="hidden" name="donation_delete" value="' . $row["Donation_ID"] . '">
              <button name="Cancel" class="btn btn-primary m-1" type="submit">Cancel</button>
            </form>
          </td>
        </tr>';
    }
}

require './view/donor_donations.php';
require './components/footer.php';