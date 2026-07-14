<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';

    protected $primaryKey = 'id';

    protected $allowedFields = [

        'image1',
        'image2',
        'image3',

        'title',

        'icon',

        'description',

        'sort_order'

    ];
}
