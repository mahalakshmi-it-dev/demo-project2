<?php
class customer {
	private $customer_id;
	
	const HOSTNAME = "localhost";
	
	public function __construct ($customer_id)
	{
			$this->customer_id = $customer_id;
	}
	
	protected function getCustomer()
	{
		self::HOSTNAME;
		echo "This is the customer ID:".$this->customer_id;
	}
}

class order extends customer
{
	private $orderid;
	
	public function getOrder($order_id)
	{
		echo $this->getCustomer()." Order ID is:". $order_id;
	}
}

$order_obj = new order("2");
$order_obj->getOrder("101");
?>