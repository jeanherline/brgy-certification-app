<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <link rel="icon" href="assets/images/bLogo.png" type="images/icon type" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/clearance.css">

</head>

<body>
    <section class="header">

        <div class="logo">
            <img src="assets/images/logo.png" alt="" style="width: 300px; height: 100px;">

            <!-- <div>
                <a>Barangay Sampaloc</a><br>
                <a style="font-size: 12px;">Bayan ng San Rafael, Bulacan</a>
            </div> -->
        </div>


        <nav class="navbar">
            <ul>
                <a href="indigency.php">Indigency</a>
                <a href="clearance.php" class="active">Clearance</a>
                <a href="permit.php">Permit</a>
                <a href="transactions.php">Transactions</a>
                <div class="dropdown">
                    <button class="btn" id="btn1"><i class="fas fa-user"></i></button>
                    <div class="dropdown-content">
                        <a href="settings.php">Settings</a>
                        <a href="index.php">Logout</a>
                    </div>
                </div>
            </ul>
        </nav>


    </section>

    <div class="container">

        <div class="wrapper">
            <br>
            <br>
            <header style="font-size: 30px;">
                Barangay Clearance
            </header>


            <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="fields">
                    <div class="input-field">
                        <label for="uName">
                            <font color=black>
                                <font size=3px>Certification Form<br><br></font size>
                            </font color>
                        </label>
                    </div>

                    <div class="input-field"></div>
                    <div class="input-field"></div>

                    <div class="input-field">
                        <label for="rControl">Clearance Control Number: <font color=red> * </font color></label>
                        <input type="text" id="rControl" name="rControl" placeholder="" disabled>
                    </div>

                    <div class="input-field"></div>
                    <div class="input-field"></div>

                    <div class="input-field">
                        <label for="rImage">Image <font color=red> * </font color></label>
                        <input type="file" id="rImage" name="rImage" accept=".jpg,.jpeg,.png" required>
                    </div>

                    <div class="input-field">
                        <label for="rFirst">First Name<font color=red> * </font color></label>
                        <input type="text" id="rFirst" name="rFirst" placeholder="Enter First Name" required>
                    </div>

                    <div class="input-field">
                        <label for="rMid">Middle Name (Optional)</label>
                        <input type="text" id="rMid" name="rMid" placeholder="Enter Middle Name">

                    </div>

                    <div class="input-field">
                        <label for="rLast">Last Name<font color=red> * </font color></label>
                        <input type="text" id="rLast" name="rLast" placeholder="Enter Last Name" required>
                    </div>

                    <div class="input-field">
                        <label for="rSuffix">Suffix (Optional)</label>
                        <select name="rSuffix" id="rSuffix">
                            <option value="" disabled selected hidden>Select Suffix</option>
                            <option value="N/A">N/A</option>
                            <option value="Jr.">Jr.</option>
                            <option value="Sr.">Sr.</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                            <option value="XIII">XIII</option>
                            <option value="XIV">XIV</option>
                            <option value="XV">XV</option>
                            <option value="XVI">XVI</option>
                            <option value="XVII">XVII</option>
                            <option value="XVIII">XVIII</option>
                            <option value="XIX">XIX</option>
                            <option value="XX">XX</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="rAge">Age<font color=red> * </font color></label>
                        <input type="number" id="rAge" name="rAge" placeholder="Enter Age" required>
                    </div>

                    <div class="input-field">
                        <label for="rPurok">Purok<font color=red> * </font color></label>
                        <select name="rPurok" id="rPurok" required>
                            <option value="" disabled selected hidden>Select Purok</option>
                            <option value="1">Purok 1</option>
                            <option value="2">Purok 2</option>
                            <option value="3">Purok 3</option>
                            <option value="4">Purok 4</option>
                            <option value="5">Purok 5</option>
                            <option value="6">Purok 6</option>
                            <option value="7">Purok 7</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="rResiding">Years Residing<font color=red> * </font color></label>
                        <input type="number" id="rResiding" name="rResiding" placeholder="Enter Years Residing" required>
                    </div>

                    <div class="input-field">
                        <label for="rCedula">Cedula Number<font color=red> * </font color></label>
                        <input type="number" id="rCedula" name="rCedula" placeholder="Enter Cedula Number" required>
                    </div>

                    <div class="input-field">
                        <label for="rORNumber">OR Number<font color=red> * </font color></label>
                        <input type="number" id="rORNumber" name="rORNumber" placeholder="Enter OR Number" required>
                    </div>

                    <div class="input-field">
                        <label for="rPurpose">Purpose<font color=red> * </font color></label>
                        <select name="rPurpose" id="rPurpose" required>
                            <option value="" disabled selected hidden>Select Purpose</option>
                            <option value="Legal">Legal</option>
                            <option value="Loan">Loan</option>
                        </select>
                    </div>

                    <div class="input-field"></div>
                    <div class="input-field"></div>
                    <div class="input-field"></div>
                    <div class="input-field"></div>
                    <div class="input-field"></div>
                    <div class="input-field"></div>
                    <div class="input-field"></div>
                    <br>
                    <label style="font-size: 14px;">
                        <input type="checkbox" name="agree" value="Agree" required>
                        <font color=green> Approved by the Chairman</font color>
                    </label></input>
                </div>
                <div class="input-field"></div>
                <div class="input-field"></div>
                <br><br>

                <div class="input-field">
                    <div class="submit">
                        <input type="submit" value="Submit" name="save">
                    </div>
                </div>
            </form>

            <?php

            if (isset($_POST['save'])) {
                include('config.php');

                $regImage = $_FILES["rImage"]["name"]; //file name
                $tempname = $_FILES["rImage"]["tmp_name"];
                $folder = "rImages/" . $regImage;
                move_uploaded_file($tempname, $folder);

                $rFirst = trim($_POST['rFirst']);
                $rLast = trim($_POST['rLast']);
                $rBplace = trim($_POST['rBplace']);
                $rCivil = $_POST['rCivil'];
                $rGender = $_POST['rGender'];
                $rPurok = $_POST['rPurok'];
                $rVoter = $_POST['rVoter'];
                $rEmail = trim($_POST['rEmail']);
                $rContact = trim($_POST['rContact']);
                $rOccup = trim($_POST['rOccup']);

                $uName = trim($_POST['uName']);
                $uPswd = trim($_POST['uPswd']);

                if (empty($_POST['rMid'])) {
                    $rMid = "N/A";
                } else {
                    $rMid = trim($_POST['rMid']);
                }
                if (empty($_POST['rSuffix'])) {
                    $rSuffix = "N/A";
                } else {
                    $rSuffix = $_POST['rSuffix'];
                }
                if (empty($_POST['rHouse'])) {
                    $rHouse = "N/A";
                } else {
                    $rHouse = trim($_POST['rHouse']);
                }
                if (empty($_POST['rPrecint'])) {
                    $rPrecint = "N/A";
                } else {
                    $rPrecint = trim($_POST['rPrecint']);
                }
                if (empty($rCedula = trim($_POST['rCedula']))) {
                    $rCedula = "N/A";
                } else {
                    $rCedula = trim($_POST['rCedula']);
                }

                $bday = $_POST['rBday'];
                $rBday = ($bday);
                $today = (date('Y-m-d'));
                $diff = date_diff(date_create($rBday), date_create($today));
                $rAge = $diff->format('%y');
                $rResiding = $_POST['rResiding'];

                if ($rResiding > $rAge) {
                    echo "<br><p><font size=4px><font color=RED>Invalid Years of Residency</font size></font color></p>";
                } else {
                    $searchDup = "SELECT * FROM tblresidents INNER JOIN tblaccess ON
                            tblaccess.aID=tblresidents.aID WHERE (rContact LIKE '%$rContact%' 
                            AND LOWER(rEmail) LIKE LOWER('%$rEmail%')) OR (rCedula LIKE '%$rCedula%') 
                            AND (aType!='Archive' OR aType!='Rejected') ";
                    $dupStmnt = $conn->query($searchDup);
                    $fetchDup = mysqli_fetch_assoc($dupStmnt);

                    if ($dupStmnt->num_rows > 0) {
                        echo "<br><p><font size=4px><font color=RED>Information Already Exist</font size></font color></p>";
                        if ($fetchDup['aType'] == 'Pending') {
                            echo "<br><p><font size=4px><font color=RED>Account is Pending for Approval. <br>
                                Kindly wait for an account approval mail that will be sent to you via the gmail you provided.</font size></font color></p>";
                        }
                    } else {
                        $pen = "Pending";
                        $INSERT = "INSERT INTO tblaccess (aUname, aPswd, aType) VALUES (?, ?, ?)";

                        $stmt = $conn->prepare($INSERT);
                        $stmt->bind_param("sss", $uName, $uPswd, $pen);
                        $stmt->execute();
                        $stmt->close();

                        $SELECT = "SELECT * FROM tblaccess WHERE aUname = '$uName' LIMIT 1";
                        $resultID = mysqli_query($conn, $SELECT);
                        $row = mysqli_fetch_array($resultID);
                        $aID = $row['aID'];

                        $INSERT2 = "INSERT INTO tblresidents (rImage, rFirst, rMid, rLast, rSuffix, rBday, rBplace, rAge, rCivil,
                                rGender, rHouse, rPurok, rResiding, rCedula, rVoter, rPrecinct, rEmail, rContact, rOccup, aID)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmt2 = $conn->prepare($INSERT2);
                        $stmt2->bind_param(
                            "sssssssssssssssssssi",
                            $regImage,
                            $rFirst,
                            $rMid,
                            $rLast,
                            $rSuffix,
                            $rBday,
                            $rBplace,
                            $rAge,
                            $rCivil,
                            $rGender,
                            $rHouse,
                            $rPurok,
                            $rResiding,
                            $rCedula,
                            $rVoter,
                            $rPrecint,
                            $rEmail,
                            $rContact,
                            $rOccup,
                            $aID
                        );
                        $stmt2->execute();
                        $stmt2->close();
                        $conn->close();
                        echo "<br><p><font size=4px><font color=green>Successfully Registered</font size></font color></p>";
                    }
                }
            }

            ?>

        </div>
    </div>
    <br><br><br>
    <section class="footer">
        <div class="row">
            <div class="col-12 footer-logo">
                <div class="text-center">
                    <br><br>
                    <p style="font-size: 16px;">© 2023 Barangay Sampaloc, San Rafael, Bulacan<br><br><em style="font-size: 12px;">Designed and Developed by J. Santiago, April 2023</em></p>
                    <br>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>