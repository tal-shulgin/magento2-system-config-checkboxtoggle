# Magento2 Module System Config CheckboxToggle

``Mageit/module-system-config-checkboxtoggle``

- [Main Functionalities](#markdown-header-main-functionalities)
- [Installation](#markdown-header-installation)
- [Usage](#markdown-header-usage)

## Main Functionalities

System Config CheckboxToggle

## Installation

\* = in production please use the `--keep-generated` option

### Type 1: Zip file

- Unzip the zip file in `app/code/Mageit`
- Enable the module by running `php bin/magento module:enable Shulgin_SystemConfigCheckboxToggle`
- Apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

- Make the module available in a composer repository for example:
  - private repository `repo.magento.com`
  - public repository `packagist.org`
  - public github repository as vcs
- Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
- Install the module composer by running `composer require Mageit/module-system-config-checkboxtoggle`
- enable the module by running `php bin/magento module:enable Shulgin_SystemConfigCheckboxToggle`
- apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

## Usage

in system.xml add filed: \

```
<field id="fieldId" type="SystemConfigToggleCheckbox" ... translate="label,comment">
    <label>Field Label</label>
    <comment/>
</field>
```

in system config dynamicrow use :

```
Mageit\SystemConfigCheckboxToggle\Magento\Framework\View\Element\Html\Toggle
```
