<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CaseFile Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $project_id
 * @property int $company_id
 * @property int $easycase_id
 * @property int $comment_id
 * @property string $file
 * @property string $thumb
 * @property float $file_size
 * @property int $count
 * @property string $downloadurl
 * @property int $isactive
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Easycase $easycase
 * @property \App\Model\Entity\Comment $comment
 * @property \App\Model\Entity\Archive[] $archives
 */
class CaseFile extends Entity
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
