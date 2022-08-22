<?php require_once("config.php") ?>
<style>
     #uni_modal .modal-content>.modal-footer{
        display:none !important;
    }
    #uni_modal .modal-content>.modal-body{
        padding:unset !important;
    }
</style>

<div class="container-fluid py-2 px-3">
    <p>Your donation will be much appreciated and can help others. Thank you!</p>
    <div class="form-group">
        <input type="number" step="2" min="0" id="amount" class="form-control form-control-lg text-right">
        <center><small>Enter Donation Amount Here</small></center>
    </div>
    <div class="form-group">
    <center><span id="paypal-button"></span><br>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    </div>
    </center>
</div>
<script>

function payment_online(){
    $('[name="payment_method"]').val("Online Payment")
    $('[name="paid"]').val(1)
    $('#place_order').submit()
}
$(function(){
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,
 
        //app's client id's
	client: {
        sandbox:    'AdDNu0ZwC3bqzdjiiQlmQ4BRJsOarwyMVD_L4YQPrQm4ASuBg4bV5ZoH-uveg8K_l9JLCmipuiKt4fxn',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },
 
    commit: true, // Show a 'Pay Now' button
 
    style: {
    	color: 'blue',
    	size: 'small'
    },
 
    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: $('#amount').val(), 
                        	currency: 'PHP' 
                        }
                    }
                ]
            }
        });
    },
 
    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
    		// //sweetalert for successful transaction
    		// swal('Thank you!', 'Paypal purchase successful.', 'success');
            donation_success()
        });
    },
 
}, '#paypal-button');
})
function donation_success(){
    start_loader()
    $.ajax({
        url:"classes/Master.php?f=save_donation",
        method:'POST',
        data:{amount:$('#amount').val()},
        dataType:'json',
        error:err=>{
            console.log(err)
            alert_toast("PayPay Process Was successfull but failed to record the amount into the database")
            end_loader();
        },success:function(resp){
            if(resp.status == 'success'){
                location.reload()
            }else{
                console.log(resp)
                alert_toast("PayPay Process Was successfull but failed to record the amount into the database")
            }
            end_loader();
        }
    })
}
</script>