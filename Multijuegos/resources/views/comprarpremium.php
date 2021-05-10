<html>
<head>
    <title>Braintree Payment Demo</title>
    <style>
        StripeElement {
           background-color: white;
           padding: 8px 12px;
           border-radius: 4px;
           border: 1px solid transparent;
           box-shadow: 0 1px 3px 0 #e6ebf1;
          -webkit-transition: box-shadow 150ms ease;
          transition: box-shadow 150ms ease;
       }

       .StripeElement--focus {
           box-shadow: 0 1px 3px 0 #cfd7df;
       }

       .StripeElement--invalid {
           border-color: #fa755a;
       }

       .StripeElement--webkit-autofill {
           background-color: #fefde5 !important;
       }
    </style>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <form action="/checkout" method="post" id="payment-form">
        <div class="form-row">
            <label for="card-element">Credit or debit card</label>
           <div id="card-element"></div>
           <div id="card-errors" role="alert"></div>
        </div>
        <button>Submit Payment</button>
     </form>

     <script>

         // Create a Stripe client
         var stripe = Stripe('pk_test_51IpaOSDYowKJ8tcoNzppbOh49NwzRqyH70qv7ONt1QrhoXDtxvEFxmXBNaj11oz1DSiep8l1tQkyqW3DI3UgGU5U00Lzv2Xsz9');

         // Create an instance of Elements
         var elements = stripe.elements();

         // Custom styling can be passed to options when creating an Element.
         // (Note that this demo uses a wider set of styles than the guide below.)
         var style = {
             base: {
                 color: '#32325d',
                 lineHeight: '24px',
                 fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                 fontSmoothing: 'antialiased',
                 fontSize: '16px',
                 '::placeholder': {
                    color: '#aab7c4'
                 }
            },
            invalid: {
               color: '#fa755a',
               iconColor: '#fa755a'
            }
     };

     // Create an instance of the card Element
     var card = elements.create('card', {style: style});

     // Add an instance of the card Element into the `card-element` <div>
     card.mount('#card-element');

     // Handle real-time validation errors from the card Element.
     card.addEventListener('change', function(event) {
         var displayError = document.getElementById('card-errors');
         if (event.error) {
             displayError.textContent = event.error.message;
         } else {
           displayError.textContent = '';
         }
     });

     // Handle form submission
     var form = document.getElementById('payment-form');
     form.addEventListener('submit', function(event) {
           event.preventDefault();
           stripe.createToken(card).then(function(result) {
           if (result.error) {
               // Inform the user if there was an error
               var errorElement = document.getElementById('card-errors');
               errorElement.textContent = result.error.message;
           } else {
              // Send the token to your server
              stripeTokenHandler(result.token);
           }
        });
    });
    </script>
</body>
</html>