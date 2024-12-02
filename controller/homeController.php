<?php 
    class HomeController
    {
        public function home()
        {
            // session_start();

            // if (!isset($_SESSION['user'])) {
            //     header('Location: index.php?ctl=login');  // Nếu không có người dùng trong session, chuyển hướng về trang login
            //     die();
            // }

            $product = (new home())->home();
            return view('client/home/home',['product' => $product]);
        }

        public function home2()
        {
            
            return view('client/home/home-02');
        }

        public function home3()
        {

            return view('client/home/home-03');
        }

        public function home4()
        {

            return view('client/home/home-04');
        }

        public function home5()
        {

            return view('client/home/home-05');
        }

        public function home6()
        {

            return view('client/home/home-06');
        }

        public function home7()
        {

            return view('client/home/home-07');
        }
        public function home8()
        {

            return view('client/home/home-08');
        }

        public function accessories()
        {

            return view('client/home/home-accessories');
        }

        public function activewear()
        {

            return view('client/home/home-activewear');
        }


        public function baby()
        {

            return view('client/home/home-baby');
        }
        public function decor()
        {

            return view('client/home/home-decor');
        }
        public function dog_accessories()
        {

            return view('client/home/home-dog-accessories');
        }

        public function electronic()
        {

            return view('client/home/home-electronic');
        }

        public function furniture_02()
        {

            return view('client/home/home-furniture-02');
        }

        public function furniture()
        {

            return view('client/home/home-furniture');
        }

        public function giftcard()
        {

            return view('client/home/home-giftcard');
        }

        public function glasses()
        {

            return view('client/home/home-glasses');
        }

        public function grocery()
        {

            return view('client/home/home-grocery');
        }

        public function handbag()
        {

            return view('client/home/home-handbag');
        }

        public function headphone()
        {

            return view('client/home/home-headphone');
        }

        public function jewerly()
        {

            return view('client/home/home-jewerly');
        }

        public function kids()
        {

            return view('client/home/home-kids');
        }

        public function kitchen_wear()
        {

            return view('client/home/home-kitchen-wear');
        }

        public function men()
        {

            return view('client/home/home-men');
        }

        public function multi_brand()
        {

            return view('client/home/home-multi-brand');
        }

        public function paddle_boards()
        {

            return view('client/home/home-paddle-boards');
        }

        public function phonecase()
        {

            return view('client/home/home-phonecase');
        }

        public function pod_store()
        {

            return view('client/home/home-pod-store');
        }

        public function search()
        {

            return view('client/home/home-search');
        }

        public function setup_gear()
        {

            return view('client/home/home-setup-gear');
        }

        public function skateboard()
        {

            return view('client/home/home-skateboard');
        }

        public function skincare()
        {

            return view('client/home/home-skincare');
        }

        public function sneaker()
        {

            return view('client/home/home-sneaker');
        }

        public function sock()
        {

            return view('client/home/home-sock');
        }

        public function stroller()
        {

            return view('client/home/home-stroller');
        }

        public function tee()
        {

            return view('client/home/home-tee');
        }

        
        


    }