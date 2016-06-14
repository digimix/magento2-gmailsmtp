<?php
/**
 * Digimix_GmailSmtpApp Magento component
 *
 * @category    Digimix
 * @package     Digimix_GmailSmtpApp
 * @author      Digimix Studios <hello@digimix.co>
 * @copyright   Digimix (https://digimix.co)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Digimix\GmailSmtpApp\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    
    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\ObjectManagerInterface
     * @return void
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    )
    {
        parent::__construct($context);
    }
    
    /**
     * Get system config password
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return string
     */
    public function getConfigPassword($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/password', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
    /**
     * Get system config username
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return string
     */
    public function getConfigUsername($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/username', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }    
    
    /**
     * Get system config password
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return string
     */
    public function getConfigAuth($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/auth', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
    /**
     * Get system config ssl
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return string
     */
    public function getConfigSsl($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/ssl', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
    /**
     * Get system config password
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return string
     */
    public function getConfigSmtpHost($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/smtphost', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
    /**
     * Get system config reply to
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return bool
     */
    public function getConfigSetReplyTo($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/set_reply_to', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
    
    
    /**
     * Get system config set return path
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return int
     */
    public function getConfigSetReturnPath($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/set_return_path', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
    
    /**
     * Get system config return path email
     * 
     * @param \Magento\Store\Model\ScopeInterface::SCOPE_STORE $store
     * @return string
     */
    public function getConfigReturnPathEmail($store_id = null){
        return $this->scopeConfig->getValue('system/gmailsmtpapp/return_path_email', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store_id);
    }
    
}