<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Easycase Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property int $case_no
 * @property int $case_count
 * @property int $project_id
 * @property int $user_id
 * @property int $updated_by
 * @property int $type_id
 * @property string $priority
 * @property string $title
 * @property string $message
 * @property float $estimated_hours
 * @property float $hours
 * @property int $completed_task
 * @property int $assign_to
 * @property \Cake\I18n\FrozenDate $due_date
 * @property int $istype
 * @property int $format
 * @property int $status
 * @property int $legend
 * @property int $isactive
 * @property \Cake\I18n\FrozenTime $dt_created
 * @property \Cake\I18n\FrozenTime $actual_dt_created
 * @property int $reply_type
 * @property bool $is_chrome_extension
 * @property bool $from_email
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Archive[] $archives
 * @property \App\Model\Entity\CaseAction[] $case_actions
 * @property \App\Model\Entity\CaseActivity[] $case_activities
 * @property \App\Model\Entity\CaseFileDrive[] $case_file_drives
 * @property \App\Model\Entity\CaseFile[] $case_files
 * @property \App\Model\Entity\CaseRecent[] $case_recents
 * @property \App\Model\Entity\CaseUserEmail[] $case_user_emails
 * @property \App\Model\Entity\CaseUserView[] $case_user_views
 * @property \App\Model\Entity\EasycaseMilestone[] $easycase_milestones
 */
class Easycase extends Entity
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
