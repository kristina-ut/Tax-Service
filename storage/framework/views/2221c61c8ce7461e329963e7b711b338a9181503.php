<html>
<head>

</head>
<body>

        <?php if($message = Session::get('success')): ?>

            <p><?php echo $message; ?></p>

        <?php Session::forget('success');?>
        <?php endif; ?>

        <?php if($message = Session::get('error')): ?>

            <p><?php echo $message; ?></p>

        <?php Session::forget('error');?>
        <?php endif; ?>

    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="<?php echo URL::to('paypal'); ?>">
    	  <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
    	  <?php echo e(csrf_field()); ?>

    	  <h2 class="w3-text-blue">Payment Form</h2>
    	  <p>Demo PayPal form - Integrating paypal in laravel</p>
    	  <label class="w3-text-blue"><b>Enter Amount</b></label>
    	  <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
    	  <button class="w3-btn w3-blue">Pay with PayPal</button>
    	</form>

</body>
</html>
