<?php require('test/header.php'); ?>
<?php require('test/left-sidebar-long.php'); ?>
<?php require('test/topnav.php'); ?>
<?php require('test/left-sidebar-short.php'); ?>



<div class="section white-text" style="background: #B35458;">

	<div class="section">
		<h1>TEST</h1>
	</div>


    <div class="section center" style="padding: 40px;">

        <form action="backends/test.php" method="post">

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
                <input id="address" name="address" type="text" class="validate" style="color: white; width: 70%">
                <label for="address" style="color: white;"><b>Address :</b></label>
                </div>
		<div class="input-field">
                <input id="number" name="number" type="text" class="validate" style="color: white; width: 70%">
                <label for="number" style="color: white;"><b>Phone Number :</b></label>
                </div>
		<div class="input-field">
                <input id="test" name="test" type="text" class="validate" style="color: white; width: 70%">
                <label for="test" style="color: white;"><b>Test Name :</b></label>
                </div>
		<div class="input-field">
                <input id="payment" name="payment" type="text" class="validate" style="color: white; width: 70%">
                <label for="payment" style="color: white;"><b>Paymen Method<br>(Cash Or bKash)<br>sent money in(01925221970) :</b></label>
                </div>
		<div class="input-field">
                <input id="t_id" name="t_id" type="text" class="validate" style="color: white; width: 70%">
                <label for="t_id" style="color: white;"><b>Transection ID :</b></label>
                </div>
                <div class="input-field">
                <input id="price" name="price" type="text" class="validate" style="color: white; width: 70%">
                <label for="price" style="color: white;"><b>Price :</b></label>
                </div>
                
                </div>
            
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="section right" style="padding: 15px 10px;">
                        <a href="index.php" class="waves-effect waves-light btn">Dismiss</a>
                    </div>
                    <div class="section right" style="padding: 15px 20px;">
                        <button type="submit" class="waves-effect waves-light btn">Submit</button>
                    </div>
                </div>
            </div>

        </form>


    </div>

</div>