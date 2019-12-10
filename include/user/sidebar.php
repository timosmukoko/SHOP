<?php include("db.php"); ?> 
 
<div class="col-sm-3">
					<div class="left-sidebar">
					    <h2>Account</h2>
						<div class="list-group">						 
						Hello user <? echo $_SESSION['username1'];?>
						</div>
						<div class="list-group">
						<a href="orderUserViews.php" class="list-group-item active">View your order</a>
						</div>
						<div class="list-group">
						<a href="orderUser.php" class="list-group-item active">View your cart</a>
						</div>
                            <div class="list-group">
                               <a href="logout2.php" class="list-group-item active">Logout</a>
                            </div>
                        </div>
                        </div>