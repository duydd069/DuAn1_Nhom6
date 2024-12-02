<?php 
        class MyController
        {
            public function address()
            {
                return view('client/my/my-account-address');
            }

            public function edit()
            {
                return view('client/my/my-account-edit');
            }

            public function details()
            {
                return view('client/my/my-account-orders-details');
            }

            public function orders()
            {
                return view('client/my/my-account-orders');
            }

            public function wishlist()
            {
                return view('client/my/my-account-wishlist');
            }
            public function account()
            {
                return view('client/my/my-account');
            }
        }