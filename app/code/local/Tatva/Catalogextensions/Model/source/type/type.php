<?php

class Tatva_Catalogextensions_Model_Source_type_type
{
    public function toOptionArray()
    {
        $color = array(
            'Default News' => Mage::helper('catalogextensions')->__('Default News'),
            'Recently Added' => Mage::helper('catalogextensions')->__('Recently Added'),
        );

/*        $styles = array(
            'trans' => Mage::helper('googlecheckout')->__('Transparent'),
            'white' => Mage::helper('googlecheckout')->__('White Background'),
        ); */

        $options = array();
        foreach ($color as $color => $colorLabel) {
           
                $options[] = array(
                    'value' => $color ,
                    'label' => $colorLabel
                );
        
        }

        return $options;
    }
}
?>