<?php
    function getDiscountedPrice(float $original_price, float $discount):float{
        $mul=$original_price * $discount;
        $discounted_price=$original_price-($mul/100);
        return $discounted_price;

    }

    echo "Discounted Price: ". getDiscountedPrice(260.0, 20.0);
