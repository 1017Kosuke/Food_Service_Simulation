<?php

namespace Invoices;

use DateTime;


class Invoice {
    private float $finalPrice;
    private DateTime $orderTime;
    private int $estimatedTimeMinutes;

    function __construct(float $finalPrice, DateTime $orderTime, int $estimatedTimeMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeMinutes = $estimatedTimeMinutes;
    }

    function printInvoice() {
        echo "Invoice Details:\n";
        echo "Final Price: $" . number_format($this->finalPrice, 2) . "\n";
        echo "Order Time: " . $this->orderTime->format('Y-m-d H:i:s') . "\n";
        echo "Estimated Time: " . $this->estimatedTimeMinutes . " minutes\n";
    }
}
