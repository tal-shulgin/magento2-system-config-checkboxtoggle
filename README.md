# Magento2 Module System Config Ui CheckboxToggle


- [Main Functionalities](#markdown-header-main-functionalities)
- [Installation](#markdown-header-installation)
- [Usage](#markdown-header-usage)

## Main Functionalities

System Config Ui toggle replacement to YesNo and EnableDisable boring select

## Installation

\* = in production please use the `--keep-generated` option

### Type 1: Zip file

- Unzip the zip file in `app/code/Mageit`
- Enable the module by running `php bin/magento module:enable Shulgin_SystemConfigCheckboxToggle`
- Apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

- Make the module available in a composer repository for example:
- Add the composer repository to the configuration by running `composer config repositories.mageit-module-system-config-checkboxtoggle vcs https://github.com/tal-shulgin/magento2-system-config-checkboxtoggle.git`
- Install the module composer by running `composer require Mageit/module-system-config-checkboxtoggle`
- enable the module by running `php bin/magento module:enable Mageit_SystemConfigCheckboxToggle`
- apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

## Usage

### use in system.xml add filed:

```
<field id="fieldId" type="toggle" ... translate="label,comment">
    <label>Field Label</label>
    <comment/>
</field>
```

#### can be used with source model to print custom labels
```
<field id="fieldId" type="toggle" ... translate="label,comment">
    <label>Field Label</label>
    <source_model>Magento\Config\Model\Config\Source\Yesno</source_model>
    <comment/>
</field>
```

### use in system config dynamic row use :

```
Mageit\SystemConfigCheckboxToggle\Magento\Framework\View\Element\Html\Toggle
```
