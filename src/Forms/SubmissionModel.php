<?php

namespace Statamic\Eloquent\Forms;

use Statamic\Eloquent\Database\BaseModel;

class SubmissionModel extends BaseModel
{
    protected $guarded = [];

    public $incrementing = false;

    protected $table = 'form_submissions';

    protected function casts(): array
    {
        return [
            'data' => 'json',
        ];
    }

    protected $dateFormat = 'Y-m-d H:i:s.u';
}
