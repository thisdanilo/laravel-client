<?php

namespace App\Models\Presenters;

use TheHiveTeam\Presentable\Presenter;

class ClientPresenter extends Presenter
{
    /**
     * This is a example.
     */
    public function getActive(): string
    {
        if ($this->model->active) {
            return '<span class="badge bg-success">'.$this->model->formatted_active.'</span>';
        }

        return '<span class="badge bg-danger">'.$this->model->formatted_active.'</span>';
    }
}
