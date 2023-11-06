  <html>

  <div class="cont">
      <h1 style="text-align:center;">Account Settings</h1>
      <hr>
      <h5><b>Account Information</b></h5>

      <!-- RESIDENTS -->
      <?php
        $sql = mysqli_query($conn, "SELECT * FROM tbl_accounts WHERE username = '$Username'");
        $result = mysqli_fetch_array($sql);
        if ($result['userType'] == "Resident") {
            $query = mysqli_query($conn, "SELECT * FROM tbl_accounts 
                INNER JOIN tbl_residents ON tbl_accounts.residentID = tbl_residents.residentID
                WHERE username = '$Username'");
            $row = mysqli_fetch_array($query);
        ?>
          <div class="row g-3">
              <div class="col-md-12 position-relative">
                  <label for="resnum" class="formlabel">Account Number </label>
                  <input type="text" class="form-control" size="62" name="resnum" maxlength="11" disabled value="<?php echo $row['accountID']; ?>">
              </div>
          </div>
          <br>
          <div class="row g-5">
              <div class="col-md-4 position-relative">
                  <label for="username" class="formlabel">Username</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#username" style="text-decoration:none;">Edit</a>
                  <input type="text" class="form-control" size="62" name="username" maxlength="11" disabled value="<?php echo $row['username']; ?>">
              </div>

              <div class="col-md-4 position-relative">
                  <label for="contact" class="formlabel">Contact No. </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#contact" style="text-decoration:none;">Edit</a>
                  <input type="number" class="form-control" size="62" name="contactNum" maxlength="11" disabled value="< ?php echo $row['r_contactNum']; ?>">
              </div>

              <div class="col-md-4 position-relative">
                  <label for="password" class="formlabel">Password </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password" style="text-decoration:none;">Edit</a>
                  <input type="password" class="form-control" size="62" name="password" maxlength="11" disabled value="< ?php echo $row['password']; ?>">
              </div>
          </div>
          <hr>

          <h5><b>Personal Information</b></h5>
          <!-- Names-->
          <div class="row g-4">
              <div class="col-md-3 position-relative">
                  <label for="Sname" class="formlabel"> Last Name </label>
                  <input type="text" class="form-control" name="Sname" size="20" placeholder="Surname" maxlength="50" value="<?php echo $row['r_lastname']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Fname" class="formlabel">First Name </label>
                  <input type="text" class="form-control" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus value="<?php echo $row['r_firstname']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Mname" class="formlabel"> Middle Name </label>
                  <input type="text" class="form-control" name="Mname" size="20" placeholder="Middle Name" maxlength="50" value="<?php
                                                                                                                                    if ($row['r_middlename'] == '') {
                                                                                                                                        echo ' ';
                                                                                                                                    } else {
                                                                                                                                        echo $row['r_middlename'];
                                                                                                                                    } ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="suffix" class="formlabel"> Suffix </label>
                  <input type="text" class="form-control" name="suffix" size="20" placeholder="Suffix" maxlength="50" value="<?php
                                                                                                                                if ($row['r_extension'] == '') {
                                                                                                                                    echo ' ';
                                                                                                                                } else {
                                                                                                                                    echo $row['r_extension'];
                                                                                                                                } ?>" disabled readonly>
              </div>
          </div>

          <br>

          <!-- Birthdate, Birthplace, Height, Weight -->
          <div class="row g-4">
              <div class="col-md-3 position-relative">
                  <label for="birthdate" class="formlabel">Birthdate </label>
                  <input type="date" class="form-control" name="birthdate" value="<?php echo $row['r_birthdate']; ?>" disabled readonly>
              </div>
              <div class="col-md-3 position-relative">
                  <label for="birthplace" class="formlabel">Birthplace</label>
                  <input type="text" class="form-control" size="50" name="Birthplace" maxlength="30" value="<?php echo $row['r_birthplace']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="height" class="formlabel">Height</label>
                  <input type="text" class="form-control" name="height" value="<?php echo $row['r_height'] . ' cm'; ?>" disabled readonly />
              </div>

              <div class="col-md-3 position-relative">
                  <label for="weight" class="formlabel">Weight</label>
                  <input type="text" class="form-control" name="weight" value="<?php echo $row['r_weight'] . ' kg'; ?>" disabled readonly />
              </div>
          </div>

          <br>

          <!--address-->
          <div class="row g-4">
              <div class="col-md-6 position-relative">
                  <label for="Address" class="formlabel">Address No.</label>
                  <input type="number" class="form-control" name="Adress" size="20" placeholder="Address" maxlength="50" value="<?php echo $row['houseNum']; ?>" disabled readonly>
              </div>
              <div class="col-md-6 position-relative">
                  <label for="street" class="formlabel">Street</label><br>
                  <select class="form-select" name="street" data-component="dropdown" disabled readonly>
                      <option> <?php echo $row['streetName']; ?> </option>
                  </select>
              </div>
          </div>

          <br>

          <!-- Gender, Civil Status, Occupation, citizenship -->
          <div class="row g-4">
              <div class="col-md-3 position-relative">
                  <label for="gender" class="formlabel">Gender </label><br>
                  <select class="form-select" name="gender" data-component="dropdown" disabled readonly>
                      <option><?php echo $row['r_sex']; ?></option>
                      <option value="Female"> Female </option>
                  </select>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="civilStatus" class="formlabel">Civil Status</label><br>
                  <select class="form-select" name="civilStatus" data-component="dropdown" disabled readonly>
                      <option><?php echo $row['r_civilStatus']; ?></option>
                  </select>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="occupation" class="formlabel">Occupation </label>
                  <input type="text" size="62" class="form-control" name="occupation" maxlength="11" value="<?php echo $row['r_occupation']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="citizenship" class="formlabel">Citizenship</label>
                  <input type="text" size="62" class="form-control" name="citizenship" maxlength="11" value="<?php echo $row['r_citizenship']; ?>" disabled readonly>
              </div>
          </div>

          <br>

          <!-- SSS NO, GSIS NO, TIN NO-->
          <div class="row g-4">
              <div class="col-md-4 position-relative">
                  <label for="sssNo" class="formlabel">SSS No.</label>
                  <input type="text" class="form-control" name="sssNo" value="<?php echo $row['SSSnum']; ?>" disabled readonly />
              </div>

              <div class="col-md-4 position-relative">
                  <label for="gsisNo" class="formlabel">GSIS No.</label>
                  <input type="text" class="form-control" name="gsisNo" value="<?php echo $row['GSISnum']; ?>" disabled readonly />
              </div>

              <div class="col-md-4 position-relative">
                  <label for="tinNo" class="formlabel">TIN No. </label>
                  <input type="text" class="form-control" size="62" name="tinNo" maxlength="11" value="<?php echo $row['TIN']; ?>" disabled readonly>
              </div>
          </div>

          <br>

          <!--incase of emergency-->
          <div class="row g-4">
              <div class="col-md-6 position-relative">
                  <h5><b>In Case of Emergency</b></h5>
              </div>
          </div>
          <div class="row g-4">
              <div class="col-md-3 position-relative">
                  <label for="Sname" class="formlabel"> Last Name </label>
                  <input type="text" class="form-control" name="Sname" size="20" placeholder="Surname" maxlength="50" value="<?php echo $row['e_lastname']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Fname" class="formlabel">First Name </label>
                  <input type="text" class="form-control" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus value="<?php echo $row['e_firstname']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Mname" class="formlabel"> Middle Name </label>
                  <input type="text" class="form-control" name="Mname" size="20" placeholder="Middle Name" maxlength="50" value="<?php
                                                                                                                                    if ($row['e_middlename'] == '') {
                                                                                                                                        echo ' ';
                                                                                                                                    } else {
                                                                                                                                        echo $row['e_middlename'];
                                                                                                                                    } ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="suffix" class="formlabel"> Suffix </label>
                  <input type="text" class="form-control" name="suffix" size="20" placeholder="Suffix" maxlength="50" value="<?php
                                                                                                                                if ($row['e_extension'] == '') {
                                                                                                                                    echo ' ';
                                                                                                                                } else {
                                                                                                                                    echo $row['e_extension'];
                                                                                                                                } ?>" disabled readonly>
              </div>
          </div>

          <br>

          <div class="row g-4">
              <div class="col-md-9 position-relative">
                  <label for="EAddress" class="formlabel">Address: </label>
                  <input type="text" class="form-control" size="62" name="EAddress" maxlength="11" height="50" value="<?php echo $row['e_address']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Econtact" class="formlabel">Contact No. </label>
                  <input type="number" class="form-control" size="62" name="Econtact" maxlength="11" value="<?php echo $row['e_contactNum']; ?>" disabled readonly>
              </div>
          </div>

          <br>

          <div class="row g-4">
              <!--Residency-->
              <div class="col-md-3 position-relative">
                  <label for="residency" class="formlabel">Residency</label><br>
                  <select class="form-select" name="residency" data-component="dropdown" disabled readonly>
                      <option><?php echo $row['residency']; ?></option>
                  </select>
              </div>

              <!--Others-->
              <div class="col-md-6 mt-3 position-relative">
                  <div class="form-check form-check-inline mt-4">
                      <?php
                        if ($row['seniors'] == 1) {
                        ?>
                          <input type="checkbox" class="formlabel" name="free" value="Senior" checked disabled readonly />
                          <label for="Senior" class="formlabel"> Senior </label>
                      <?php } else { ?>
                          <input type="checkbox" class="formlabel" name="free" value="Senior" disabled readonly />
                          <label for="Senior" class="formlabel"> Senior </label>
                      <?php } ?>
                  </div>

                  <div class="form-check form-check-inline mt-4">
                      <?php
                        if ($row['pwd'] == 1) {
                        ?>
                          <input type="checkbox" class="formlabel" name="free" value="PWD" checked disabled readonly />
                          <label for="PWD" class="formlabel"> PWD </label>
                      <?php } else { ?>
                          <input type="checkbox" class="formlabel" name="free" value="PWD" disabled readonly />
                          <label for="PWD" class="formlabel"> PWD </label>
                      <?php } ?>
                  </div>

                  <div class="form-check form-check-inline mt-4">
                      <?php
                        if ($row['lgbt'] == 1) {
                        ?>
                          <input type="checkbox" class="formlabel" name="free" value="LGBT" checked disabled readonly />
                          <label for="LGBT" class="formlabel"> LGBT </label>
                      <?php } else { ?>
                          <input type="checkbox" class="formlabel" name="free" value="LGBT" disabled readonly />
                          <label for="LGBT" class="formlabel"> LGBT </label>
                      <?php } ?>
                  </div>

                  <div class="form-check form-check-inline mt-4">
                      <?php
                        if ($row['voters'] == 1) {
                        ?>
                          <input type="checkbox" class="formlabel" name="free" value="Senior" checked disabled readonly />
                          <label for="Voters" class="formlabel"> Voters </label>
                      <?php } else { ?>
                          <input type="checkbox" class="formlabel" name="free" value="Voters" disabled readonly />
                          <label for="Voters" class="formlabel"> Voters </label>
                      <?php } ?>
                  </div>

                  <div class="form-check form-check-inline mt-4">
                      <?php
                        if ($row['soloParent'] == 1) {
                        ?>
                          <input type="checkbox" class="formlabel" name="free" value="Solo Parent" checked disabled readonly />
                          <label for="Solo Parent" class="formlabel"> Solo Parent </label>
                      <?php } else { ?>
                          <input type="checkbox" class="formlabel" name="free" value="Solo Parent" disabled readonly />
                          <label for="Solo Parent" class="formlabel"> Solo Parent </label>
                      <?php } ?>
                  </div>
              </div>
          </div>

          <!-- ============================================================================================================================================== -->
          <!-- NON-RESIDENTS -->
      <?php
        } else {
            //titignan if isset ung businessID pag set edi ung mga info ng business id ganun 
            $query = mysqli_query($conn, "SELECT * FROM tbl_accounts 
                INNER JOIN tbl_businessowner ON tbl_accounts.bOWnerID = tbl_businessowner.bOwnerID
                WHERE username = '$Username'");
            $row = mysqli_fetch_array($query);
        ?>


          <div class="row g-3">
              <div class="col-md-12 position-relative">
                  <label for="resnum" class="formlabel">Account Number </label>
                  <input type="text" class="form-control" size="62" name="resnum" maxlength="11" disabled value="<?php echo $row['accountID']; ?>">
              </div>
          </div>
          <br>
          <div class="row g-5">
              <div class="col-md-4 position-relative">
                  <label for="username" class="formlabel">Username</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#username" style="text-decoration:none;">Edit</a>
                  <input type="text" class="form-control" size="62" name="username" maxlength="11" disabled value="<?php echo $row['username']; ?>">
              </div>

              <div class="col-md-4 position-relative">
                  <label for="contact" class="formlabel">Contact No. </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#contact" style="text-decoration:none;">Edit</a>
                  <input type="number" class="form-control" size="62" name="contactNum" maxlength="11" disabled value="<?php echo $row['bo_contactNum']; ?>">
              </div>

              <div class="col-md-4 position-relative">
                  <label for="password" class="formlabel">Password </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="" class="edit" data-bs-toggle="modal" data-bs-target="#password" style="text-decoration:none;">Edit</a>
                  <input type="password" class="form-control" size="62" name="password" maxlength="11" disabled value="<?php echo $row['password']; ?>">
              </div>
          </div>
          <hr>

          <h5><b>Personal Information</b></h5>
          <!-- Names-->
          <div class="row g-4">
              <div class="col-md-3 position-relative">
                  <label for="Sname" class="formlabel"> Last Name </label>
                  <input type="text" class="form-control" name="Sname" size="20" placeholder="Surname" maxlength="50" value="<?php echo $row['bo_lastname']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Fname" class="formlabel">First Name </label>
                  <input type="text" class="form-control" name="Fname" size="20" placeholder="First Name" maxlength="50" autofocus value="<?php echo $row['bo_firstname']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="Mname" class="formlabel"> Middle Name </label>
                  <input type="text" class="form-control" name="Mname" size="20" placeholder="Middle Name" maxlength="50" value="<?php
                                                                                                                                    if ($row['bo_middlename'] == '') {
                                                                                                                                        echo ' ';
                                                                                                                                    } else {
                                                                                                                                        echo $row['bo_middlename'];
                                                                                                                                    } ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="suffix" class="formlabel"> Suffix </label>
                  <input type="text" class="form-control" name="suffix" size="20" placeholder="Suffix" maxlength="50" value="<?php
                                                                                                                                if ($row['bo_extension'] == '') {
                                                                                                                                    echo ' ';
                                                                                                                                } else {
                                                                                                                                    echo $row['bo_extension'];
                                                                                                                                } ?>" disabled readonly>
              </div>
          </div>

          <br>

          <!-- Home Address & Birthdate-->
          <div class="row g-4">
              <div class="col-md-9 position-relative">
                  <label for="Address" class="formlabel">Home Address</label>
                  <input type="text" class="form-control" name="Adress" size="20" placeholder="Address" maxlength="50" value="<?php echo $row['bo_address']; ?>" disabled readonly>
              </div>

              <div class="col-md-3 position-relative">
                  <label for="birthdate" class="formlabel">Birthdate </label>
                  <input type="date" class="form-control" name="birthdate" value="<?php echo $row['bo_birthdate']; ?>" disabled readonly>
              </div>
          </div>

          <br>
          <hr>

          <h5><b>Business Information</b></h5>
          <!--Business Address-->
          <div class="row g-4">
              <div class="col-md-6 position-relative">
                  <label for="Address" class="formlabel">Address No.</label>
                  <input type="number" class="form-control" name="Adress" size="20" placeholder="Address" maxlength="50" value="<?php echo $row['businessNum']; ?>" disabled readonly>
              </div>
              <div class="col-md-6 position-relative">
                  <label for="street" class="formlabel">Street</label><br>
                  <select class="form-select" name="street" data-component="dropdown" disabled readonly>
                      <option> <?php echo $row['streetName']; ?> </option>
                  </select>
              </div>
          </div>
      <?php
        }
        ?>
      <br>
      <a href="dashboard.php" class="btn btn-secondary">Back</a>
      <br><br>
  </div>

  </html>


  <!-- 
                                            <div class="col-md-3 position-relative">
                                                    <label for="nonresident_lastname" class="form-label required">Lastname</label>
                                                    <input type="text" class="form-control" id="nonresident_lastname" name="nonresident_lastname" required>
                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_firstname" class="form-label required">Firstname</label>
                                                    <input type="text" class="form-control" id="nonresident_firstname" name="nonresident_firstname" required>

                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_middlename" class="form-label">Middlename</label>
                                                    <input type="text" class="form-control" id="nonresident_middlename" name="nonresident_middlename">

                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_suffix" class="form-label">Suffix</label>
                                                    <input type="text" class="form-control" id="nonresident_suffix" name="nonresident_suffix">

                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_birthdate" class="form-label required">Birthdate</label>
                                                    <input type="date" class="form-control" id="nonresident_birthdate" name="nonresident_birthdate" required>

                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_birthplace" class="form-label required">Birthplace</label>
                                                    <input type="text" class="form-control" id="nonresident_birthplace" name="nonresident_birthplace" required>

                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_height" class="form-label required">Height</label>
                                                    <input type="number" class="form-control" id="nonresident_height" name="nonresident_height" required>

                                                </div>

                                                <div class="col-md-3 position-relative">
                                                    <label for="nonresident_weight" class="form-label required">Weight</label>
                                                    <input type="number" class="form-control" id="nonresident_weight" name="nonresident_weight" required>

                                                </div>

                                                <div class="col-md-8 position-relative">
                                                    <label for="nonresident_address" class="form-label required">Home Address</label>
                                                    <input type="text" class="form-control" id="nonresident_address" name="nonresident_address" required>

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_contactNum" class="form-label required">Contact Number</label>
                                                    <input type="text" class="form-control" id="nonresident_contactNum" name="nonresident_contactNum" required>

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_occupation" class="form-label required">Occupation</label>
                                                    <input type="text" class="form-control" id="nonresident_occupation" name="nonresident_occupation" required>

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_civilStatus" class="form-label required">Civil Status</label>
                                                    <select class="form-select" id="nonresident_civilStatus" name="nonresident_civilStatus" required>
                                                        <option selected disabled value="">Choose Civil Status</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Divorced">Divorced</option>
                                                        <option value="Separated">Separated</option>
                                                        <option value="Widowed">Widowed</option>
                                                    </select>

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_citizenship" class="form-label required">Citizenship</label>
                                                    <input type="text" class="form-control" id="nonresident_citizenship" name="nonresident_citizenship" required>

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_sss" class="form-label">SSS</label>
                                                    <input type="text" class="form-control" id="nonresident_sss" name="nonresident_sss">

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_gsis" class="form-label">GSIS</label>
                                                    <input type="text" class="form-control" id="nonresident_gsis" name="nonresident_gsis">

                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="nonresident_tin" class="form-label">TIN</label>
                                                    <input type="text" class="form-control" id="nonresident_tin" name="nonresident_tin">

                                                </div>

                                                <div class="col-md-2 position-relative">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="nonresident_senior" name="nonresident_senior">
                                                    <label class="form-check-label" for="nonresident_senior">Senior Citizen</label>
                                                </div>
                                                </div>
                                                <div class="col-md-1 position-relative">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="resident_pwd" name="nonresident_pwd">
                                                    <label class="form-check-label" for="nonresident_pwd">PWD</label>
                                                </div>
                                                </div>
                                            </div>
                                            -->

  <?php


    if ($res_contactNum == $contactNumber) {
        //insert accounts tbl
        if ($houseNum == $res_houseNum && $streetName == $streetName) {
            $accountRegister = "INSERT INTO tbl_accounts (residentID, userType, username, password, status,archive,image,activated) VALUES ('$residentID', '$userType', '$username', '$password', '$status', '$archive', '$proof_new_img', '$activated');";
            $accountRegister_query = $conn->query($accountRegister) or die($conn->error);
        } else {
        }
    } else {
        $updateNum = $conn->query("UPDATE tbl_residents SET r_contactNum = '$contactNumber' WHERE residentID = '$residentID");
    }
