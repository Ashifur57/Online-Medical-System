<?php require('test/header.php'); ?>
<?php require('test/topnav.php'); ?>
<?php require('test/left-sidebar-short.php'); ?>



<div class="section white-text" style="background: #B35458;">

	<div class="section">
		<h1>Tele Medicine</h1>
		<h6>(At first send 500 tk in 01925221970 to meet doctors)</h6>
	</div>


    <div class="section center" style="padding: 40px;">

        <form action="backends/tele-medicine.php" method="post">

            <?php

            if (isset($_SESSION['msg'])) {
                echo '<div class="row" style="background: red; color: white;">
                <div class="col s12">
                    <h6>'.$_SESSION['msg'].'</h6>
                    </div>
                </div>';
                unset($_SESSION['msg']);
            }

            ?>

            <div class="row">
                <div class="col s12" style="">
                            <div class="input-field">
                            <input id="name" name="name" type="text" class="validate" style="color: white; width: 70%">
                            <label for="name" style="color: white;"><b>Name :</b></label>
                            </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
		<div class="input-field">
                <input id="number" name="number" type="text" class="validate" style="color: white; width: 70%">
                <label for="number" style="color: white;"><b>Phone Number :</b></label>
                </div>
		<div class="input-field">
                <input id="age" name="age" type="text" class="validate" style="color: white; width: 70%">
                <label for="age" style="color: white;"><b>Age :</b></label>
                </div>
		<div class="input-field">
                <input id="t_id" name="t_id" type="text" class="validate" style="color: white; width: 70%">
                <label for="t_id" style="color: white;"><b>Transection ID :<br>Only bkash<br>payment accepted)</b></label>
                </div>
                <div class="input-field">
                <input id="bill" name="bill" type="text" class="validate" style="color: white; width: 70%">
                <label for="bill" style="color: white;"><b>Bill :</b></label>
                </div>
                
                </div>
            
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="section right" style="padding: 15px 10px;">
                        <a href="https://meet.google.com" class="waves-effect waves-light btn">Join Now</a>
                    </div>
                    <div class="section right" style="padding: 15px 20px;">
                        <button type="submit" class="waves-effect waves-light btn">Pay Now</button>
                    </div>
                </div>
            </div>

        </form>


    </div>

</div>