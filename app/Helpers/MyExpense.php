<?php


namespace App\Helpers;


class MyExpense
{
    private $myexpense = [
        'expenses' => [],
        'totalQty' => 0,
        'totalPrice' => 0
    ];



    public function __construct()
    {
        if (session()->get('myexpense')){
            $this->myexpense = session()->get('myexpense');
        }
    }

    // Add a record to the myExpense
    public function add($item)
    {
        // add logic comes here
        session()->put('myexpense', $this->myexpense);  // save the session
    }

    // Delete a record from myExpense
    public function delete($item)
    {
        // delete logic comes here
        session()->put('myexpense', $this->myexpense);  // save the session
    }

    // Empty the myExpense
    public function empty()
    {
        session()->forget('myexpense');
    }

    // Get the complete myExpense
    public function getExpense()
    {
        return $this->myexpense;
    }

    // Get all the records from the cart
    public function getExpenses()
    {
        return $this->myexpense['expenses'];
    }

    // Get one record from the cart
    public function getOneExpense($key)
    {
        if (array_key_exists($key, $this->myexpense['expenses'])) {
            return $this->myexpense['expenses'][$key];
        }
    }

    // Get all the record keys
    public function getKeys()
    {
        return array_keys($this->myexpense['expenses']);
    }

    // Get the number of items
    public function getTotalQty()
    {
        return $this->myexpense['totalQty'];
    }

    // Get the total price
    public function getTotalPrice()
    {
        return $this->myexpense['totalPrice'];
    }

    // Calculate the number of items and total price
    private function updateTotal()
    {
        // calculate logic comes here
    }
}
