
<div class="trx">
	<center>
	<h1>My Order</h1>
	<p>Shipping and additional costs are calculated based on the values you have entered</p>
    </center>
    <hr>
     <div class="tae-responve">
     	<table class="tab">
     		<thead>
     			<tr>
     				<th>Sr.No</th>
     				<th>Due Amount</th>
     				<th>Invoice Number</th>
     				<th>Quantity</th>
     				<th>Size</th>
     				<th>Order Date</th>
     				<th>Payment Mode</th>
     			</tr>
     		</thead>
     		<tbody>

                    <?php
                    $customer_session= $_SESSION['customer_email'];
                    $get_customer="select * from customers where customer_email='$customer_session'";
                    $run_cust=mysqli_query($con, $get_customer);
                    $row_cust=mysqli_fetch_array($run_cust);
                    $customer_id=$row_cust['customer_id'];
                    $get_order="select * from customer_order where customer_id='$customer_id'";
                    $run_order=mysqli_query($con, $get_order);
                    $i=0;
                    while ($row_order=mysqli_fetch_array($run_order)) {
                         $order_id=$row_order['order_id'];
                         $order_due_amount=$row_order['due_amount'];
                         $order_invoice=$row_order['invoice_no'];
                         $order_qty=$row_order['qty'];
                         $order_size=$row_order['size'];
                         $order_date=substr($row_order['order_date'], 0,11);
                         $payment_mode=$row_order['payment_mode'];
                      
                   

                      ?>
     			<tr>
     				<td><?php echo $order_id ?></td>
     				<td><?php echo $order_due_amount ?></td>
     				<td><?php echo $order_invoice ?></td>
     				<td><?php echo $order_qty ?></td>
     				<td><?php echo $order_size ?></td>
     				<td><?php echo $order_date ?></td>
     				<td><?php echo $payment_mode ?></td>
     				
     			</tr>
     			<?php } ?>
     		</tbody>
     	</table>
     </div>
	 
</div>
