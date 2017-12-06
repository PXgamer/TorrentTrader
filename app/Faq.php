<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq.
 */
class Faq extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\FaqCategory');
    }
}
