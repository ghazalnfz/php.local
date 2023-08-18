<?php

class Payment extends DB
{

    public function __construct()
    {
        $this->table = "payments";
    }

    public function get_all_payments_from_user_id($user_id)
    {
        return "SELECT * FROM {$this->table} WHERE user_id = {$user_id}";
    }

}