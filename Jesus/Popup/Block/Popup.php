<?php
declare(strict_types=1);
/**
 *@author Jesus
 */

namespace Jesus\Popup\Block;

class Popup extends \Magento\Framework\View\Element\Template
{
    private $scopeConfig;
    private $storeManager;

    /**
     * Popup constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        $this->scopeConfig = $context->getScopeConfig();
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->scopeConfig->getValue(
            'custompopup/general/popup_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getImage()
    {
        $mediaUrl = $this->storeManager->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $path = "popupImage/". $this->scopeConfig->getValue(
            'custompopup/general/upload_image_id',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $mediaUrl.$path;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->scopeConfig->getValue(
            'custompopup/general/popup_message',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
