<?php
require('config.php');
?>
<form action="sumbit.php" method="POST">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
    data-key="<?php echo $Publishablekey?>"
    data-amount="500"
    data-name="ML-KART"
    data-description="ML-KART"
    data-image=""
    data-currency="inr" 
    >
    </script>
</form>