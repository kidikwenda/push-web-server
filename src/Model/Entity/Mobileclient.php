<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mobileclient Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $endpoint
 * @property string|null $p256dh
 * @property string|null $auth
 */
class Mobileclient extends Entity
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
        'name' => true,
        'endpoint' => true,
        'p256dh' => true,
        'auth' => true,
    ];
}
