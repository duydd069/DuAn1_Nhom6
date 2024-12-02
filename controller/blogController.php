<?php 
    class BlogController
    {
        public function detail()
        {
            return view("client/blog/blog-detail");

        }

        public function grid()
        {
            return view("client/blog/blog-grid");

        }

        public function list()
        {
            return view("client/blog/blog-list");

        }

        public function left()
        {
            return view("client/blog/blog-sidebar-left");

        }

        public function right()
        {
            return view("client/blog/blog-sidebar-right");

        }
    };
