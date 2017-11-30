<?php

require './method_chain.php';

$chain = new Chain();

$total_amount = $chain->setPrice(10)->setQuantity(20)->setOption([
  'tax' => '0.05',
  'discount' => '150'
])->total_amount();

echo $total_amount;
