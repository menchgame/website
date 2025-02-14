<?php

// PayPal API endpoint for creating invoices (use sandbox or live URL accordingly)
$paypalUrl = 'https://api.sandbox.paypal.com/v2/invoicing/invoices';

// Build the invoice payload
$data = [
    "detail" => [
        "reference"      => "Title",         // Optional reference
        "note"           => "Messages",
        "invoice_date"   => date("Y-m-d"),      // Invoice date in YYYY-MM-DD format
        "currency_code"  => "USD",              // Currency code
        "payment_term"   => [
            "term_type" => "NET_0",
            "due_date"    => date("Y-m-d")
        ],
    ],
    "configuration" => [
        "allow_tip"                      => false,         // Optional reference
        "tax_calculated_after_discount"  => true,
        "tax_inclusive"                  => true,
        "invoice_date"   => date("Y-m-d"),      // Invoice date in YYYY-MM-DD format
        "currency_code"  => "USD",              // Currency code
        "partial_payment"   => [
            "allow_partial_payment" => true,
            "minimum_amount_due"   => [
                "currency_code" => "USD",
                "value"         => "100.00"
            ],
        ],
    ],
    "invoicer" => [
        "name"          => [
            "given_name" => "John",
            "surname"    => "Doe"
        ],
        "email_address" => "invoicer@example.com",
    ],
    "primary_recipients" => [
        [
            "billing_info" => [
                "name"          => [
                    "given_name" => "Jane",
                    "surname"    => "Doe"
                ],
                "email_address" => "recipient@example.com"
            ]
        ]
    ],
    "items" => [
        [
            "name"        => "Product Name",
            "quantity"    => "1",
            "unit_amount" => [
                "currency_code" => "USD",
                "value"         => "100.00"
            ]
        ]
    ]
];

// Encode the payload to JSON
$jsonData = json_encode($data);

// Initialize cURL session
$ch = curl_init($paypalUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer " . $this->config->item('paypal_access_token'),
    "Accept: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Get HTTP status code for error handling
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    if ($httpCode == 201) { // HTTP 201 Created
        echo "Invoice created successfully:\n" . $response;
    } else {
        echo "Failed to create invoice. HTTP Status Code: $httpCode\nResponse: $response";
    }
}

// Close cURL session
curl_close($ch);
?>