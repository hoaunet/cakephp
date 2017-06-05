<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Type Entity
 *
 * @property int $id
 * @property int $company_id
 * @property string $short_name
 * @property string $name
 * @property int $seq_order
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\CaseSetting[] $case_settings
 * @property \App\Model\Entity\Easycase[] $easycases
 * @property \App\Model\Entity\TypeCompany[] $type_companies
 */
class Type extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
