<?php

namespace App\Controllers;

class Domain extends BaseController
{
    public function index()
    {
        return view('domain_check');
    }

    public function checkAvailability()
    {
        $domain = $this->request->getPost('domain');

        // Perform domain availability check (you can simulate this with array or database query)

        $isAvailable = true; // Replace with actual availability check logic

        if ($isAvailable) {
            if (session()->get('isLoggedIn')) {
                return redirect()->to('/domain/payment')->with('domain', $domain);
            } else {
                return redirect()->to('/login')->with('domain', $domain);
            }
        } else {
            echo "Domain '{$domain}' is not available.";
        }
    }

    public function payment()
    {
        $domain = session()->get('domain');
        return view('payment', ['domain' => $domain]);
    }

    public function confirmOrder()
{
    $fullname = $this->request->getPost('fullname');
    $email = $this->request->getPost('email');
    $amount = $this->request->getPost('amount');
    $payment_method = $this->request->getPost('payment_method');

    // Example: Save order details to database (replace with your actual logic)
    
    // Store order details in session for invoice generation
    session()->setFlashdata('fullname', $fullname);
    session()->setFlashdata('email', $email);
    session()->setFlashdata('amount', $amount);
    session()->setFlashdata('payment_method', $payment_method);

    // Redirect to invoice page
    return redirect()->to('/invoice');
}

    public function invoice()
    {
        $data = [
            'domain' => session()->get('domain'),
            'fullname' => session()->get('fullname'),
            'email' => session()->get('email'),
            'amount' => session()->get('amount'),
            'payment_method' => session()->get('payment_method')
        ];

        return view('invoice', $data);
    }
}