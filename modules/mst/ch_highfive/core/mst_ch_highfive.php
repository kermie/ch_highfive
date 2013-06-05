<?php
class mst_ch_highfive extends mst_ch_highfive_parent
{
    public function getPrice()
    {
        if ( $this->_blNetPriceMode ) {
            return $this->getNettoPrice();
            } else {
            $value = round(($this->getBruttoPrice()+0.000001)*20)/20;
            return $value;
        }
    }
}