<?php

class AsiaConnect_Gallery_Model_Mysql4_Album_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('gallery/album');
    }
}