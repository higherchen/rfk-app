<?php

namespace Archive\Models;

use Raichu\Foundation\Model;

class ArchiveModel extends Model
{
    // const sql
    const INSERT_SQL = 'INSERT INTO archive(title,body) VALUES (:title,:body)';
    const UPDATE_SQL = 'UPDATE archive SET title=:title,body=:body WHERE id=:id';

    /* 获取所有稿件列表 */
    public function getAll($fields = '*')
    {
        return $this->query("SELECT {$fields} FROM archive ORDER BY id DESC")->fetchAll(\PDO::FETCH_ASSOC);
    }
}
