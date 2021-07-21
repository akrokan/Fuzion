@extends('layouts.app')

@section('content')

<script src="https://www.paypal.com/sdk/js?client-id=Ae_qgCiOwroEsFL2Vb3bdgBF-nb0nzq0pzsxGTGSSU0kulr23k_m3GW5dqV_WZR43Lb2T5DYUJD6QcdX&currency=EUR"></script>

<div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            currency_code: 'EUR',
            value: '5.00'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

@endsection