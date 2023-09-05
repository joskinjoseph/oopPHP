<?php

namespace Sturborn {

    class User
    {
        public function getData()
        {
            echo __METHOD__ . '<br>';
        }

        public function hello()
        {
            echo 'Namespace: ' . __NAMESPACE__ . '<br>';
        }
    }

    $obj = new User();
    $obj->getData();
    $obj->hello();

}

namespace Person {
    class User
    {
        public function showData()
        {
            echo __METHOD__ . '<br>';
        }

    }

    $obj = new User();
    $obj->showData();
    $obj->hello();

}
