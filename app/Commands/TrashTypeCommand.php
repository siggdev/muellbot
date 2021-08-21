<?php

namespace App\Commands;

use App\Models\TrashType;

class TrashTypeCommand
{
    public function store(array $data) {
        $trash_type = new TrashType([
            'name' => $data['name'],
            'with_article' => $data['with_article'],
            'description' => $data['description'],
            'color' => $data['color'],
            'text_color' => $data['text_color'],
        ]);

        $trash_type->save();
        return $trash_type;
    }
}
