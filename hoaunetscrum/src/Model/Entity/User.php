<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property string $btprofile_id
 * @property int $usersubscription_id
 * @property string $credit_cardtoken
 * @property string $card_number
 * @property string $expiry_date
 * @property string $email
 * @property string $password
 * @property string $name
 * @property int $is_beta
 * @property string $last_name
 * @property string $short_name
 * @property int $istype
 * @property string $photo
 * @property string $photo_reset
 * @property int $isactive
 * @property int $timezone_id
 * @property int $isemail
 * @property int $is_agree
 * @property int $usersub_type
 * @property float $est_billing_amount
 * @property \Cake\I18n\FrozenTime $dt_created
 * @property \Cake\I18n\FrozenTime $dt_updated
 * @property \Cake\I18n\FrozenTime $dt_last_login
 * @property \Cake\I18n\FrozenTime $dt_last_logout
 * @property string $query_string
 * @property string $update_email
 * @property string $update_random
 * @property string $gaccess_token
 * @property string $ip
 * @property string $sig
 * @property int $desk_notify
 * @property int $active_dashboard_tab
 * @property int $is_moderator
 * @property int $show_default_inner
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\Btprofile $btprofile
 * @property \App\Model\Entity\UserSubscription[] $user_subscriptions
 * @property \App\Model\Entity\Timezone $timezone
 * @property \App\Model\Entity\Archive[] $archives
 * @property \App\Model\Entity\CaseAction[] $case_actions
 * @property \App\Model\Entity\CaseActivity[] $case_activities
 * @property \App\Model\Entity\CaseFile[] $case_files
 * @property \App\Model\Entity\CaseFilter[] $case_filters
 * @property \App\Model\Entity\CaseRecent[] $case_recents
 * @property \App\Model\Entity\CaseSetting[] $case_settings
 * @property \App\Model\Entity\CaseTemplate[] $case_templates
 * @property \App\Model\Entity\CaseUserEmail[] $case_user_emails
 * @property \App\Model\Entity\CaseUserView[] $case_user_views
 * @property \App\Model\Entity\CompanyUser[] $company_users
 * @property \App\Model\Entity\CustomFilter[] $custom_filters
 * @property \App\Model\Entity\DailyUpdate[] $daily_updates
 * @property \App\Model\Entity\DailyupdateNotification[] $dailyupdate_notifications
 * @property \App\Model\Entity\DefaultProjectTemplateCase[] $default_project_template_cases
 * @property \App\Model\Entity\DefaultProjectTemplate[] $default_project_templates
 * @property \App\Model\Entity\EasycaseMilestone[] $easycase_milestones
 * @property \App\Model\Entity\Easycase[] $easycases
 * @property \App\Model\Entity\EmailReminder[] $email_reminders
 * @property \App\Model\Entity\LogActivity[] $log_activities
 * @property \App\Model\Entity\Milestone[] $milestones
 * @property \App\Model\Entity\OsSessionLog[] $os_session_logs
 * @property \App\Model\Entity\ProjectTemplateCase[] $project_template_cases
 * @property \App\Model\Entity\ProjectTemplate[] $project_templates
 * @property \App\Model\Entity\ProjectUser[] $project_users
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\SaveReport[] $save_reports
 * @property \App\Model\Entity\TemplateModuleCase[] $template_module_cases
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\UserInfo[] $user_infos
 * @property \App\Model\Entity\UserInvitation[] $user_invitations
 * @property \App\Model\Entity\UserLogin[] $user_logins
 * @property \App\Model\Entity\UserNotification[] $user_notifications
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
