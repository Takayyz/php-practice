<?php

class Person {
    // --------------------
    // 従来の書き方
    // --------------------
    // public string $firstname;
    // public string $lastname;
    // public int $age;

    // /**
    //  * @param string $firstname
    //  * @param string $lastname
    //  * @param integer $age
    //  */
    // public function __construct(
    //     string $firstname,
    //     string $lastname,
    //     int $age
    // ) {
    //     $this->firstname = $firstname;
    //     $this->lastname = $lastname;
    //     $this->age = $age;
    // }


    // --------------------
    // PHP8の書き方
    // --------------------
    public function __construct(
        public string $firstname,
        public string $lastname,
        public int $age
    ) {
        //
    }
}
