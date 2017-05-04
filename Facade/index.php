<<?php
class Purchase {
    private $order;
    private $billing;
    private $shipping;
    
    public function __construct(OrderInterface $order, BillingInterface $billing,
            ShippingInterface $shippng){           
            $this->order=$order;
              $this->billing=$billing;
                $this->shipping=$shipping;   
           }
           
           public function finish(){
               $this->billing->chargeCredicard();
               $this->order->setStatus($this->billing->getStatus());
               
               if($this->order->isOk()){
                   $this->shipping->addToPipeline($this->order);
               }
               
           }
}
           
    $purchase = new Purchase($order, $billing, $shippng);
    $purchase->finish();
           
            

   
       
   

