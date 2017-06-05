<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property int $user_id
 * @property int $company_id
 * @property string $name
 * @property string $short_name
 * @property string $description
 * @property string $logo
 * @property int $project_type
 * @property int $default_assign
 * @property int $isactive
 * @property \Cake\I18n\FrozenTime $dt_created
 * @property \Cake\I18n\FrozenTime $dt_updated
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\CaseActivity[] $case_activities
 * @property \App\Model\Entity\CaseFileDrive[] $case_file_drives
 * @property \App\Model\Entity\CaseFile[] $case_files
 * @property \App\Model\Entity\CaseRecent[] $case_recents
 * @property \App\Model\Entity\CaseSetting[] $case_settings
 * @property \App\Model\Entity\CaseUserView[] $case_user_views
 * @property \App\Model\Entity\DailyUpdate[] $daily_updates
 * @property \App\Model\Entity\EasycaseMilestone[] $easycase_milestones
 * @property \App\Model\Entity\Easycase[] $easycases
 * @property \App\Model\Entity\Milestone[] $milestones
 * @property \App\Model\Entity\ProjectTechnology[] $project_technologies
 * @property \App\Model\Entity\ProjectUser[] $project_users
 * @property \App\Model\Entity\TemplateModuleCase[] $template_module_cases
 * @property \App\Model\Entity\UserInvitation[] $user_invitations
 */
class Project extends Entity
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
