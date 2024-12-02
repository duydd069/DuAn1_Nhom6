<?php 
        class PayController
        {
            public function confirmation()
            {
    
                return view('client/payment/payment-confirmation');
            }

            public function failure()
            {
    
                return view('client/payment/payment-failure');
            }

            public function policy()
            {
    
                return view('client/payment/privacy-policy');
            }
        }