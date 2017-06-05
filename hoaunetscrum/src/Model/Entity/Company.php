<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property string $name
 * @property string $seo_url
 * @property int $subscription_id
 * @property string $logo
 * @property string $website
 * @property string $contact_phone
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $is_beta
 * @property int $is_active
 * @property int $is_deactivated
 * @property int $twitted
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\Subscription $subscription
 * @property \App\Model\Entity\Archive[] $archives
 * @property \App\Model\Entity\CaseFile[] $case_files
 * @property \App\Model\Entity\CaseRecent[] $case_recents
 * @property \App\Model\Entity\CaseTemplate[] $case_templates
 * @property \App\Model\Entity\CompanyUser[] $company_users
 * @property \App\Model\Entity\CustomFilter[] $custom_filters
 * @property \App\Model\Entity\DailyUpdate[] $daily_updates
 * @property \App\Model\Entity\DailyupdateNotification[] $dailyupdate_notifications
 * @property \App\Model\Entity\DefaultProjectTemplateCase[] $default_project_template_cases
 * @property \App\Model\Entity\DefaultProjectTemplate[] $default_project_templates
 * @property \App\Model\Entity\LogActivity[] $log_activities
 * @property \App\Model\Entity\Milestone[] $milestones
 * @property \App\Model\Entity\ProjectTemplateCase[] $project_template_cases
 * @property \App\Model\Entity\ProjectTemplate[] $project_templates
 * @property \App\Model\Entity\ProjectUser[] $project_users
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\TemplateModuleCase[] $template_module_cases
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\TypeCompany[] $type_companies
 * @property \App\Model\Entity\Type[] $types
 * @property \App\Model\Entity\UserInvitation[] $user_invitations
 * @property \App\Model\Entity\UserSubscription[] $user_subscriptions
 */
class Company extends Entity
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
