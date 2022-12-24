<?php
namespace Magit\SystemConfigCheckboxToggle\Magento\Framework\Data\Form\Element;

use Magento\Framework\Escaper;
use Magento\Framework\Data\Form\Element\Checkbox;
use Magento\Framework\Data\Form\Element\Factory;
use Magento\Framework\Data\Form\Element\CollectionFactory;

Class ToggleCheckbox extends Checkbox {
    /**
     * @param Factory $factoryElement
     * @param CollectionFactory $factoryCollection
     * @param Escaper $escaper
     * @param array $data
     */
    public function __construct(
        Factory $factoryElement,
        CollectionFactory $factoryCollection,
        Escaper $escaper,
        $data = []
    ) {
        parent::__construct($factoryElement, $factoryCollection, $escaper, $data);
        $this->setType('checkbox');
        $this->setExtType('checkbox');
    }

    protected function _construct()
    {
        $this->setData('class', 'admin__actions-switch-checkbox hidden');
        $this->setData('onchange', 'this.value = this.checked;');
        $this->setIsChecked($this->getValue());
        //@codingStandardsIgnoreEnd
    }

    /**
     * Get the after element Javascript.
     *
     * @return mixed
     */
    public function getAfterElementJs()
    {
        $htmlId = $this->getHtmlId();
        $afterElementJs =  $this->getData('after_element_js');
        $afterElementJs .= '
            <label class="admin__actions-switch-label" for="'. $htmlId .'">
                <span class="admin__actions-switch-text" data-text-on="'.__('Yes').'" data-text-off="'.__('No').'">
                </span>
            </label>
        ';

        return $afterElementJs;
    }
}
